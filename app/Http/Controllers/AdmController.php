<?php

namespace App\Http\Controllers;

use App\Models\Comanda;
use App\Models\Categoria;
use App\Models\Carrinho;
use App\Models\Endereco;
use App\Models\Funcionario;
use App\Models\Lanche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdmController extends Controller
{

    public static function sumValue() {
        $total = Lanche::query('lanches')
                                ->join('carrinhos', 'carrinhos.idlanche', '=', 'lanches.id')
                                ->join('comandas', 'comandas.id', '=', 'carrinhos.idcomanda')
                                ->where('carrinhos.idcomanda', '=', session('sessionUser.cart.id'))
                                ->select()
                                ->sum('lanches.valor');

        return $total;
    }

    //Verifica se ja foi criado comanda para o usuário externo.
    private function checkSessionUser() {
        return session()->has('sessionUser');
    }

    //Verifica se o funcionário está logado.
    private function checkSessionFunc() {
        return session()->has('sessionFunc');
    }

    public function verifySession() {
        //Checa se existe uma sessão de funcionário, se tiver não há a necessidade
        //de existir uma sessão de usuário(cliente)
        if(!$this->checkSessionFunc()) {
            //Se não existir sessão de funcionário, então e um cliente acessando
            //Enão deverá criar um comanda para este usuário 
            if(!$this->checkSessionUser()) {
                $cart = new Comanda();
                
                $cart->save();
                
                //Criar sessão usuário externo e adicionar um comanda 
                session()->put('sessionUser.cart.id', $cart->id);
            }
        } else {
            session()->forget('sessionUser');
        }
    }

    //Chamar tela principal
    public function index($lunchs = null) {

        $this->verifySession();

        $address = Endereco::where('id', session('sessionUser.cart.endereco.id'))->first();

        $lunchs = LunchController::getAllLunch();
    
        $total = AdmController::sumValue();

        return view('index', [
            'lunchs' => $lunchs,
            'address' => $address,
            'total' => $total
        ]);
    }

    //Chamar tela carteira
    public function wallet() {
        $this->verifySession();
        
        return view('carteira');
    }
    //chamar tela cardapio
    public function menu() {

        $this->verifySession();

        $category = $this->getCategories();

        $lunchs = LunchController::getAllLunch();

        return view('cardapio', [
            'lunchs' => $lunchs,
            'categories' => $category
        ]);
    }

    //Função para adicionar um lanche ao comanda
    public function addLancheToCart($idlanche) {

        $lanche = Lanche::where('id', $idlanche)->first();

        $carrinho = new Carrinho();

        $carrinho->idlanche = $lanche->id;

        $carrinho->idcomanda = session('sessionUser.cart.id');

        $carrinho->save();

        return redirect()->route('adm.index');
        
    }

    //Função para adicionar um lanche ao comanda
    public function removeLancheToCart(Lanche $lanche) {
        
        ////////////////////////////////////////

    }

    //chamar tela sobre
    public function about() {
        return view('sobre');
    }
    //chamar tela contato
    public function contact() {
        return view('contato');
    }

    public function cart() {


        $pedidos = Carrinho::query('carrinhos')
                                ->join('comandas', 'comandas.id', '=', 'carrinhos.idcomanda')
                                ->join('lanches', 'lanches.id', '=', 'carrinhos.idlanche')
                                ->where('comandas.id', '=', session('sessionUser.cart.id'))
                                ->select('lanches.*', 'comandas.id')
                                ->get();

        
        $address = Endereco::where('id', session('sessionUser.cart.endereco.id'))->first();
        
        $valor = $this->sumValue();

        return view('comanda', [
            'pedidos' => $pedidos,
            'address' => $address,
            'valor' => $valor
        ]);
    }

    public function location() {

        $this->verifySession();
        return view('localizacao');

    }

    public function setting() {

        //Verificar se quem está tentando acessar as configurações é o Administrador.
        if(session('sessionFunc.nome') != "Administrador") {
            return redirect()->route('adm.cardapio');
        }

        $funcionarios = Funcionario::all();

        $this->verifySession();
        return view('configuracao', [
            'funcionarios' => $funcionarios
        ]);

    }

    public function employee() {

        $this->verifySession();
        return view('funcionario');
    }

    public function addEmployee(Request $request) {
        
        $this->verifySession();
        
        $funcionario = New Funcionario();

        $funcionario->nome = $request->nome . " " . $request->sobrenome;
        $funcionario->email = $request->email;
        $funcionario->login = strtolower($request->nome . "." . $request->sobrenome);
        $funcionario->senha = Hash::make($request->senha);

        $funcionario->save();

        return redirect()->route('adm.configuracao');
    }

    public function removeEmployee(Funcionario $funcionario) {
        $this->verifySession();

        $funcionario->delete();

        return redirect()->route('adm.configuracao');

    }

    public function login() {

        $erro = session('erro');

        $data = [];

        if(!empty($erro)){
            $data = [
                'erro' => $erro
            ];
        }
        return view('login', $data);
    }

    public function loginPost(Request $request) {

        $adm = Funcionario::where('login', $request->login)->first();

        if(!$adm || !Hash::check($request->password, $adm->senha)) {
            session()->flash('erro', 'Usuário ou senha Incorreta!');
            return redirect()->route('adm.login');
        } else {
            session()->put('sessionFunc', $adm);
            
            return redirect()->route('adm.cardapio');
        }

    }

    public function logout() {
        session()->forget('sessionFunc');
        return redirect()->route('adm.index');
    }

    // Pegar todas categorias existentes no banco de dados
    public function getCategories() {
        $result = Categoria::all();

        return $result;
    }

    

}

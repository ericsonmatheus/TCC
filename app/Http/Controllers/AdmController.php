<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Categoria;
use App\Models\Comanda;
use App\Models\Endereco;
use App\Models\Funcionario;
use App\Models\Lanche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdmController extends Controller
{
    //Verifica se ja foi criado carrinho para o usuário externo.
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
            //Enão deverá criar um carrinho para este usuário 
            if(!$this->checkSessionUser()) {
                $cart = new Carrinho();
                
                $cart->save();
                
                //Criar sessão usuário externo e adicionar um carrinho 
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
    
        return view('index', [
            'lunchs' => $lunchs,
            'address' => $address
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

    //Função para adicionar um lanche ao carrinho
    public function addLancheToCart(Lanche $lanche) {
        $comanda = new Comanda();

        $comanda->idlanche = $lanche->id;
        $comanda->idcarrinho = session('sessionUser.cart.id');

        $comanda->save();

        return redirect()->route('adm.index');
        
    }

    //Função para adicionar um lanche ao carrinho
    public function removeLancheToCart(Lanche $lanche) {
        
        session()->forget('sessionUser.cart.lanche');

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
        

        return view('carrinho');
    }

    public function location() {

        $this->verifySession();
        return view('localizacao');

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

        $adm = Funcionario::where('login', $request->email)->first();


        if(!$adm || Hash::check($request->password, $adm->password)) {
            session()->flash('erro', 'Usuário ou senha Incorreta!');
            return redirect()->route('adm.login');
        } else {
            session()->put('sessionFunc', $adm);
            
            return redirect()->route('adm.index');
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

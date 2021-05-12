<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Categoria;
use App\Models\Funcionario;
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

    //Chamar tela principal
    public function index($lunchs = null) {

        //Sessão onde está o endereço
        $address = session('sessionUser.cart.endereco'); 

        //Encontrar o ultimo endereço adicionado
        $lastAddress = $address[count($address) - 1];

        if(!$this->checkSessionFunc()) {
            if(!$this->checkSessionUser()) {
                $cart = new Carrinho();
    
                $cart->save();
                
                //Criar sessão usuário externo e adicionar um carrinho 
                session()->put('sessionUser.cart.id', $cart->id);
            }
        } else {
            session()->forget('sessionUser');
        }
        
        $lunchs = LunchController::getAllLunch();
    
        return view('index', [
            'lunchs' => $lunchs,
            'address' => $lastAddress
        ]);
    }

    //Chamar tela carteira
    public function wallet() {
        if(!$this->checkSessionFunc()) {
            if(!$this->checkSessionUser()) {
                $cart = new Carrinho();
    
                $cart->save();
                
                //Criar sessão usuário externo e adicionar um carrinho 
                session()->put('sessionUser', $cart->id);
            }
        } else {
            session()->forgot('sessionUser');
        }
        
        return view('carteira');
    }
    //chamar tela cardapio
    public function menu() {
        if(!$this->checkSessionFunc()) {
            if(!$this->checkSessionUser()) {
                $cart = new Carrinho();
    
                $cart->save();
                
                //Criar sessão usuário externo e adicionar um carrinho 
                session()->put('sessionUser', $cart->id);
            }
        } else {
            session()->forget('sessionUser');
        }

        $category = $this->getCategories();
        $lunchs = LunchController::getAllLunch();

        return view('cardapio', [
            'lunchs' => $lunchs,
            'categories' => $category
        ]);
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
        if(!$this->checkSessionFunc()) {
            if(!$this->checkSessionUser()) {
                $cart = new Carrinho();
    
                $cart->save();
                
                //Criar sessão usuário externo e adicionar um carrinho 
                session()->put('sessionUser', $cart->id);
            }
        } else {
            session()->forgot('sessionUser');
        }
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

    //Adicionar endereco a sessão para quando foi concluido o pedido
    public function addAddress(Request $request) {
        
        $endereco = [
            'cep' => $request->cep,
            'rua' => $request->rua,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'bairo' => $request->bairro,
            'cidade' => $request->cidade
        ];
        
        session()->push('sessionUser.cart.endereco', $endereco);

        return redirect()->route('adm.index');
    }

    // Pegar todas categorias existentes no banco de dados
    public function getCategories() {
        $result = Categoria::all();

        return $result;
    }

}

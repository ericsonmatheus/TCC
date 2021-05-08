<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Categoria;
use App\Models\Funcionario;
use GuzzleHttp\Psr7\Request;
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

        if(!$this->checkSessionUser()) {
            $cart = new Carrinho();

            $cart->save();
            
            //Criar sessão usuário externo e adicionar um carrinho 
            session()->put('sessionUser', $cart);
        }

        $lunchs = LunchController::getAllLunch();

        return view('index', [
            'lunchs' => $lunchs
        ]);
    }

    //Chamar tela carteira
    public function wallet() {
        if(!$this->checkSessionUser()) {
            $cart = new Carrinho();

            $cart->save();

            session()->put('sessionUser', $cart);
        }
        
        return view('carteira');
    }
    //chamar tela cardapio
    public function menu() {
        if(!$this->checkSessionUser()) {
            $cart = new Carrinho();

            $cart->save();

            session()->put('sessionUser', $cart);
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
        if(!$this->checkSessionUser()) {
            $cart = new Carrinho();

            $cart->save();

            session()->put('sessionUser', $cart);
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
        return view('login');
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

    // Pegar todas categorias existentes no banco de dados
    public function getCategories() {
        $result = Categoria::all();

        return $result;
    }



}

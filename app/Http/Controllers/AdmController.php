<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Categoria;

class AdmController extends Controller
{

    private function checkSessionUser() {
        return session()->has('sessionUser');
    }

    public function index($lunchs = null) {

        if(!$this->checkSessionUser()) {
            $cart = new Carrinho();

            $cart->save();

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
        return view('login');
    }

    // Pegar todas categorias existentes no banco de dados
    public function getCategories() {
        $result = Categoria::all();

        return $result;
    }



}

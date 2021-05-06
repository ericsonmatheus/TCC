<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Categoria;

class AdmController extends Controller
{
    
    const SESSION_USER = 'sessionUser';
    const SESSION_FUNC = 'sessionFunc';

    //Iniciar sessão para usuário externo
    private function sessionUser(){
        $cart = new Carrinho();

        $cart->save();

        session()->put(AdmController::SESSION_USER, $cart);
    }


    public function index($lunchs = null) {

        $this->verifySessionUser();
        print_r(session()->all()); exit;
        $lunchs = LunchController::getAllLunch();

        return view('index', [
            'lunchs' => $lunchs
        ]);
    }
    //Chamar tela carteira
    public function wallet() {
        return view('carteira');
    }
    //chamar tela cardapio
    public function menu() {

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

    public function car() {
        return view('carrinho');
    }

    public function location() {

        return view('localizacao');

    }

    // Pegar todas categorias existentes no banco de dados
    public function getCategories() {
        $result = Categoria::all();

        return $result;
    }



}

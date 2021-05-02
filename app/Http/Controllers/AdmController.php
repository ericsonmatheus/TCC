<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Lanche;

class AdmController extends Controller
{
    public function index($lunchs = null) {

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

    // Pegar todas categorias existentes no banco de dados
    public function getCategories() {
        $result = Categoria::all();

        return $result;
    }

}

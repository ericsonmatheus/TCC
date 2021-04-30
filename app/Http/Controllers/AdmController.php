<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use App\Models\Categoria;
use App\Models\Lanche;
use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function index($lunchs = null) {
        return view('index', [
            'lunch' => $lunchs
        ]);
    }
    //Chamar tela carteira
    public function wallet() {
        return view('carteira');
    }
    //chamar tela cardapio
    public function menu() {

        $category = $this->getCategories();

        return view('cardapio', [
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


    // Pegar todas categorias existentes no banco de dados
    public function getCategories() {
        $result = Categoria::all();

        return $result;
    }

    //Função para listar apenas uma categoria de lanche especifico
    public function listByCategory(String $categoryLunch){
        $result = Lanche::where('categoria', '=', $categoryLunch);

        return $this->index($result);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function index() {
        return view('index');
    }
    //Chamar tela carteira
    public function wallet() {
        return view('carteira');
    }
    //chamar tela cardapio
    public function menu() {
        return view('cardapio');
    }
    //chamar tela sobre
    public function about() {
        return view('sobre');
    }
    //chamar tela contato
    public function contact() {
        return view('contato');
    }

    //Função para listar apenas uma categoria de lanche especifico
    public function listByCategory(String $categoryLunch){
        $result = Cardapio::where('categoria', '=', $categoryLunch);
    }
}

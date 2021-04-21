<?php

namespace App\Http\Controllers;

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
}

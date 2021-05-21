<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Lanche;
use Illuminate\Http\Request;

class LunchController extends Controller
{
    public function createLunch(Request $request) {
        for($i=0; $i<5;$i++) {
        $lanche = new Lanche();

        $category = Categoria::where('nome', $request->categoria)->first();

        $lanche->nomeLanche = $request->nome;
        $lanche->descricao = $request->descricao;
        $lanche->pathLanche = $request->file('imgComida')->store('lanches');
        $lanche->valor = $request->valor;
        $lanche->idcategoria = $category->id;

        $lanche->save();}
        return redirect(route('adm.cardapio'));
    }

    public static function getAllLunch() {
        $lanches = Lanche::query('lanches')
                                ->join('categorias', 'categorias.id', '=', 'lanches.idcategoria')
                                ->select('lanches.*', 'categorias.*')
                                ->get();

        return $lanches;
    }
}

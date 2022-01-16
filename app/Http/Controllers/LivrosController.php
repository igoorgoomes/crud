<?php

//Um controller nada mais é que um controlador para organizar toda nossa lógica do código
//Rotas-> Controller=> (Model) <= -> View

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function index(){
        //dd('Teste');
        $livros = Livro::all();
        //dd($livros);
        return view('home.index',['livros'=>$livros]);
    }

    public function create(){
        return view('home.create');
    }

    public function store(Request $request){
        Livro::create($request->all());
        return redirect()->route('home.index');
    }
}

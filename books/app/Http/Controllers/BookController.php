<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro; // Importa o modelo Livro corretamente

class BookController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'ano_publicacao' => 'required|integer',
            'genero' => 'required',
            'descricao' => 'required',
        ]);

        Livro::create($request->all());

        return redirect()->route('books.create')->with('success', 'Livro cadastrado com sucesso!');
    }
}

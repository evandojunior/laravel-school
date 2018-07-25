<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Disciplina;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
        $disciplinas = Disciplina::all();
        return view('alunos.list', compact('alunos', 'disciplinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validator = \Validator::make($request->all(), [
            "matricula" => "required|unique:alunos",
            "email"     => "required|email|unique:alunos",
            "nome"      => "required",
            "endereco"  => "required",
            "bairro"    => "required",
            "uf"        => "required",
            "cidade"    => "required",
            "cep"       => "required",
            "data_entrada" => "required|date",
        ]);

        if ($validator->fails()) {
            return redirect('alunos')
                ->withErrors($validator)
                ->withInput();
        }

        $aluno = Aluno::create($request->all());
        foreach($request->disciplinas as $disciplina){
            // $aluno->disciplinas()->attcah($disciplina);
        }
        return redirect('alunos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        return view('alunos.show', compact('aluno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        return view('alunos.edit', compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno $aluno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno)
    {
        //
    }
}

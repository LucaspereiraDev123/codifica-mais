<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //..recuperando todos os alunos do banco de dados
        $alunos = Aluno::all();

        //..retorna a view index passando a variável $alunos
        return view('alunos.index')->with('alunos', $alunos);
    }

    /**
     * Show the form for creating a new resource.
     */
    //O método create() retorna a página que contém a view de cadastro de aluno.
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    //O método store recebe como parâmetro de entrada um objeto Request contendo os dados da requisição e os persiste na base de dados.
    //Quando a requisição vem de um formulário precisamos acessá-los usando o método input.
    public function store(Request $request)
    {

        $request->validate([
            'nome' => ['required', 'min:3']
        ]);

        // Aluno::create([]);
        #dd($request->all());
        $alunos = new Aluno();

        $alunos->nome = $request->input('nome');
        $alunos->idade = $request->input('idade');
        $alunos->peso = $request->input('peso');
        $alunos->altura = $request->input('altura');
        $alunos->tamanho_camisa = $request->input('tamanho_camisa');

        $alunos->save();

        $alunos = Aluno::all();
        return view('alunos.index')->with('alunos', $alunos)
            ->with('msg', 'Aluno cadastrado com sucesso!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //..recupera o aluno da base de dados
        $alunos = Aluno::find($id);

        //..se encontrar o aluno, retorna a view com o objeto correspondente
        if($alunos) {
            return view('alunos.show')->with('alunos', $alunos);
        } else {
            //..senão, retorna a view com uma mensagem que será exibida.
            return view('alunos.show')->with('msg', 'Aluno não encontrado');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //..recupera o aluno da base de dados
        $alunos = Aluno::find($id);

        //..se encontrar o aluno, retorna a view de ediçã com com o objeto correspondente
        if ($alunos) {
            return view('alunos.edit')->with('alunos', $alunos);
        } else {
            $alunos = Aluno::all();
            return view('alunos.index')->with('alunos', $alunos)
            ->with('msg', 'Aluno não encontrado!'); 
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alunos = Aluno::find($id);
        $alunos->nome = $request->input('nome');
        $alunos->idade = $request->input('idade');
        $alunos->peso = $request->input('peso');
        $alunos->altura = $request->input('altura');
        $alunos->tamanho_camisa = $request->input('tamanho_camisa');

        $alunos->save();

        $alunos = Aluno::all();
        return view('alunos.index')->with('alunos', $alunos)
            ->with('msg', 'Aluno atualizado com sucesso!');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alunos = Aluno::find($id);

        $alunos->delete();

       $alunos = Aluno::all();
       return view('alunos.index')->with('alunos', $alunos)
            ->with('msg', "Aluno excluído com sucesso!");
    }
}

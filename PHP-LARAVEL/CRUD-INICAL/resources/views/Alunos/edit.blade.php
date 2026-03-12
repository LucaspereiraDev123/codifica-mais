
{{-- herda a view 'base' --}}
@extends('base')

{{-- cria a seção content, definida na base, para injetar o código --}}
@section('content')

    <h2>Atualizar um Aluno</h2>

    {{-- o atributo action aponta para a rota que esta direcionda ao método store do controlador --}}
    <form class="form" id="update-form" method="POST" action="{{ route('alunos.update', $alunos->id) }}">

        {{-- CSRF é um token de segurança para validar o formulário --}}
        @csrf

        {{-- o metodo de atualização é o PUT --}}
        @method('PUT')
        
        <label for="name">Nome:</label>
        <input type="text" name="nome" id="name" required value="{{ $alunos->nome }}">

        <label for="age">Idade:</label>
        <input type="number" name="idade" id="age" required value="{{ $alunos->idade }}">

        <label for="weight">Peso:</label>
        <input type="text" name="peso" id="weight" required value="{{ $alunos->peso }}">

        <label for="heigth">Altura:</label>
        <input type="number" name="altura" id="height" value="{{ $alunos->altura }}">

        <label for="size">Tamanho da Camisa:</label>
        <input type="text" name="tamanho_camisa" id="size" value="{{ $alunos->tamanho_camisa }}">
    </form>
    {{-- note que os botões estão fora dos forms. O atributo form indica qual form o botão pertence --}}
    <button form="update-form" type="submit">Salvar</button>
    <button form="delete-form" type="submit" >Excluir</button>

    {{-- form para exclusão --}}
    <form method="POST" class="form" id="delete-form" action="{{ route('alunos.destroy', $alunos->id) }}">
        @csrf
        {{-- o método HTTP para exclusão deve ser o DELETE --}}
        @method('DELETE')
    </form>
@endsection
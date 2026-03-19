{{-- herda a view 'base' --}}
@extends('base')

{{-- cria a seção content, definida na base, para injetar o código --}}
@section('content')

    <h2>Cadastrar Novo Aluno </h2>

    {{-- o atributo action aponta para a rota que esta direcionada ao metodo store do controlador --}}
    <form class=""form method="post" action="{{ route('alunos.store') }}">
        {{-- CSRF é um token de segurança para validar o formulario --}}
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="nome" id="name" required>

        <label for="age">Idade:</label>
        <input type="number" name="idade" id="age" required>

        <label for="weight">Peso:</label>
        <input type="text" name="peso" id="weight" required>

        <label for="heigth">Altura:</label>
        <input type="number" name="altura" id="weight">

        <label for="size">Tamanho da Camisa:</label>
        <input type="text" name="tamanho_camisa" id="size">

        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">

    </form>
@endsection
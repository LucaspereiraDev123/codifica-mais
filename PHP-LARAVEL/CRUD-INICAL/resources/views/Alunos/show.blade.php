{{-- herda a view base --}}
@extends('base')
{{-- define o conteudo --}}
@section('content')
    {{-- caso exista a variavel msg, exibe uma mensagem --}}
    @if (isset($msg))
        <h3 style="color: red">Aluno não encontrado</h3>
    
    @else
    {{-- senão, mostra os dados --}}
        <h2>Mostrando os dados do alunos</h2>
        <p><strong>Id:</strong> {{ $alunos->id }} </p>
        <p><strong>Nome:</strong> {{ $alunos->nome }} </p>
        <p><strong>Idade:</strong> {{ $alunos->idade }} </p>
        <p><strong>Peso:</strong> {{ $alunos->peso }} </p>
        <p><strong>Altura:</strong> {{ $alunos->altura }} </p>
        <p><strong>Tamanho da Camisa:</strong> {{ $alunos->tamanho_camisa }} </p>
        <a href="{{ route('alunos.index') }}">Voltar</a>
    @endif
@endsection
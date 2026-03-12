{{-- herda a view 'base' --}}
@extends('base')
{{-- cria a sessão content, definidada na base, para injetar o código --}}
@section('content')
    <h2>Alunos Cadastrados<h2>
    {{-- se a varivavel $alunos não existir, motra um h3 com mensagem --}}
    @if (!asset($alunos))
    
        <h3 style="color: red">Nenhum registro encontrado!</h3>
    
    @else
        <table class="data-table">
            <thread>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>IDADE</th>
                    <th>PESO</th>
                    <th>ALTURA</th>
                    <th>TAMANHO CAMISA</th>
                </tr>
            <thread>
            
            <tbody>
                {{-- intera sobre a colação de veículos --}}
                @foreach ($alunos as $a)
                    <tr>
                        <td>{{ $a->id }}</td>
                        <td>{{ $a->nome }}</td>
                        <td>{{ $a->idade }}</td>
                        <td>{{ $a->peso }}</td>
                        <td>{{ $a->altura }}</td>
                        <td>{{ $a->tamanho_camisa }}</td>

                        {{-- vai para a rota show, passando o id como parâmetro --}}
                        <td> <a href="{{ route('alunos.show', $a->id) }}">Exibir</a> </td>
                        <td> <a href="{{ route('alunos.edit', $a->id) }}">Editar</a> </td>
                    </tr>
                    @endforeach
            </tbody>

            <tfoot>
                <tr>
                    {{-- mostra a qtd de alunos cadastrados. --}}
                    <td colspan="5">Alunos Cadastrados: {{ $alunos->count() }} <td>
                </tr>
            </tfoot>
        </table>
    @endif
    @if(isset($msg))
        <script>
            alert("{{ $msg }}");
        </script>
    @endif
@endsection
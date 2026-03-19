<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Pegando as variaveis de ambiente --}}
    <title>{{ env('APP_NAME') }}</title>
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Laravel - CRUD INICIAL</h1>
        </header>

        <nav>
            <ul>
                {{-- Link para o cadastro --}}
                <li><a href="/alunos">Início</a><li>
                <li><a href="/alunos/create">Cadastro de Alunos</a></li>
            </ul>
        </nav>

        <div class="content">
            {{-- o conteúdo da view será injetado aqui! --}}
            @yield('content')
        </div>

        <footer>
            <div>
                <p>Alguma coisa</p>
            </div>
            <div>
                <p>Alguma coisa</p>
            </div>
        </footer>
    </div>
</body>
</html>
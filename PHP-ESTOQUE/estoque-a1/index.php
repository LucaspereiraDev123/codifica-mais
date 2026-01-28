<?php

$path = $_SERVER['PATH_INFO'] ?? '/';

switch($path) {
    case '/':
        require 'pagina-inicial.php';
        break;
    
    case '/pagina-inicial':
        require 'pagina-inicial';
        break;

    case '/editar.php':
        require 'editar.php';
        break;
    
    case '/cadastro.php':
        require '/cadastro.php';
        break;
    
    case '/listagem.php':
        require '/listagem.php';
        break;
        
    default:
        http_response_code(404);
        break;
}
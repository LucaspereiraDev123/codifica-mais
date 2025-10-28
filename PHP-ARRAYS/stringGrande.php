<?php

function geraEmail (string $nome):void
{
    $conteudoEmail = <<<FIM

    Olá, $nome!

    Estamos entrando em contato para 
    {motivo do contato}

    {assinatura}

    FIM;
}
//<<<FIM / FIM é usado para delimitar um testo de uma string
//heredoc e nowdoc são nomes que indicam aspas simples e aspas duplas

function geraEmailDois (string $nome):void
{
    $conteudoEmail = <<<FIM
    
    Olá, $nome!

    Estamos entrando em contato para 
    {motivo do contato}

    {assinatura}

    FIM;
}
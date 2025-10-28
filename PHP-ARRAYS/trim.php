<?php

$email = '   lucas.rocha9@outlook.com'; 

echo trim($email);
//a função trim remove os espaços desnecessarios na string por padrão

echo trim($email, ',');
//nessa função estou dizendo que quero remover todos as virgulas das extremidades

echo ltrim($mail, ',');
//apara a string do lado esquerdo

echo rtrim($mail, ',');
//apara a string do lado direito
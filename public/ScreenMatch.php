<?php

$filme = [ 
    'nome' => $_POST['nome'],
    'anoLancamento' => $_POST['anoLancamento'],
    'notaFilme' => $_POST['notaFilme'],
    'IncluidonoPlano' => $_POST['IncluidonoPlano'],
    'genero' => $_POST['genero']
];

file_put_contents('filme.json', json_encode($filme));
header('Location: /sucesso?phpfilme ');
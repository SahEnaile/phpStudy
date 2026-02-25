<?php
require __DIR__ . "/primeiro-programa.php";// é como o import do C# e do java, o __DIR__ é para pegar o caminho do arquivo atual e concatenar com o nome do arquivo que deseja importar, nesse caso o primeiro programa, e o require é para importar o arquivo, tem também o include que tem a mesma função mas ele não para a execução do programa caso o arquivo não seja encontrado, já o require sim para a execução do programa caso o arquivo não seja encontrado
//Include também pode ser usado para importar um arquivo porem se ele não for encontrado ele vai dar um warning mas o programa continua rodando, já o require se o arquivo não for encontrado ele vai dar um fatal error e o programa para de rodar

function CriarFilme ($nome, $anoLançamento, $notaFilme, $IncluidonoPlano, $genero) {
    return [
        "nome" => $nome,
        "anoLançamento" => $anoLançamento,
        "notaFilme" => $notaFilme,
        "IncluidonoPlano" => $IncluidonoPlano,
        "genero" => $genero
    ];
}

$filme = CriarFilme("Thor", 2022, 7.5, true, genero: "Comedia"); // usamos os paramettros com nome pq ele se comporta como um map, onde não 
//importa a ordem de parametros, e o genero é o unico parametro nomeado, os outros são posicionais, ou seja, a ordem não importa
var_dump($filme);
<?php

echo " Hello word !";

$NomeFilme = "Top Gun, Maverick\n"; 
$NomeFilme = "Thor\n"; // <br> da quebra de linha, precisa ser dentro da string mas somente se ele for hospedado, senão seria o \n normal
$NomeFilme = "Se beber não case\n"; // <br> da quebra de linha, precisa ser dentro da string mas somente se ele for hospedado, senão seria o \n normal
// <br> da quebra de linha, precisa ser dentro da string mas somente se ele for hospedado, senão seria o \n normal
// \t é tabulaçao
$anoLançamento = $argv[1] ?? 2022;// argvs guarda valores do usuario, ?? verifca se o valor existe, senão existe printa 2022
$notaFilme =  375/5;
$IncluidonoPlano = true;

echo $notaFilme;

echo "Nome do Filme" .$NomeFilme. "\n Ano Lançamento" .$anoLançamento; // Interpolação usa-se sempre aspas duplas

if ($anoLançamento >= 2022) {
    echo "esse filme é um lançamento";
} elseif($anoLançamento > 2020 && $anoLançamento <= 2022) {
    echo "esse filme ainda é novo";
} else{
    echo "Esse filme não é um lançamento";
} // echo printa no terminal

//match espression
$genero = match($NomeFilme) {
    "Top Gun, Maverick" => "ação",
    "Thor"=> " Animação",
    "Se beber não case"=> "Comedia"
};

echo "Genero do filme é " .$genero;

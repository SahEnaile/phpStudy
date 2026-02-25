<?php
//leitura de dados do usuario

echo"Digite um numero \n";
$numero = (float) fgets(STDIN);
echo "O numero é .$numero. \n";

$saldo = 0;
$titular = "Sarah";

echo"********************\n";
echo "Titular: $titular";
echo "Saldo: $saldo";
echo"********************\n";

do { "1. Consultar Saldo Atual\n";
echo"2. Sacar Valor\n";
echo"3. Depositar Valor\n";
echo"4. Sair\n";


$opcao = (int) fgets(STDIN);

switch ($opcao) {
    case 1:
        echo"********************\n";
        echo "Titular: $titular";
        echo "Saldo: $saldo";
        echo"********************\n";
        break;
     case 2: echo"Qual valor você deseja sacar? ";
         $valorSacar = (float) fgets(STDIN);
        if ($valorSacar < $saldo) {
        echo"Saldo insuficiente1";
     } else { $saldo -= $valorSacar;
        }
        break;
    case 3: echo "Quanto deseja depositar?";
        $valorADepositar = (float) fgets(STDIN);
        $saldo += $valorADepositar;
        break;
    case 4: echo "bye bye 1 :)";
        break;
     }   
 } while ($opcao !=4);


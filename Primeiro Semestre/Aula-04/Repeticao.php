<?php

$numero = 4;

//Teste com 'While'//
while($numero < 10){
    echo $numero;
    echo "<br>";
    $numero++;
}
echo "---------";

$numero = 4;

//Teste com 'Do...While'
//O do executa o código pelo menos uma vez antes de checar a condição
do {
    echo "<br>";
    echo $numero;
    $numero-=1;
} while($numero > 1);

echo "<br>";
echo "-----------";
echo "<br>";

for ($x =0; $x <=10; $x++){
    echo "O número é :$x <br>";
}



?>
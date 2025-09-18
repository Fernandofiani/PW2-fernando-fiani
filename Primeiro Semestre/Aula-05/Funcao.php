<?php
function myMessage()
{
    echo "Hello World! <br>";
}

myMessage();
myMessage();

function Soma($n1 , $n2)
{
    echo $n1 + $n2."<br>";
}

Soma(3, 4);
Soma(10, 3);

function familyName($fname,$year)
{
    echo "$fname Pereira, nasceu em $year";
}

familyName("Roberto","1971");
?>
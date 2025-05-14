<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $Base_Maior = floatval($POST['Base_Maior']);
        $Base_Menor = floatval($POST['Base_Menor']);
        $Altura = floatval($POST['Altura']);

        if($Base_Maior == 0||$Base_Menor == 0 || $Altura ==0){
            echo "<p style='color: red;'>Erro: a quantidade de combustível deve ser maior que zero.</p>";
        }else{
            $Area_Trapezio = ($Base_Maior+Base_Menor)*$Altura/2;
            echo "<h3>Resultado</h3>";
            echo "<p>A area do trapezio é de".number_format($Area_Trapezio,2);
        }


    }






?>
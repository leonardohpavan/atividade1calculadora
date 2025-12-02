<?php 

if(isset($_POST["valor1"]) && isset($_POST["valor2"])){
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
} else {
    unset($valor1);
    unset($valor2);
}

if(isset($valor1) && isset($valor2)){
        echo "<p> A soma de $valor1 + $valor2 é igual a " .  ($valor1 + $valor2) . "</p>"; 
    }

?>
<?php

    if($_POST){
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        
        $media = ($nota1 + $nota2) / 2;

        if($media == 10){
            $resultado = "Aprovado com distinção! :D";
        }elseif($media >= 7){
            $resultado = "Aprovado! :)";
        }else{
            $resultado = "Reprovado. ;(";
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
</head>
<body>
    <form method="POST">
        <label for="nota1">Primeira nota</label> <br>
        <input type="number" name="nota1" id="nota1" required> <br><br>

        <label for="nota2">Segunda nota</label> <br>
        <input type="number" name="nota2" id="nota2" required> <br><br>

        <input type="submit" value="Enviar">

        <?php
        if($_POST){
            echo $resultado;
        }
        ?>
    </form>
</body>
</html>
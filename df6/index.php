<?php

    if($_POST){
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];

        $resultado = array($numero1, $numero2, $numero3);
        $max = "O maior número é: " . max($resultado);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
</head>
<body>
    <form method="POST">
        <label for="numero1">Primeiro número</label> <br>
        <input type="number" name="numero1" id="numero1"> <br><br>

        <label for="numero2">Segundo número</label> <br>
        <input type="number" name="numero2" id="numero2"> <br><br>

        <label for="numero3">Terceiro número</label> <br>
        <input type="number" name="numero3" id="numero3"> <br><br>

        <input type="submit" value="Enviar"> <br><br>

        <?php
            if($_POST){
                echo $max;
            }
        ?>
    </form>
</body>
</html>
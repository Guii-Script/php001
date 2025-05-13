<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 01</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Aula 001 de PHP</h1>
    <hr>
    <?php
    echo "<h2>Variável</h2>";
    $nome = "Guilherme";
    $idade = 21;
    $fumante = false;
    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade   . "<br>";
    echo "Fumante: ";

    //ESTRUTURA DE DECISÃO IF
    if ($fumante == true) {
        echo "Sim";
    }
    else if ($fumante == false) {
        echo "Não"; 
    }
    ?>
</body>
</html>
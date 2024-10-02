<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <h1>Resultado do Processamento</h1>

    </header>
    <main>
        <?php
        $numero = $_REQUEST["numero"] ?? "sem valor";
        $sucessor = intval($numero) + 1;
        $antecessor = intval($numero) - 1;
        echo "<p>O número escolhido foi <strong>$numero</strong> <br> 
        O Antecessor é: $antecessor <br>
        Seu Sucessor é: $sucessor </p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>


</body>

</html>
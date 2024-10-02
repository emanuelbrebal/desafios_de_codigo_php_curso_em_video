<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado da conversão</h1>
    </header>

    <section>
        <p>
            <?php 
                $dinheiro = $_REQUEST["dinheiro"];
                $cota = 5.4;
                $conversao = $dinheiro/$cota;
                $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
                echo "Seus " . numfmt_format_currency($padrao, $dinheiro, "BRL") . " equivalem a ". numfmt_format_currency($padrao, $conversao, "USD");
            ?>
        </p>
    </section>
</body>
</html>
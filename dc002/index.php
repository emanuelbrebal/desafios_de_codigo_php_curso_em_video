<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="../dc001/style.css">
</head>

<body>
    <header>
        <h1>Let's go gambling!!</h1>
    </header>
    <section>

        <?php
        $min = 0;
        $max = 200;

        $num = mt_rand($min, $max);
        echo "Gerando um número aleatório entre $min e $max...<br>";
        echo "O número gerado foi <strong> $num </strong>";

        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>

    </section>

</body>

</html>
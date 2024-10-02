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
                //Código de consumo da API
                $inicio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");
            
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
                $dados = json_decode(file_get_contents($url), true);
                
                $cota = $dados["value"][0]["cotacaoCompra"];

                //Código para ler o input do formulário html
                $dinheiro = $_REQUEST["dinheiro"];
                
                //calcula a conversão
                $conversao = $dinheiro/$cota;

                //cria o padrão de formatação
                $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
                
                //imprime na tela o valor convertido e formatado
                echo "Seus " . numfmt_format_currency($padrao, $dinheiro, "BRL") . " equivalem a <strong>". numfmt_format_currency($padrao, $conversao, "USD</strong>");
            ?>
        </p>
    </section>
</body>
</html>
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
        <h1>Cotação EUR/USD</h1>
    </header>

    <main>
        <?php 
            $cotacao = 1.09;

            $euro = $_REQUEST["din"] ?? 0;

            $dolar = $euro/$cotacao;
            
            //echo " Baseado na cotação atual = $cotacao <br>O euro = "  . number_format($euro, 2, ",",".") . " € <br>É quivalente a = ". number_format($dolar, 2, ",",".") . " U\$";

            //extension=intl abilitada
            $padrao = numfmt_create("pt_PT", NumberFormatter::CURRENCY);

            echo " Baseado na cotação atual = $cotacao <br>O valor que você tem na carteira = "  .numfmt_format_currency($padrao, $euro, "EUR") ."<br> Equivalem = " . numfmt_format_currency($padrao, $dolar, "USD");
        
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
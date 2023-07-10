<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $preProduto = $_GET['preProduto']??0;
    $porcentagem = $_GET['porcentagem']??0;

    ?>
    <main>
        <h2>Reajustador de preço</h2>
        
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get" id="porPreco">
            <label for="preProduto">Preço do preço (€)</label>
            <input type="number" name="preProduto" id="preProduto" value="<?=$preProduto?>">

            <label for="">Qual será a porcentagem do ajuste?(<span id="porAtual"><?=$porcentagem?></span>%)</label>
            <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" value="<?=$porcentagem?>" onchange="document.getElementById('porPreco').submit()" onmousemove="document.getElementById('porAtual').innerHTML=this.value">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>

        <?php 
        //print_r( (1+($porcentagem/100)));
        $res = (1+($porcentagem/100))*$preProduto;

        echo " O produto que custava ". number_format($preProduto, 2,","," ") .", com <strong> $porcentagem % de aumento</strong> vai passar a custar <strong>" . number_format($res, 2, ","," "). "€</strong a partir de agora.";
        ?>
    </section>
</body>
</html>
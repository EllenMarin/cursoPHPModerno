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
    
    $ano = $_GET['ano']??0;
    $anoAtual = date('Y');
    $qualAno = $_GET['qualAno']??0;
    ?>
<main>
    <h2>Calcular a sua idade</h2>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="ano">Em que ano você nasceu?</label>
        <input type="number" name="ano" id="ano" value="<?=$ano?>">

        <label for="qualAno">Quer saber sua idade em que ano?(atualmente estamos em <strong><?=$anoAtual?></strong>)</label>
        <input type="number" name="qualAno" id="qualAno" value="<?=$qualAno?>">

        <input type="submit" value="Quero saber minha idade">
    </form>
</main>

<section>
    <h2>Resultado</h2>
    <?php 
    $resIdade = abs($ano-$qualAno);

    echo "Quem nasceu em $ano vai ter <strong>$resIdade anos</strong> em $qualAno";
    ?>
</section>
</body>
</html>
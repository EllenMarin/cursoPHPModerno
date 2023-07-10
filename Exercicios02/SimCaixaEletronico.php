<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.notas{
            height: 70px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
    $saque = $_GET['saque']??0;
    $resto = $saque;

    //saque 100
    $nota100 = floor($resto/100);
    $resto%=100;

    //saque50
    $nota50 = floor($resto/50);
    $resto%=50;

    //saque 10
    $nota10 = floor($resto/10);
    $resto%=10;

    //saque 5
    $nota5 = floor($resto/5);
    $resto%=5;


    ?>
    <main>
        <h2>Simulador de Caixa eletronico</h2>
        
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get" >
            <label for="saque">Digite quantos euros você tem:</label>
            <input type="number" name="saque" id="saque" step="5" value="<?=$saque?>" require>

           <p style="font-size: 12px; color: grey;">*Notas disponiveis: 100€, 50€, 10€, 5€</p>

            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>Saque de <?=number_format($saque, 2, ","," ")?>€ realizado</h2>
        <p>O caixa eletrónico vai te entregar as seguites notas:</p>
        
        <ul>
        <li><img src="img/100-reais.jpg" alt="" class="notas"> <?=$nota100?></li>
        <li><img src="img/50-reais.jpg" alt="" class="notas"> <?=$nota50?></li>
        <li><img src="img/10-reais.jpg" alt="" class="notas"> <?=$nota10?></li>
        <li><img src="img/5-reais.jpg" alt="" class="notas"> <?=$nota5?></li>
        </ul>
        
    </section>
</body>
</html>
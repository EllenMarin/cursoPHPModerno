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
            $valor1 = $_GET['v1'];
            $valor2 = $_GET['v2'];
            
            $peso1 = $_GET['p1'];
            $peso2 = $_GET['p2'];
            
        ?>
    <main>
        <h2>Média Aritmétricas</h2>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1:</label>
            <input type="number" name="v1" id="" value="<?=$valor1?>">
            <label for="p1">Peso 1:</label>
            <input type="number" name="p1" id="" value="<?=$peso1?>">

            <label for="v2">Valor 2:</label>
            <input type="number" name="v2" id="" value="<?=$valor2?>">
            <label for="p2">Peso 2:</label>
            <input type="number" name="p2" id="" value="<?=$peso2?>">

            
            <input type="submit" value="Calcular médias">
        </form>
        
    </main>

    <section>
        <h2>Calcular médias</h2>

        <?php 
            $mediaAri = ($valor1 + $valor2) / 2;
            //$mediaPom = ;

            echo "Analisando os valores $valor1 e $valor2: 
            <ul><li> A média aritmética é igual <strong>" . number_format($mediaAri, 2, ","," ") . "</strong></li>
            <li> A média aritmética ponderada é <strong>" . number_format($mediaPom, 2, ",", " ") . "</strong></li></ul>";

        
        ?>

    </section>
    
</body>
</html>
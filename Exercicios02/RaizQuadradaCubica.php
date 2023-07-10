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
            $numero = $_GET['num'];
            
        ?>
    <main>
        <h2>Informe um número</h2>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="" value="<?=$numero?>">

            <input type="submit" value="Calcular raizes">
        </form>
        
    </main>

    <section>
        <h2>Resultado final</h2>

        <?php 
            $raizQuad = sqrt($numero);
            $raizCub = pow($numero, 1/3);

            echo "Analisando o <strong> número $numero</strong>, temos:
            <ul><li> A raiz quadrada é <strong>" . number_format($raizQuad, 2, ","," ") . "</strong></li>
            <li> A raiz cubica é <strong>" . number_format($raizCub, 2, ",", " ") . "</strong></li></ul>";

        
        ?>

    </section>
    
</body>
</html>
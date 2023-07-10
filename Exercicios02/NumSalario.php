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
            $salario = $_GET['salario'];
            $salMinimo = 740;

            $ano = date('Y');
            
        ?>
    <main>
        <h2>Informe seu salário</h2>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Salário</label>
            <input type="number" name="salario" id="" value="<?=$salario?>">

            <?php
            echo "<p>Considerando que o salário minimo de $ano é  <strong>$salMinimo</strong></p>";
            ?>

            <input type="submit" value="Calcular">
        </form>
        
    </main>

    <section>
        <h2>Resultado final</h2>

        <?php 
            $resSalMin = intdiv($salario,$salMinimo);
            $sobraResultado = $salario % $salMinimo;

            echo " Quem recebe um salário de $salario ganha <strong> $resSalMin salarios minimos</strong> + $sobraResultado ";
        ?>

    </section>
    
</body>
</html>
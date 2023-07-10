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
            $dividendo = $_GET['dividendo']??0;
            $divisor = $_GET['divisor']??0;
            
        ?>
    <main>
        <h2>Anatomia de uma divisão</h2>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="" value="<?=$divisor?>">
            <input type="submit" value="Resultado">
        </form>
    </main>

    <section>
        <h2>Estrutura da divisão</h2>

        <?php 
            $resultado = $dividendo / $divisor;

            echo " O resultado da divisão entre $dividendo e $divisor é <strong> $resultado </strong>";
        ?>

    </section>
    
</body>
</html>
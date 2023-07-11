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
    $num = $_GET['num']??0;
    ?>
    
    <main>
        <h1>Descubra se o número é primo ou não</h1>
        
    
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get" >
            <label for="num">Digite um numero:</label>
            <input type="number" name="num" id="num" required value="<?=$num?>">

            <input type="submit" value="Submeter">
        </form>
    </main>
    <section>
        <?php 
        $multiplos = [];
        $totMultiplos = 0;

        echo "<h2>Analisando o número <strong>$num</strong></h2> <br>" ; 

        for($i = 1; $i <= $num; $i++){
            if($num % $i == 0){
                $multiplos[] = $i;
                $totMultiplos++;
            }
        } 

        echo "Valores multiplos: ";
        for($i = 0; $i < $totMultiplos; $i++){
            echo $multiplos[$i];
            if($i < $totMultiplos - 1){
                echo ', ';
            }
        }

        echo "<br>";

        echo "Total de multiplos: $totMultiplos<br>";

        $isPrime = ($totMultiplos == 2);
        echo "Resultado: $num <strong>" . ($isPrime ? "É primo" : "Não é primo") . "</strong>";
        
        ?>
    </section>
        
</body>
</html>
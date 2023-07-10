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
    $totSegundos = $_GET['totSegundos']??0;
    
    ?>
    <main>
        <h2>Calculadora de tempo</h2>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="totSegundos">Digite os segundos</label>
            <input type="number" name="totSegundos" id="totSegundos" value="<?=$totSegundos?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <?php 
        $semanas = intval($totSegundos/(60*60*24*7));
        $totSegundos = $totSegundos%(60*60*24*7);
        $dias = (int)($totSegundos/(60*60*24));
        $totSegundos = $totSegundos%(60*60*24);
        $horas = (int)($totSegundos/(60*60));
        $totSegundos = $totSegundos%(60*60);
        $minutos = (int)($totSegundos/60);
        $totSegundos = $totSegundos%(60);
        $segundos = (int)($totSegundos);
        
        echo "Analisando o valor que você digitou,<strong> $segundos segundos</strong> equivalem a um total de:
        <ul>
        <li> $semanas semanas;</li>
        <li> $dias dias;</li>
        <li> $horas horas;</li>
        <li> $minutos minutos;</li>
        <li> $segundos segundos;</li>"
        ?>
    </section>
</body>
</html>
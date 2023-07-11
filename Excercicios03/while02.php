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
    $ini = $_GET['ini']??0;
    $fin = $_GET['fin']??0;
    $inc = $_GET['inc']??0;
    ?>
    
    <main>
        <h1>Preencha os campos</h1>
        
    
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get" >
            <label for="ini">Inicio:</label>
            <input type="number" name="ini" id="ini" required value="<?=$ini?>">

            <label for="fin">Final:</label>
            <input type="number" name="fin" id="fin" required value="<?=$fin?>">

            <label for="inc">Incremento/decremento:</label>
            <select name="inc" id="inc" required value="<?=$inc?>">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

            </select><br>

            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <h2>O resultado é:</h2>
        <?php 
            $num = $ini;
            
            if($ini <= $fin){
                while($num <= $fin){
                    echo $num . " , ";
                    $num += $inc;
                    
                }
            }else {
                while($num >= $fin){
                    echo $num . " , ";
                    $num -= $inc;
                    
                }
            }

        ?>
    </section>

    
</body>
</html>
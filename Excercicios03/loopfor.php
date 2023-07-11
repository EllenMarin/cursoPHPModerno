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
    $tabu = $_GET['tabu']??0;
    ?>
    
    <main>
        <h1>Observe a tabuada</h1>
        
    
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get" >
            <label for="tabu">Selecione a tabuada desejada:</label>
            <select name="tabu" id="tabu" required value="<?=$tabu?>">
                <?php 
                for($i = 0; $i <= 10; $i++){
                    echo "<option>$i</option> <br>";
                }
                ?>

            </select><br>

            <input type="submit" value="Tabuada">
        </form>
    </main>
    <section>
        <?php 
        

        echo "A tabuada do <strong>$tabu</strong> é a seguinte:<br>" ; 

        for($y = 1; $y <= 10; $y++){
            $res = $tabu * $y;
            echo "$tabu x $y = $res<br>";
        } 
        
        ?>
    </section>
        
</body>
</html>
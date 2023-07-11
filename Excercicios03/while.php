<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <main>
        <h1>Faça login</h1>
        
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get" >
        <?php 
            $num = 1;

            while($num <= 5){
            echo " O valor $num : <input type='number' name='v$num' max='100' min='0' value='0'>";
            $num++ ;
            }
            
            $i = 1;

            while($i <= 5){
                $v = "num" . $i;
                $url = "v" . $i;
                $$v = $_GET[$url]??0;
                
                $i++ ;
            }
        ?>
            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <h2>Os números selecionados foram:</h2>
        <?php 
        echo "$num1 $num2 $num3 $num4 $num5";
        ?>
    </section>

    
</body>
</html>
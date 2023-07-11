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
    $numb = $_GET['numb']??0;
    $oper = $_GET['oper']??0;
    //$email = $_GET['email']??0;
    //$sen = $_GET['sen']??0;

?>
    <main>
        <h1>Operações</h1>
        
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get" >
            <label for="numb">Digite o numero:</label>
            <input type="number" name="numb" id="numb">
            

            <input type="radio" name="oper" id="dobro" value="1" checked>
            <label for="dobro">Dobro</label>

            
            <input type="radio" name="oper" id="cubo" value="2">
            <label for="cubo">Cubo</label>

            
            <input type="radio" name="oper" id="raizQuadrada" value="3">
            <label for="dobro">Raiz Quadrada</label>
            
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php 
        
        switch($oper){
            case 1:
                $oper = $numb * 2;
                break;
            case 2:
                $oper = $numb ^ 3;
                break;
            case 3:
                $oper = sqrt($numb);

        }

        echo " O resultado da operação anterior é <strong> " . number_format($oper, 2) . " </strong>";
        ?>
      </section>

      
      <main>
        <h2>Dia da semana</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="diaS">Introduza o dia da semana:</label>
        <input type="number" name="diaS" id="diaS" min="1" max="7" require>

        <input type="submit" value="Analisar">
    
        </form>
      </main>
      <section>
      <?php 
        $diaS = $_GET['diaS']??0;

        switch($diaS){
            case 2: 
            case 3: 
            case 4: 
            case 5: 
            case 6: 
            
            echo "Acorde hoje é $diaS está na hora de acordar!";
            break;

            case 7: 
            case 1: 
            echo "Descanse hoje é $diaS está na pode descansar!";
            break;

            default:
            echo "Dia inválido";

        }
      
      ?>
      </section>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
    </style>
</head>
<body>
    <?php 
    $ano = $_GET['ano']??0;
    $idade = abs($ano - date('Y'));
    ?>
    <main>
        <h2>Obrigatoriedade de votar</h2>
        
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get" >
            <label for="ano">Digite seu ano de nascimento:</label>
            <input type="text" name="ano" id="ano" value="<?=$ano?>" maxlength="4">

            <input type="submit" value="Submeter">
        </form>
    </main>

    <section>
        <?php 
        $tipo = ($idade>=18 && $idade<65)?"É OBRIGATÓRIO":"NÃO É OBRIGATÓRIO";

        if($idade>=16 && $idade<18){
            $v = "volo voluntário";
            $d = "não pode tirar a carta";
        }
        else if($idade>=18 && $idade<65){
            $v = "pode votar";
            $d = "pode tirar a carta";
        }
        else {
            $v = "não pode votar";
            $d = "não pode tirar a carta";
        }

        echo "Quem nasceu em $ano tem $idade anos, porisso <strong>$tipo</strong> votar<br>
        Voce tendo $idade anos <strong>$v</strong> e tambem <strong>$d</strong>"

        ?>
        
        

        
    </section>
</body>
</html>
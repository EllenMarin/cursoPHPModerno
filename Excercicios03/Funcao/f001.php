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
        <h2>Functions</h2>
        <?php 
        //passagem de parametro por valor ($x)
        //passagem de parametro por referencia (&$x)
        function teste(&$x){
            $x += 2;
            echo "<p>O valor de X é $x</p>";
        }
        $a = 3;
        teste($a);
        echo "<p>O valor de A é $a</p>";
        
        ?>
    </main>

    <section>
        <h2>Novas funções</h2>
        <p>*Funções vindas de arquivos externo</p>
        <br><br>

        <?php 
            
            include "funcao.php";

            echo "<h3>Função externa ola()</h3>";
            ola();

            echo "<h3>Função externa mostrarValor(4)</h3>";
            mostrarValor(4);

        ?>
    </section>
    
</body>
</html>
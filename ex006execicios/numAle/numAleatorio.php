
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de numero aleatório</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


<header>
    <h1>Gerador de numero aleatório</h1>
</header>
<main>
    
        <?php
        $min = 0;
        $max = 100;

        $num = mt_rand($min, $max);
        //mt_rand() Mersenne Twister
        //random_int() - gera numeros aleatorios criptografados

        echo "Gerando um número aleatório entre $min e  $max...";
        echo "<br>O número gerado foi <strong>$num</strong>";


        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504;</button>
    
</main>
</body>
</html>
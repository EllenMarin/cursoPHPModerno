<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado final</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado final</h1>
    </header>

    <main>
        <?php
        $resF = $_GET["number"];
        $ant = $resF - 1;
        $suc = $resF + 1;

        echo "O número escolhido foi <strong> $resF</strong>";
        echo "<br>O seu antecessor é $ant";
        echo "<br>O seu sucessor é $suc";
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>


</body>

</html>
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
    $nome = $_GET['nome']??"Digite seu nome";
    $email = $_GET['email']??"Digite seu email";
    $sen = $_GET['sen']??"Digite sua senha";

?>
    <main>
        <h1>Faça login</h1>
        
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get" >
            <label for="nome">Digite seu nome:</label>
            <input type="text" name="nome" id="nome" value="<?=$nome?>" require>

            <label for="email">Digite o seu email:</label>
            <input type="email" name="email" id="email" value="<?=$email?>" require>

            <label for="">Digite o sua melhor senha:</label>
            <input type="password" name="sen" id="sen" value="<?=$sen?>" require>


            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <?php 
        

        echo "Seja Bem vindo(a) <strong> $nome </strong>você irá ser  direcionado para seu perfil de utilizador dentro de instantes"
        ?>
      </section>
</body>
</html>
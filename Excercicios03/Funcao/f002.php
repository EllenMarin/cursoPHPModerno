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
        <h1>Funcões de manipulação de strings</h1>
        <?php
        echo "<h3><li> print_r ou var_dump()</h3></li>";
        $array[0] = "Exibe";
        $array[1] = "um array";
        $array[2] = "e seus indices";

        print_r($array); //ou var_dump()

        echo "<h3><li> wordwrap()</h3></li>";
        $q = "<p>Aqui temos um texto gigantesco para ver um exemplo de como o wordwrsap funciona ao fazer a quebra de linha baseado no número definido</p>";
        $r = wordwrap($q, 30, "<br>");
        echo $r;

        //
        echo "<h3><li> strlen()</h3></li>";
        $s = "Curso em video";
        $t = strlen($s);
        echo "<p> A strlen() calcula a quatidade de caracteres dentro da string, por exemplo: \"Curso em video\" tem: $t de comprimento";

        //
        echo "<h3><li> trim()</h3></li>";
        $nome = "   Jose da Silva   ";
        $strlen = strlen($nome);
        echo "O nome dentro da string tem $strlen caracteres<br>";
        $novo = trim($nome);
        echo "Agora com a função trim() removendo os espaços, agora a string $nome tem " . strlen($novo) . " caracteres";

        //
        echo "<h3><li> str_word_count()</h3></li>";
        $frase = "Eu estou a estudar PHP";
        $count = str_word_count($frase);
        echo "A str_word_count() diz que temos $count palavras na string \"$frase\"";

        //
        echo "<h3><li> explode()</h3></li>";
        $frase01 = "Eu estou a estudar PHP";
        $exp = explode(" ", $frase01);
        echo "<br>O explode() cria um array como no exemplo a cima " . print_r($exp);

        //
        echo "<h3><li> implode() ou join()</h3></li>";
        $array01[0] = "A";
        $array01[1] = "estudar";
        $array01[3] = "PHP";

        $frase02 = implode("#", $array01);
        echo "A implode serve para juntar os indices do array formando uma frase, no meio das letras por o caractere definido, como no exemplo: \" $frase02 \" ";

        //
        echo "<h3><li> strtolower(), strtoupper(), ucfirst(), ucwords(), strrev()</h3></li>";
        /*
        $nome01 = "ellen marin";
        $nome02 = strtolower($nome01);
        echo "<li> strtolower() \" $nome02 \" </li>";
        
        $nome03 = strtoupper($nome01);
        echo " <li> strtoupper() \" $nome03 \" </li>";
        
        $nome04 = ucfirst($nome01);
        echo " <li> ucfirst() \" $nome04 \" </li>";
        
        $nome05 = ucwords($nome01);
        echo "<li> ucwords() \" $nome05 \" </li>";

        //
        $nome01 = "ellen marin";
        $funcoes = array('strtolower', 'strtoupper', 'ucfirst', 'ucwords');
        $funcoesCount = count($funcoes);

        for ($i = 0; $i < $funcoesCount; $i++) {
            $funcao = $funcoes[$i];
            $resultado = $funcao($nome01);
            echo "<li> $funcao() \"$resultado\" </li>";
        }*/

        $nome01 = "ellen marin";
        $funcoes = array('strtolower', 'strtoupper','ucfirst','ucwords','strrev');
        foreach($funcoes as $funcao){
            $resultado = $funcao($nome01);
            echo "<li> $funcao() \"$resultado\" </li>";
        }

        //
        echo "<br><h3><li> stripos()</h3></li>";
        $frase03 = "Quero descobrir qual a posição de uma string";
        $pos = stripos($frase03, "DESCOBRIR");
        echo "A palavra \"descobrir\" na frase \"$frase03\" esta na posição $pos";
        
        //
        echo "<br><h3><li> substr_count()</h3></li>";
        $frase04 = "Quero descobrir quantas vezes a palavra vezes é encontrada na string";
        $sub = substr_count($frase04, "vezes");
        echo "A palavra \"vezes\" na frase \"$frase04\" aparece $sub x";
        
        //
        echo "<br><h3><li> substr()</h3></li>";
        $frase05 = "Curso de PHP";

        $substringPrimeiros = substr($frase05, 6);
        $substringSelecionados = substr($frase05, 9, 3); 
        $substringUltimo =substr($frase, -2);

        echo "A frase \"$frase05\"
        <li> \"substr(variavel, 6)\"  pegando as primeiras posições selecionada até o fim: $substringPrimeiros </li><br>
        <li> \"substr(variavel, 9, 3)\"  pegando as posiçoes selecionadas, definindo o indice que começa e quantos indices depois é: $substringSelecionados</li><br>
        <li> \"substr(variavel, -2)\"  pegando os ultimos indices é: $substringUltimo </li>";
        
        //
        echo "<br><h3><li> str_pad()</h3></li>";
        $frase06 = "Marin";
        $str_padR = str_pad($frase06, 30, "x", STR_PAD_RIGHT );
        $str_padL = str_pad($frase06, 30, "x", STR_PAD_LEFT);
        $str_padC = str_pad($frase06, 30, "x", STR_PAD_BOTH);

        echo "<li>Usando str_pad(variavel, 30, \" x\", SRT_PAD_RIGHT), consigo visualisar a aprtir da string $frase06 o resultado: $str_padR</li><br>
        <li>Usando str_pad(variavel, 30, \" x\", SRT_PAD_LEFT), consigo visualisar a aprtir da string $frase06 o resultado: $str_padL</li><br>
        <li>Usando str_pad(variavel, 30, \" x\", SRT_PAD_BOUTH), consigo visualisar a aprtir da string $frase06 o resultado: $str_padC</li>";
        
        //
        echo "<br><h3><li> str_pad()</h3></li>";
        $frase07 = "Gosto de estudar Matemática. Matemática é muito divertido";
        $str_ireplace = str_ireplace("matemática", "PHP", $frase07);
        echo $str_ireplace;

        ?>
    </main>

</body>

</html>
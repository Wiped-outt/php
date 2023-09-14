<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Raphael Thierry Gomes -->

<!-- Codigo PHP | Números inteiros -->

    <?php

        echo "<br>";
        echo "<hr>";
        echo "<br>";

        echo  5;
        echo " | Número inteiro <br>";
        echo 7 + 3 ;
        echo " | Soma de numeros inteiros <br>";
        echo -15;
        echo " | Números negativos <br>";
        echo 9 + -29 ;
        echo " | Soma com negativo <br>";

        $n = 25;
        echo $n;
        echo " | Valor selecionavel <br>"

    ?>

<!-- Codigo PHP | Função is_int -->

    <?php

        echo "<br>";
        echo "<hr>";
        echo "<br>";

        $a = 7;
        $b = 7.5;


        if(is_int($a)) {
            echo "O comando irá funcionar caso o elemento inserido seja um número inteiro";
        }

        if(is_int("$b")) {
            echo "Caso o elemento seja um número que não é inteiro ou string, o comando não aparecerá";
        }
        
        echo "<br>";

    ?>

<!-- Codigo PHP | Números tipo float -->

    <?php

        echo "<br>";
        echo "<hr>";
        echo "<br>";

        

    ?>

<!-- Codigo PHP | Verificação de float -->

    <?php

        echo "<br>";
        echo "<hr>";
        echo "<br>";

        $a = "teste";
        $b = 12.8;

        if(is_float($a)) {
            echo "É float 1! <br>";
        }

        if(is_float($b)) {
            echo "É float 2! <br>";
        }

        if(is_float(6565.63)) {
            echo "É float 3! <br>";
        }

        if(is_float("teste")) {
            echo "É float 4! <br>";
        }

    ?>

<!-- Codigo PHP | Tipos de string -->

    <?php

        echo "<br>";
        echo "<hr>";
        echo "<br>";

        echo "testando texto em aspas duplas <br>";
        echo 'testando texto em aspas simples <br>';
        echo "<br><p>Para exibir uma aspas, inicie a string com a outra.</p>";
        echo "Ele disse: 'Olá!' <br>";
        echo 'Ele disse: "Olá!" <br>';

        echo "<br><p>O valor é passado para a variável e depois recuperado na string.</p>";

        $idade = 15;

        echo "ele tem $idade anos <br>";
        echo 'ele tem $idade anos';

    ?>

<!-- Codigo PHP | Verificar string -->

    <?php

        $str = "SENAI";
        $num = 118;

        if(is_string($str)) {
            echo "$str é uma string 1<br>";
        }

        if(is_string($num)) {
            echo "$num é uma string 2<br>";
        }

        if(is_string("asd")) {
            echo "É uma string 3<br>";
        }

    ?>

<!-- Codigo PHP | Booleanos -->

    <?php

        echo true;
        echo "<br>";
        echo false;

        if(true) {
            echo "É verdadeiro! <br>";
        }

        if(5 > 2) { // true
            echo "E verdadeiro! <br>";
        }

        $podeEntrar = true;

        if($podeEntrar) {
            echo "O usuário pode entrar";
        }

    ?>

<!-- Codigo PHP | Verificar Booleanos -->

        <?php

        $a = true;

        if(is_bool($a)) {
            echo "É um booleano 1 <br>";
        }

        if(is_bool(0)) {
            echo "É um booleano 2 <br>";
        }

        if(is_bool($a)) {
            echo "É um booleano 3 <br>";
        }

        if(0.0 == false) {
            echo "0 é considerado falso! <br>";
        }

    ?>

<!-- Codigo PHP | Array -->

    <?php

        echo "<br><hr>";

        echo "<h2>Lista ordenada sobre o dia 16 de março</h2>";

        $arr = [

            "Data"        => "16 de março",
            "Clima"       => "nublado",
            "Graus"       => "+27° -20°" 

        ];

        echo "<pre>";
        print_r($arr);
        echo "</pre>";

    ?>

    
</body>
</html>
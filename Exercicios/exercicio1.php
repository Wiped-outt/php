<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>

    <style>
        .destaque {color: red;}
    </style>

</head>
<body>
    
    <h1 class="destaque">Trabalhando com PHP</h1>
    <p>Programador: Thierry</p>
    <hr>

    <?php 
        // Geração de texto (string)
        echo "Chama Sesi-Senai !";

        /* Geração de texto estruturado (com tags, atributos) */
        echo "<h2>Gerando <span class='destaque'>HTML</span> através do PHP.</h2>";

        echo "<h2>Gerando <span class=\"destaque\">HTML</span> através do PHP.</h2>";

    ?>

    <h1>HTML e PHP mesclados</h1>
    <p>parágrafo HTML</p>

    <?php
        $linguagem = "Linguagem PHP.";
    ?>
    <p>Parágrafo mesclado HTML com <?=$linguagem?> </p>

</body>
</html>
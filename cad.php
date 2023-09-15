<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>

</head>




<?php
// Definir um cookie com a data e hora atual como a última visita
setcookie('ultima_visita', date('Y-m-d H:i:s'), time() + 3600 * 24 * 30); // Expira em 30 dias
?>
<body>
    
<header>

<h1> Resultado do processamento</h1>

</header>

<main>
    
    <?php 


    
     $n = $_GET["nome"] ?? "Sem nome"; // Variável ($_GET) Superglobal para adquirir os dados que o usuário colocou no formulário

     $s = $_GET["sobrenome"] ?? "Desconhecido"; // O sinal "??" é operador de qualescência nula 

     echo "<p> É um prazer te conhecer, <strong> $n $s! </strong> Este é o meu site.<br></p>";

     
    ?>


    <?php 
    
    if(isset($_COOKIE['ultima_visita'])){
        $ultima_visita = $_COOKIE['ultima_visita'];
        echo "Bem-vindo de volta! Sua última visita foi em: $ultima_visita.";
    } else {
        echo "Bem-vindo pela primeira vez!";
    }
    ?>

<a href="javascript:history-go(-1)">Voltar para a página anterior</a>

</main>
</body>
</html>
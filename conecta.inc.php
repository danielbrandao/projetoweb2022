<?php
    // conectando ao servidor
    $conexao = mysqli_connect("localhost","root","");

    // conectando ao BD criado
    $db = mysqli_select_db($conexao, "adminphp");
    
    // Executando query e retornando valores da tabela "faleconosco"
    $query = mysqli_query($conexao, "SELECT * FROM faleconosco");


    
?>

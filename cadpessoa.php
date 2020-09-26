<?php

    require('conexao.inc.php');

    $nome   = $_POST['nome'];
    $idade  = $_POST['idade'];
    $cpf    = $_POST['cpf'];

    $query = mysqli_query($conexao,"INSERT into pessoa (nome, idade, cpf) values ('{$nome}','{$idade}','{$cpf}')");
    
    echo "<script>
        alert('Registro salvo com sucesso');
        document.location = 'cadPessoa.html';
    </script>";

?>
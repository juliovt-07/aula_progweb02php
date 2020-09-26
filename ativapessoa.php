<?php

    $id = $_GET['id'];

    require('conexao.inc.php');

    $query = mysqli_query($conexao,"UPDATE pessoa set ativo=1 where id={$id}");
    
    echo "<script>
        alert('Pessoa ativada com sucesso');
        document.location = 'listapessoa.php';
    </script>";

?>
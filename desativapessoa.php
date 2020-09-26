<?php

    $id = $_GET['id'];

    require('conexao.inc.php');

    $query = mysqli_query($conexao,"UPDATE pessoa set ativo=0 where id={$id}");

    echo "<script>
        alert('Pessoa desativada com sucesso');
        document.location = 'listapessoa.php';
    </script>";

?>
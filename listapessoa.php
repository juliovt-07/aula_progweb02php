<html>

<head>
    <title>Formulário de Cadastro de Pessoa</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="inc/estilos.css" >
    <script src="inc/script.js"></script>
</head>

<body>
    <h1>Listagem de Pessoas</h1>
    <a href='cadPessoa.html'>Cadastrar Pessoa</a>
    <hr/>
<?php

    require('conexao.inc.php');
    $resultado = mysqli_query($conexao,"SELECT * from pessoa");



    echo '<table class="tabeladados">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Idade</th>
            <th>Ativo</th>
            <th>Opções</th>
        <tr>';

    while($linha = mysqli_fetch_assoc($resultado)){

        echo "<tr>
            <th>{$linha['id']}</th>
            <th>{$linha['nome']}</th>
            <th>{$linha['cpf']}</th>
            <th>{$linha['idade']}</th>
            <th>";
            
            if($linha['ativo'] == 1){
                echo "<a href='desativapessoa.php?id={$linha['id']}'>Sim</a>";
            } else {
                echo "<a href='ativapessoa.php?id={$linha['id']}'>Não</a>";
            }


        echo "</th>
            <th> 
                <a href='editpessoa.php?id={$linha['id']}'>Editar</a> |
                <a href='delpessoa.php?id={$linha['id']}'>Excluir</a>
            </th>
            <tr>";
    }

    echo '</table>';


?>

    

</body>

</html>
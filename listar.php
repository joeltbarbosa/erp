    <?php
    #Iremos listar os registros do banco de dados
    #O não pode esquecer de fazer ao manipular o banco de dados
    #Resp = colocar o arquivo de conexao com banco

    include('config.php');

    #Testtando se o filtro de pesuisa foi preenchido

    #montart a consulta com base na variavel, vai ficar assim:
    # select * from tb-pessoas where nome-pessoa like '%palavra%'
    #echo "<br>select * from pessoas $where<br>";

    #criar uma variavel qualquer para realizar a consulta ao banco
    #$listar = mysql_query("select * from pessoas $where") or die("Erro ao listar!");
    #$listar = mysql_query("select * from pessoas") or die("Erro ao listar!");#<---select sem filtro de pesquisa

    #contar registros
    #mysql_num_rows retorna o  numero de registro no banco


    #while ($variavel qualquer = função que pega todos os campo da consulta
    #($variavel da consulta))


    ?>


    <!doctype html>
    <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Listagem</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Google fontes-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <h2 align="center">Formulario de listagem</h2>

    <div class="row">
        <table class="striped responsive-table" width="100%" border="1" bordercolor="#EEE" cellspacing="0" cellpadding="10">
            <tr>
                <th>Fantasia</th>
                <th>Contato</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Atividade</th>
                <th>Classificacao</th>
                <th width="10">Alterar</th>
                <th width="10">Excluir</th>
            </tr>
            <?php
            include('config.php');
            $listar = mysql_query("select * from pessoas") or die("Erro ao listar!");
            while ($campos = mysql_fetch_array($listar)) {?>


                <tr>
                    <td><?=$campos['nomeFantasia']?></td>
                    <td><?=$campos['nomeContato']?></td>
                    <td><?=$campos['telefone']?></td>
                    <td><?=$campos['email']?></td>
                    <td><?=$campos['atividade']?></td>
                    <td><?=$campos['classificacao']?></td>
                    <td><a class="btn-floating waves-effect waves-light" href="alterar.php?id=<?php echo($campos['id']); ?>"><i class="material-icons">mode_edit</i></a></td>
                    <td><a class="btn-floating btn-flat waves-effect waves-light red" href="excluir.php?id=<?php echo($campos['id']); ?>"><i class="material-icons">delete</i></a></td>
                </tr>

            <?php }?>

        </table>

    </div>

    <a href="formulario.php" class="btn waves-effect waves-light">
        <i class="material-icons right">send</i>Novo
    </a>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    </body>

    </html>
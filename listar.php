<?php
    #Iremos listar os registros do banco de dados
    #O não pode esquecer de fazer ao manipular o banco de dados
    #Resp = colocar o arquivo de conexao com banco

    include('config.php');
    #criar uma variavel qualquer para realizar a consulta ao banco
    $listar = mysql_query("select * from pessoas") or die("Erro ao listar!");

    #contar registros
    #mysql_num_rows retorna o  numero de registro no banco

    $contarRegistros = mysql_num_rows($listar);
    echo "Foram encontrados $contarRegistros registros";
    echo '<br>';
    #while ($variavel qualquer = função que pega todos os campo da consulta
    #($variavel da consulta))

    while ($dados = mysql_fetch_assoc($listar)) {
        ?>
        <a href="excluir.php?id=<?php echo($dados['id']); ?>">Excluir</a> |
        <a href="alterar.php?id=<?php echo($dados['id']); ?>">Alterar</a> -
            <?php echo 'Fantasia: ' . $dados['nomeFantasia'] . ' Contato: ' . $dados['nomeContato'] . '<br>';

        }
            ?>





#formulario de listagem
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
<h1 align="center">Formulario de listagem</h1>

<div class="row">
    <form class="col s12" action="#">
        <div class="row">
            <table class="striped responsive-table">
                <legend>ERP v1.0- Lista de Prestador de Serviços</legend>
                <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons right">search</i>
                        <label for="pesquisa">Pesquisa</label>
                        <input type="text" name="pesquisa">

                    </div>
                </div>
                <thead>
                    <tr>
                        <th>Fantasia</th>
                        <th>Nome Contato</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Atividade</th>
                        <th>Classificação</th>
                        <th>
                            Remover
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>RM</td>
                        <td>Ronaldo</td>
                        <td>(61) 99999-9999</td>
                        <td>email@email.com</td>
                        <td>Picineiro</td>
                        <td>Bom</td>
                        <td>
                            <a class="btn-floating btn-flat waves-effect waves-light red"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>RS</td>
                        <td>Romino</td>
                        <td>(61) 99999-9999</td>
                        <td>email@email.com</td>
                        <td>Pedreiro</td>
                        <td>Bom</td>
                        <td>
                            <a class="btn-floating btn-flat waves-effect waves-light red"><i class="material-icons">delete</i></a>
                        </td>

                    </tr>

                    <tr>
                        <td>RT</td>
                        <td>Ataide</td>
                        <td>(61) 99999-9999</td>
                        <td>email@email.com</td>
                        <td>Marceneiro</td>
                        <td>Bom</td>
                        <td>
                            <a class="btn-floating btn-flat waves-effect waves-light red"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>

        <a href="formulario.php" class="btn waves-effect waves-light"><i class="material-icons right">send</i>Novo</a>




    </form>

</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
</body>

</html>

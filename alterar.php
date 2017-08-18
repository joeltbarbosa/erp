<?php

include('config.php');
$id = $_GET['id'];
$listar = mysql_query("select * from pessoas where id='$id'") or die("Erro ao listar!");

#contar registros
#mysql_num_rows retorna o  numero de registro no banco

$contarRegistros = mysql_num_rows($listar);
echo "Foram encontrados $contarRegistros registros";
echo '<br>';
#while ($variavel qualquer = função que pega todos os campo da consulta
#($variavel da consulta))

while ($dados = mysql_fetch_assoc($listar))
    {
        echo 'Fantasia: ' . $dados['nomeFantasia'] . ' Contato: ' . $dados['nomeContato'] . '<br>';
        ?>
        <!--criar arquivo formulario.php, -->
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <title>Formulário de Alteração</title>

            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Google fontes-->
            <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        </head>

        <body>
        <div align="center">
            <img src="img/bg.png" class= "responsive-img circle">
        </div>

        <h1 align="center">Alteração de Cadastro</h1>

        <div id="container" class="row">

            <form class="col s12" action="atualizar.php?id=<?php echo($dados['id']); ?>" method="post">

                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">business</i>
                        <label for="nomeFantasia">Nome Fantasia</label>
                        <input type="text" name="nomeFantasia" id="nomeFantasia" value="<?php echo $dados['nomeFantasia']?>" class="validate"/>
                    </div>
                </div>


                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">person</i>
                        <label for="nomeContato">Nome Contato</label>
                        <input type="text" name="nomeContato" id="nomeContato" value="<?php echo $dados['nomeContato']?>" class="validate"/>
                    </div>
                </div>


                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">phone</i>
                        <label for="telefone">Telefone</label>
                        <input type="tel" name="telefone" id="telefone" value="<?php echo $dados['telefone']?> "validate"/>
                    </div>
                </div>


                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">email</i>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="<?php echo $dados['email']?>" class="validate"/>
                    </div>
                </div>


                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">assignment_ind</i>
                        <label for="atividade">Atividade Comercial</label>
                        <input type="text" name="atividade" id="atividade" value="<?php echo $dados['atividade']?>" />
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">trending_up</i>
                        <label for="classificacao">Classificação</label>
                        <input type="text" name="classificacao" id="classificacao" value="<?php echo $dados['classificacao']?>" class="validate"/>
                    </div>
                </div>

                <div class="row">
                    <button class="btn waves-effect waves-light" type="reset" name="action">Limpar
                        <i class="material-icons right">undo</i>
                    </button>

                    <button class="btn waves-effect waves-light" type="submit" value="cadastrar" name="action">Atualizar
                        <i class="material-icons right">send</i>
                    </button>
                </div>

            </form>
        </div>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        </body>
        </html>
        <?php

    }
?>
<!--criar arquivo formulario.php, -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Formulário de Cadastro</title>

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

    <h1 align="center">Formulário de Cadastro</h1>

    <div id="container" class="row">

        <form class="col s12" action="cadastro.php" method="post">

            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">business</i>
                    <label for="nomeFantasia">Nome Fantasia</label>
                    <input type="text" name="nomeFantasia" id="nomeFantasia" class="validate"/>
                </div>
            </div>


            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">person</i>
                    <label for="nomeContato">Nome Contato</label>
                    <input type="text" name="nomeContato" id="nomeContato" class="validate"/>
                </div>
            </div>


            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" class="validate"/>
                </div>
            </div>


            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="validate"/>
                </div>
            </div>


            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">assignment_ind</i>
                    <label for="atividade">Atividade Comercial</label>
                    <input type="text" name="atividade" id="atividade"/>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">trending_up</i>
                    <label for="classificacao">Classificação</label>
                    <input type="text" name="classificacao" id="classificacao" class="validate"/>
                </div>
            </div>

            <div class="row">
                <button class="btn waves-effect waves-light" type="reset" name="action">Limpar
                    <i class="material-icons right">undo</i>
                </button>

                <button class="btn waves-effect waves-light" type="submit" value="cadastrar" name="action">Cadastrar
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
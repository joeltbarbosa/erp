<?php
# O include, serve para incluir um arquivo já existente dentro do que está sendo usado.
include('config.php');//<--arquivo de conexao
/**
 * Created by Joel Trigueiro Barbosa.
 * Date: 12/08/2017
 * Time: 20:47
 */

#Definindo as variaveis
$nomeFantasia = $_POST['nomeFantasia'];
$nomeContato = $_POST['nomeContato'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$atividade = $_POST['atividade'];
$classificacao = $_POST['classificacao'];


#sa variavel que veio atraves do metodo post for 'vazio'
if($_POST['nomeFantasia'] == '')
{
    //Escreva a messagem.
    echo 'Por favor, preencha o campo Nome Fantasia!';
}
else if($_POST['nomeContato'] == '')
{
    echo 'Por favor, preencha o campo Nome Contato!';
}
else if($_POST['telefone'] == '')
{
    echo 'Por favor, preencha o campo Telefone!';
}
else if($_POST['email'] == '')
{
    echo 'Por favor, preencha o campo Email!';
}
else if($_POST['atividade'] == '')
{
    echo 'Por favor, preencha o campo Atividade!';
}
else if($_POST['classificacao'] == '')
{
    echo 'Por favor, preencha o campo Classifica��o!';
}


#Inserindo os registros no banco de dados
#cria a variavel que recebe a funcao sql
if ($inserirDb = mysql_query("insert into pessoas(nomeFantasia,nomeContato,telefone,email,atividade,classificacao)
                        values('$nomeFantasia','$nomeContato','$telefone','$email','$atividade','$classificacao')") or die("Erro ao cadastrar!"))
{

    header("Location: formulario.php");
}else
{
    echo "Erro ao gravar informações no banco";
}
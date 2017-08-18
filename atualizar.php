<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 17/08/2017
 * Time: 19:34
 */
include('config.php');

if ($_GET['id'] == '') {
    echo 'Informe o ID da pessoa.';
} else {
    $id = $_GET['id'];




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
    else
    {

        #Definindo as variaveis
        $nomeFantasia = $_POST['nomeFantasia'];
        $nomeContato = $_POST['nomeContato'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $atividade = $_POST['atividade'];
        $classificacao = $_POST['classificacao'];

        $up = mysql_query("update pessoas set nomeFantasia='$nomeFantasia',nomeContato='$nomeContato',telefone='$telefone',email='$email',atividade='$atividade',classificacao='$classificacao' where id='$id'") or die('Erro ao atualizar');
        echo 'registro atualizado com sucesso';

    }


}
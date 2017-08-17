<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 13/08/2017
 * Time: 21:46
 */
#excluir php
include('config.php');

if ($_GET['id'] == '') {
    echo 'Informe o ID da pessoa.';
} else {
    $id = $_GET['id'];
    $del = mysql_query("delete from pessoas where id='$id'") or die("erro de exclusao");
    echo 'registro apagado com sucesso';
}

#http://localhost/excluir.php?id=2
#criar o link no listar.php



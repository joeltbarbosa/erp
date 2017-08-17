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
    }
?>
<!--arquivo de conexao com banco - config.php-->
<?php
#funcao nativa de conexao com banco
#traduzindo: mysql_connect('seu local do banco','usuario','senha_banco');

	$conexao = @mysql_connect('localhost','root','') or die('erro de conexao db');

#conectar ao banco
#traduzindo: mysql_select_db('qual o banco', qual conexao);

	$banco = mysql_select_db('erp', $conexao) or die('Nao foi encontrado o banco');


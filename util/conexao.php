<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('BANCOSELECT', 'complexoescolarama');

$conexao = mysql_connect(HOST, USER, PASSWORD) or die('1');
$selectdb = mysql_select_db(BANCOSELECT, $conexao);









//print_r($resutaldo);


 ?>

<?php
define('HOST', 'localhost');
define('USER', 'u734996712_cea');
define('PASSWORD', '1q2w3e4r5t6y');
define('BANCOSELECT', 'u734996712_cea');

$conexao = mysqli_connect(HOST, USER, PASSWORD) or die('1');
$selectdb = mysql_select_db(BANCOSELECT, $conexao);









//print_r($resutaldo);


 ?>

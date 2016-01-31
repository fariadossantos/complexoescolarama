<?php

function selecionadados($tabela, $instrucao){
    return $sql =mysql_query("select * from $tabela $instrucao");
}
?>

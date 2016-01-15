<?php
  sleep(1);
$acao = $_POST['acao'];
  switch ($acao) {
    case 'fazerinscricao':
      print_r($_REQUEST);
        print_r($_FILES);
      break;

    default:
      echo "Ação não existente";
      break;
  }
 ?>

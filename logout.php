<?php
session_start();

if (isset($_SESSION["EMAIL"])) {
  echo 'logoutしました。';
}else{
  echo 'sessionがTimeOutしました。';
}
//セッション変数のクリア
$_SESSION = array();
//セッションクリア
@session_destroy();
 ?>

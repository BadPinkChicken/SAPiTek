<?php
  /*
  ** SAPiTek
  ** Salnik Api ePiTech
  ** BadPinkChicken
  */

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  require_once("inc/SAPiTek.php");

  $login = #YOUR_LOGIN;
  $password = #YOUR_INTRANET_PASSWORD;

  $con = new SapiTek($login, $password);

  $result = $con->getModules();
  var_dump($result);
 ?>

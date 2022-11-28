<?php
session_start();
$_SESSION["usuario"] = 1234;

if(isset($_REQUEST['uri'])) {
  $uri = $_REQUEST['uri'];
  switch($uri) {
      case "login":
        include('views/login/index.php');
        break;
      case "u/": 
          include('views/dashboard/index.php');
          break;
      case "u/medicos": 
          echo "esta es la vista de medicos";
          break;
      default: 
          include('views/errors/404.html');
          break;
  }

} else {
    include('views/login/index.php');
}
?>
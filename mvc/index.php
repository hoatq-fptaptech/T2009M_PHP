<?php
    include_once "controllers/WebController.php";
   $route = isset($_GET["route"])?$_GET["route"]:"";
   $controller = new WebController();
   switch ($route){
       case "login": $controller->login();break;
       case "list": $controller->listSV();break;
       case "themsv": $controller->themSV();break;
       case "luusv": $controller->luuSV();break;
       default: $controller->home();
   }
<?php
   require_once("../smarty/libs/Smarty.class.php");
   header("Content-Type:text/html;charset=utf-8");


   $login = new smarty();

   $login->display("template/login.tpl");
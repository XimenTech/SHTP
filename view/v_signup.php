<?php
   require_once("../smarty/libs/Smarty.class.php");
   header("Content-Type:text/html;charset=utf-8");


   $signup = new smarty();

   $signup->display("template/header.tpl");
   $signup->display("template/signup.tpl");
   $signup->display("template/footer.tpl");
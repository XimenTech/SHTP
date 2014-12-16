<?php
   require_once("../smarty/libs/Smarty.class.php");
   header("Content-Type:text/html;charset=utf-8");


   $signup = new smarty();

   GLOBAL $page_title;
   $page_title="注册";

   require_once('view/v_header.php');
   $signup->display("template/signup.tpl");
   $signup->display("template/footer.tpl");
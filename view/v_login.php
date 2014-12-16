<?php
   require_once("../smarty/libs/Smarty.class.php");
   header("Content-Type:text/html;charset=utf-8");


   $login = new smarty();

   GLOBAL $page_title;
   $page_title="登录";

   require_once('view/v_header.php');
   $login->display("template/login.tpl");
   $login->display("template/footer.tpl");
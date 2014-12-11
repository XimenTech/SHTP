<?php
	require_once('../smarty/libs/Smarty.class.php');
    header("Content-Type:text/html;charset=utf-8");
$viewitem = new smarty();


$viewitem->display("template/header.tpl");
$viewitem->display("template/view_item.tpl");
$viewitem->display("template/footer.tpl");
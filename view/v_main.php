<?php
	require_once('../smarty/libs/Smarty.class.php');
	header("Content-Type:text/html;charset=utf-8");
	$index = new smarty();

	$index->display("template/header.tpl");	
	$index->display("template/main.tpl");
	$index->display("template/footer.tpl");
?>
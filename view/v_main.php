<?php
	require_once('../smarty/libs/Smarty.class.php');
	header("Content-Type:text/html;charset=utf-8");
	$index = new smarty();

	require_once('view/v_header.php');

	$index->display("template/main.tpl");
	require_once('view/v_footer.php');
?>
<?php
	require_once('../smarty/libs/Smarty.class.php');
	header("Content-Type:text/html;charset=utf-8");
	$index = new smarty();
	if(isset($user_id))
		$index->assign("sign",'1');
	else
		$index->assign("sign",'0');
	$index->display("template/header.tpl");	
	$index->display("template/main.tpl");
	$index->display("template/footer.tpl");
?>
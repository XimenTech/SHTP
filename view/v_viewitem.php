<?php
	require_once('../smarty/libs/Smarty.class.php');

	GLOBAL $items;

	$viewitem = new smarty();

	$viewitem->assign("items",$items);
	$viewitem->display("template/viewitem.tpl");
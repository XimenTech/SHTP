<?php
	require_once('../smarty/libs/Smarty.class.php');

	$index = new smarty();
	$index->display("template/index.tpl");
<?php
	require_once('controller/controller.php');
	require_once('include/item.class.php');

	$items[] = new item(1,'little prince','felix');
	
	$controller = new controller();
	$controller->invoke();
<?php
	header('Content-type:text/html; charset=utf-8');
	require_once('controller/controller.php');
	
	$main_controller = new controller();
	$main_controller->invoke();

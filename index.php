<?php
	header('Content-type:text/html; charset=utf-8');
	require_once('include/appvars.php');
	require_once('controller/controller.php');
	
	session_start();

	$main_controller = new controller();
	$main_controller->invoke();

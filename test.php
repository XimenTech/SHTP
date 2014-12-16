<?php
	echo 1;
	require_once('model/m_user.php');

	$m_user = new m_user();
	
	//测试signup方法
	//$m_user->signup();

	//测试login方法
	//$m_user->login();

	//测试edit_profile方法
	$_SESSION['user_id'] = 1;
	$_SESSION['user_email'] = 'Mxx';
	$m_user->edit_profile();


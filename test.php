<?php
	echo 1;
	require_once('model/m_user.php');

	$m_user = new m_user();
	$m_user->signup();
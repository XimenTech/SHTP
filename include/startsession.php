<?php
  	session_start();

 	//如果没有会话变量，尝试用cookie创建会话变量
 	if (!isset($_SESSION['user_ID'])) {
   		if (isset($_COOKIE['user_ID'])) {
    		$_SESSION['user_id'] = $_COOKIE['user_id'];
    		$_SESSION['user_email'] = $_COOKIE['user_email'];
    		$_SESSION['user_username'] = $_COOKIE['user_username'];
    		$_SESSION['user_authority'] = $_COOKIE['user_authority'];
    		$_SESSION['user_qq'] = $_COOKIE['user_qq'];
			$_SESSION['user_avatar'] = $_COOKIE['user_avatar'];
			$_SESSION['user_status'] = $_COOKIE['user_status'];
			$_SESSION['user_phone'] = $_COOKIE['user_phone'];
			$_SESSION['user_address'] = $_COOKIE['user_address'];
			$_SESSION['user_reg_date'] = $_COOKIE['user_reg_date'];
    	}
  	}
?>
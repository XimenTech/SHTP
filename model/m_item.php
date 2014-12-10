<?php

	class m_item{ 
		public function additem(){
			require_once('includes/item.class.php');
			require_once('includes/connectvars.php'); 
			//获取数据库连接变量
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			if (!$con)
	  		{
	  		die('Could not connect: ' . mysql_error());
	  		}
			$sql="INSERT INTO shtp_item (item_img,item_type,item_title,item_detail,item_price)
			VALUES ('$_POST[item_img]','$_POST[item_type]','$_POST[item_title]','$_POST[item_detail]','$_POST[item_price]')";
			if (!mysql_query($sql,$con))
	  		{
	  		die('Error: ' . mysql_error());
	  		}
			echo "1 record added";

			mysql_close($con);
		}

		public function edititem(){
		 	require_once('includes/item.class.php');
			require_once('includes/connectvars.php');
			//获取数据库连接变量
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			if (!$con)
	  		{
	  		die('Could not connect: ' . mysql_error());
	  		}
	  		$eitem = mysql_query("SELECT item_id,
	  									 item_img,
	  									 item_type,
	  									 item_title,
	  									 item_detail,
	  									 item_price 
	  							  FROM shtp_item
	  							  WHERE item_id='$item_id'")
	  		$item_img 	=	$_POST['item_img'];
	  		$item_type 	=	$_POST['item_type'];
	  		$item_title	=	$_POST['item_title'];
	  		$item_detail=	$_POST['item_detail'];
	  		$item_price	=	$_POST['item_price'];

	  		mysql_query("UPDATE shtp_item
	  					 SET 	item_img	=	'$item_img',
	  							item_type 	=	'$item_type',
	  							item_title 	=	'$item_title',
	  							item_detail =	'$item_detail',
	  							item_price 	=	'$item_price'

	  					 WHERE item_id='$item_id' ")
			or die('Could not edit'. mysql_error());
			mysql_close($con);
		}

		public function removeitem(){
			require_once('includes/item.class.php');
			require_once('includes/connectvars.php'); 
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			if (!$con)
	  		{
	  		die('Could not connect: ' . mysql_error());
	  		}

	  		mysql_query("DELETE FROM shtp_item WHERE item_id='$item_id' ");
	  		or die('Could not remove'. mysql_error());
	  		mysql_close($con);
		}
	}
?>
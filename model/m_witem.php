<?php

	class m_item{ 
		public function addwitem(){
			require_once('include/witem.class.php');
			require_once('include/connectvars.php'); 
			//获取数据库连接变量
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			if (!$con)
	  		{
	  		die('Could not connect: ' . mysql_error());
	  		}
			$sql="INSERT INTO shtp_witem (witem_img,witem_type,witem_title,witem_detail,witem_price)
			VALUES ('$_POST[witem_img]','$_POST[witem_type]','$_POST[witem_title]','$_POST[witem_detail]','$_POST[witem_price]')";
			if (!mysql_query($sql,$con))
	  		{
	  		die('Error: ' . mysql_error());
	  		}
			echo "1 record added";

			mysql_close($con);
		}

		public function editwitem(){
		 	require_once('include/witem.class.php');
			require_once('include/connectvars.php');
			//获取数据库连接变量
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			if (!$con)
	  		{
	  		die('Could not connect: ' . mysql_error());
	  		}
	  		$ewitem = mysql_query("SELECT witem_id,
	  									  witem_img,
	  									  witem_type,
	  									  witem_title,
	  									  witem_detail,
	  									  witem_price 
	  							  FROM shtp_witem
	  							  WHERE witem_id='$witem_id'")
	  		$witem_img 	=	$_POST['witem_img'];
	  		$witem_type 	=	$_POST['witem_type'];
	  		$witem_title	=	$_POST['witem_title'];
	  		$witem_detail=	$_POST['witem_detail'];
	  		$witem_price	=	$_POST['witem_price'];

	  		mysql_query("UPDATE shtp_witem
	  					 SET 	witem_img		=	'$witem_img',
	  							witem_type 		=	'$witem_type',
	  							witem_title 	=	'$witem_title',
	  							witem_detail 	=	'$witem_detail',
	  							witem_price 	=	'$witem_price'

	  					 WHERE witem_id='$witem_id' ")
			or die('Could not edit'. mysql_error());
			mysql_close($con);
		}

		public function removewitem(){
			require_once('include/witem.class.php');
			require_once('include/connectvars.php'); 
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			if (!$con)
	  		{
	  		die('Could not connect: ' . mysql_error());
	  		}

	  		mysql_query("DELETE FROM shtp_witem WHERE witem_id='$witem_id' ")
	  		or die('Could not remove'. mysql_error());
	  		mysql_close($con);
		}
	}
?>
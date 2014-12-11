<?php

	class m_item{ 
		public function addwitem(){
			require_once('include/witem.class.php');
			require_once('include/connectvars.php'); 
			//获取数据库连接变量
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('连接数据库失败！');
	  		//$item_img 	=	$_POST['item_img'];
	  		$witem_type 		=	$_POST['witem_type'];
	  		$witem_title		=	$_POST['witem_title'];
	  		$witem_detail	=	$_POST['witem_detail'];
	  		$witem_price		=	$_POST['witem_price'];
			$sql = "INSERT INTO shtp_witem (witem_type,witem_title,witem_detail,witem_price) VALUES ('$witem_type','$witem_title','$witem_detail','$witem_price')";
			$result = mysqli_query($con,$sql)
			or die('fail');
			echo "1 record added";
			mysqli_close($con);
		}

		public function editwitem(){
		 	require_once('include/witem.class.php');
			require_once('include/connectvars.php');
			//获取数据库连接变量
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('连接数据库失败！');
	  		$ewitem = mysqli_query("SELECT witem_id,
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

	  		mysqli_query("UPDATE shtp_witem
	  					 SET 	witem_img		=	'$witem_img',
	  							witem_type 		=	'$witem_type',
	  							witem_title 	=	'$witem_title',
	  							witem_detail 	=	'$witem_detail',
	  							witem_price 	=	'$witem_price'

	  					 WHERE witem_id='$witem_id' ")
			or die('Could not edit'. mysqli_error());
			mysqli_close($con);
		}

		public function removewitem(){
			require_once('include/witem.class.php');
			require_once('include/connectvars.php'); 
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('连接数据库失败！');

	  		mysqli_query("DELETE FROM shtp_witem WHERE witem_id='$witem_id' ")
	  		or die('Could not remove'. mysqli_error());
	  		mysqli_close($con);
		}
	}
?>
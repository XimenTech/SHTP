<?php

	class m_witem{ 
		public function addwitem(){
			require_once('include/witem.class.php');
			require_once('include/connectvars.php'); 
			//获取数据库连接变量
			$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
			or die('连接数据库失败！');
	  		$witem_img 			=	$_POST['witem_img'];
	  		$user_id			=	$_POST['user_id'];
	  		$witem_type 		=	$_POST['witem_type'];
	  		$witem_title		=	$_POST['witem_title'];
	  		$witem_detail		=	$_POST['witem_detail'];
	  		$witem_price		=	$_POST['witem_price'];
			$sql = "INSERT INTO shtp_witem (witem_img,user_id,witem_type,witem_title,witem_detail,witem_price) VALUES ('witem_img','$user_id','$witem_type','$witem_title','$witem_detail','$witem_price')";
			$result_awitem = mysqli_query($con,$sql)
			or die('添加求购商品失败');
			echo "添加求购商品成功！";
			mysqli_close($con);
		}
 
		public function editwitem(){
		 	require_once('include/witem.class.php');
			require_once('include/connectvars.php');
			//获取数据库连接变量
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('连接数据库失败！');
			$witem_id 	=	$_POST['witem_id'];
			$witem_img 	=	$_POST['witem_img'];
	  		$witem_type 	=	$_POST['witem_type'];
	  		$witem_title	=	$_POST['witem_title'];
	  		$witem_detail=	$_POST['witem_detail'];
	  		$witem_price	=	$_POST['witem_price'];

	  		$ewitem = ("SELECT witem_id,
	  									 witem_img,
	  									 witem_type,
	  									 witem_title,
	  									 witem_detail,
	  									 witem_price 
	  							  FROM shtp_witem WHERE witem_id='$witem_id'");

	  		$result_ewitem = mysqli_query($con,$ewitem);

	  		$uwitem=("UPDATE shtp_witem

	  					 SET 	witem_img		=	'$witem_img',
	  							witem_type 		=	'$witem_type',
	  							witem_title 	=	'$witem_title',
	  							witem_detail 	=	'$witem_detail',
	  							witem_price 	=	'$witem_price'

	  					 WHERE witem_id = '$witem_id' ");
	  		$reslut_uwitem = mysqli_query($con,$uwitem)
			or die('修改求购商品失败！');
			echo "修改求购商品成功！";
			mysqli_close($con);
		}

		public function removewitem(){
			require_once('include/witem.class.php');
			require_once('include/connectvars.php'); 
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('连接数据库失败！');
			$witem_id 	=	$_POST['witem_id'];
	  		$dwitem = "DELETE FROM shtp_witem WHERE witem_id='$witem_id' ";
	  		$result = mysqli_query($con,$dwitem)
	  		or die('删除求购商品失败！');
	  		echo "删除求购商品成功！";
	  		mysqli_close($con);
		}
	}

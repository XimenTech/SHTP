<?php

	class m_item{ 
		public function additem(){
			require_once('include/item.class.php');
			require_once('include/connectvars.php'); 
			//获取数据库连接变量
			$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
			or die('连接数据库失败！');
	  		$item_img 		=	$_POST['item_img'];
	  		$user_id		=	$_POST['user_id'];
	  		$item_type 		=	$_POST['item_type'];
	  		$item_title		=	$_POST['item_title'];
	  		$item_detail	=	$_POST['item_detail'];
	  		$item_price		=	$_POST['item_price'];
			$sql = "INSERT INTO shtp_item (item_img,user_id,item_type,item_title,item_detail,item_price,item_dttm) VALUES ('$item_img','$user_id','$item_type','$item_title','$item_detail','$item_price',NOW())";
			$result_aitem = mysqli_query($con,$sql)
			or die('添加商品失败！');
			echo "成功添加商品！";
			mysqli_close($con);	
		}

		public function hotitem(){ 
			require_once('include/item.class.php');
			require_once('include/connectvars.php');
			//获取数据库连接变量
			$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
			or die('连接数据库失败！');
	  		$sql = "SELECT item_id,item_img,item_title,item_price FROM shtp_item ORDER BY item_viewtime DESC";
	  		$data = mysqli_query($con,$sql);
	  		GLOBAL $hotitem_main;
	  		$hotitem_main=array();
	  		$sum=0;
	  		while($row = mysqli_fetch_array($data,MYSQL_ASSOC)){ 
	  			if($sum==15)
	  			break;
	  			$hotitem_main[]=$row;
	  			$sum++;
	  		}
	  		print_r($hotitem_main);	
	  		mysqli_close($con);
		}
 
		public function edititem(){
		 	require_once('include/item.class.php');
			require_once('include/connectvars.php');
			//获取数据库连接变量
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('连接数据库失败！');
			$item_id 	=	$_POST['item_id'];
			$item_img 	=	$_POST['item_img'];
	  		$item_type 	=	$_POST['item_type'];
	  		$item_title	=	$_POST['item_title'];
	  		$item_detail=	$_POST['item_detail'];
	  		$item_price	=	$_POST['item_price'];

	  		$eitem = ("SELECT item_id,
	  						  item_img,
	  						  item_type,
	  						  item_title,
	  						  item_detail,
	  						  item_price 
	  						FROM shtp_item WHERE item_id='$item_id'");
	  		$result_eitem = mysqli_query($con,$eitem);
	  		$eitem_data = mysqli_fetch_array($result_eitem);
	  		
	  		$uitem=("UPDATE shtp_item
	  					 SET 	item_img	=	'$item_img',
	  							item_type 	=	'$item_type',
	  							item_title 	=	'$item_title',
	  							item_detail =	'$item_detail',
	  							item_price 	=	'$item_price'

	  					 WHERE item_id='$item_id' ");
	  		$result_uitem = mysqli_query($con,$uitem)
			or die('修改商品失败！');
			$uitem_data = mysql_fetch_array($result_uitem);
			echo "修改商品成功！";
			mysqli_close($con);
		}

		public function removeitem(){
			require_once('include/item.class.php');
			require_once('include/connectvars.php'); 
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('连接数据库失败！');
			$item_id 	=	$_POST['item_id'];
	  		$ditem = "DELETE FROM shtp_item WHERE item_id='$item_id' ";
	  		$result = mysqli_query($con,$ditem)
	  		or die('删除商品失败！');
	  		echo "删除商品成功";
	  		mysqli_close($con);
		}

		public function viewitem(){ 
			require_once('include/item.class.php');
			require_once('include/connectvars.php');
			//获取数据库连接变量
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('连接数据库失败！');

			$viewitem_id = $_GET['item_id'];
			$vitem = ("SELECT item_id,
	  						  item_img,
	  						  item_type,
	  						  item_title,
	  						  item_detail,
	  						  item_price 
	  						FROM shtp_item WHERE item_id='$item_id'");
	  		$result_vitem = mysqli_query($con,$vitem);
	  		$vitem_data = mysqli_fetch_array($result_vitem);
		}
	}

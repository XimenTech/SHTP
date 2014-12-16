<?php

	class m_item{ 
		public function additem(){
			require_once('include/item.class.php');
			require_once('include/connectvars.php'); 
			//获取数据库连接变量
			$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
			or die('连接数据库失败！');
	  		$item_img_name	= 	$_FILES['item_img']['name'];
			$item_img_type	= 	$_FILES['item_img']['type'];
			$item_img_size	= 	$_FILES['item_img']['size'];
			if (!empty($avatar)){
				if ((($item_img_type == 'image/gif') 	|| 
					 ($item_img_type == 'image/jpeg') || 
					 ($item_img_type == 'image/pjpeg')|| 
					 ($item_img_type == 'image/png'))	&& 
					 ($item_img_size > 0) 			&& 
					 ($item_img <= HEADPORTRAIT_MAXFILESIZE)) {
						$item_img = time().$item_img;
						$item_img_path = HEADPORTRAIT_PATH. $item_img;
						move_uploaded_file($_FILES['item_img']['tmp_name'], $item_img_path);
					}
			}
	  		$user_id		=	$_POST['user_id'];
	  		$item_type 		=	$_POST['item_type'];
	  		$item_title		=	$_POST['item_title'];
	  		$item_detail	=	$_POST['item_detail'];
	  		$item_price		=	$_POST['item_price'];
			$sql = "INSERT INTO shtp_item (item_img,user_id,item_id,item_type,item_title,item_detail,item_price,item_dttm) VALUES ('$item_img_path','$user_id',default,$item_type','$item_title','$item_detail','$item_price',NOW())";
			$result_aitem = mysqli_query($con,$sql)
			or die('添加商品失败！');
			echo "成功添加商品！";
			mysqli_close($con);	
		}

		public function myitem(){ 
			require_once('include/item.class.php');
			require_once('include/connectvars.php');
			//获取数据库连接变量
			$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
			or die('连接数据库失败！');
			$myid = $_SESSION['user_id'];
			$sql = "SELECT item_id,item_img,item_title,item_price FROM shtp_item where user_id = '$user_id'";
	  		$data = mysqli_query($con,$sql);
			GLOBAL $myitem_main;
	  		$myitem_main=array();
	  		while($row = mysqli_fetch_array($data,MYSQL_ASSOC)){ 
	  			$myitem_main[]=$row;
	  		}
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
	  		mysqli_close($con);
		}

		public function newitem(){ 
			require_once('include/item.class.php');
			require_once('include/connectvars.php');
			//获取数据库连接变量
			$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
			or die('连接数据库失败！');
	  		$sql = "SELECT item_id,item_img,item_title,item_detail,item_price FROM shtp_item ORDER BY item_dttm";
	  		$new_data = mysqli_query($con,$sql);
	  		GLOBAL $newitem_main;
	  		$newitem_main=array();
	  		$sum=0;
	  		while($row = mysqli_fetch_array($new_data,MYSQL_ASSOC)){ 
	  			if($sum==4)
	  			break;
	  			$newitem_main[]=$row;
	  			$sum++;
	  		}
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
	  		GLOBAL $eitem_data;
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
			GLOBAL $uitem_data;
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
			$vitem = ("SELECT *
	  						FROM shtp_item WHERE item_id='$viewitem_id'");
	  		$result_vitem = mysqli_query($con,$vitem);
	  		GLOBAL $vitem_data;
	  		$vitem_data = mysqli_fetch_array($result_vitem);
		}
	}
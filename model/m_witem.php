<?php

	class m_witem{ 
		public function addwitem(){
			require_once('include/witem.class.php');
			require_once('include/connectvars.php'); 
			//获取数据库连接变量
			$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
			or die('连接数据库失败！');
	  		$witem_img_name	= 	$_FILES['witem_img']['name'];
			$witem_img_type	= 	$_FILES['witem_img']['type'];
			$witem_img_size	= 	$_FILES['witem_img']['size'];
			if (!empty($avatar)){
				if ((($witem_img_type == 'image/gif') 	|| 
					 ($witem_img_type == 'image/jpeg') || 
					 ($witem_img_type == 'image/pjpeg')|| 
					 ($witem_img_type == 'image/png'))	&& 
					 ($witem_img_size > 0) 			&& 
					 ($witem_img <= HEADPORTRAIT_MAXFILESIZE)) {
						$witem_img = time().$witem_img;
						$witem_img_path = HEADPORTRAIT_PATH. $witem_img;
						move_uploaded_file($_FILES['witem_img']['tmp_name'], $witem_img_path);
					}
			}
	  		$user_id			=	$_POST['user_id'];
	  		$witem_type 		=	$_POST['witem_type'];
	  		$witem_title		=	$_POST['witem_title'];
	  		$witem_detail		=	$_POST['witem_detail'];
	  		$witem_price		=	$_POST['witem_price'];
			$sql = "INSERT INTO shtp_witem (witem_img,user_id,item_id,witem_type,witem_title,witem_detail,witem_price,witem_dttm) VALUES ('$witem_img_path','$user_id',default,'$witem_type','$witem_title','$witem_detail','$witem_price',NOW())";
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

	  	public function viewwitem(){ 
			require_once('include/witem.class.php');
			require_once('include/connectvars.php');
			//获取数据库连接变量
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('连接数据库失败！');

			$viewwitem_id = $_GET['witem_id'];
			$vwitem = ("SELECT witem_id,
	  						  witem_img,
	  						  witem_type,
	  						  witem_title,
	  						  witem_detail,
	  						  witem_price 
	  						FROM shtp_witem WHERE witem_id='$witem_id'");
	  		$result_vwitem = mysqli_query($con,$vwitem);
	  		$vwitem_data = mysqli_fetch_array($result_vwitem);
		}
	}

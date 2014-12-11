<?php

	class m_user{
		public function signup(){
			require_once('include/user.class.php');

			//获取数据库连接变量
			require_once('include/connectvars.php');
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
				or die('连接数据库失败！');

			
				$email		=	$_POST['email'];
				$password	=	$_POST['password'];
				$query = "SELECT * FROM shtp_user WHERE user_email = '$email'";
				$data = mysqli_query($dbc,$query);

				if(mysqli_num_rows($data) == 0){
					//验证用户名是否存在

					$query = "INSERT INTO shtp_user (user_email,user_password) VALUES ('$email','$password')";
					//新用户写入数据库

					$result = mysqli_query($dbc,$query)
						or die('fail');
					//注册成功
					echo '创建账户成功';

					
				}else{
					echo '用户名已存在';
				}		

			mysqli_close($dbc);
		}
		
		public function login(){
			require_once('include/user.class.php');

			//获取数据库连接变量
			require_once('include/connectvars.php');
				


			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
				or die('连接数据库失败！');
			$email = $_POST['email'];
			$password = $_POST['password'];
			$query = "SELECT * FROM shtp_user WHERE user_email = '$email' AND user_password = '$password'";
			$data = mysqli_query($dbc, $query);

			if (mysqli_num_rows($data) == 1){
				$row = mysqli_fetch_array($data);
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['user_email'] = $row['user_email'];
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['user_authority'] = $row['user_authority'];
				$_SESSION['user_qq'] = $row['user_qq'];
				$_SESSION['user_avatar'] = $row['user_avatar'];
				$_SESSION['user_status'] = $row['user_status'];
				$_SESSION['user_phone'] = $row['user_phone'];
				$_SESSION['user_address'] = $row['user_address'];
				$_SESSION['user_reg_date'] = $row['user_reg_date'];
				setcookie('user_id',$row['user_id']);
				setcookie('user_email',$row['user_email']);
				setcookie('user_name',$row['user_name']);
				setcookie('user_authority',$row['user_authority']);
				setcookie('user_qq',$row['user_qq']);
				setcookie('user_avatar',$row['user_avatar']);
				setcookie('user_status',$row['user_status']);
				setcookie('user_phone',$row['user_phone']);
				setcookie('user_address',$row['user_address']);
				setcookie('user_reg_date',$row['user_reg_date']);
				echo "登陆成功\n";

					//header('Location: ../index.php');
			}else{
				$error_msg = '用户名或密码错误';
				echo "登陆失败";
			}
			mysqli_close($dbc);
		}
		
		public function user_center(){

		}

		public function edit_profile(){
			require_once('include/user.class.php');

			//获取数据库连接变量
			require_once('include/connectvars.php');


			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
				or die('连接数据库失败！');

			//$email		=	$_POST['email'];
			$authority	=	$_POST['authority'];
			$status		=	$_POST['status'];
			$avatar		=	$_POST['avatar'];
			$name		=	$_POST['name'];
			$qq			=	$_POST['qq'];
			$phone		=	$_POST['phone'];
			$address	=	$_POST['address'];
			$reg_date	=	$_POST['reg_date'];
				
			$query = "UPDATE shtp_user SET 	user_authority 	= '$authority',
											user_status		= '$status',
											user_avatar		= '$avatar',
											user_name 		= '$name',
											user_qq			= '$phone',
											user_phone		= '$phone',
											user_address	= '$address',
											user_reg_date	= '$reg_date'
											WHERE user_email = '$email'";
			$result = mysqli_query($dbc,$query)
				or die('fail');
			//	$query = "INSERT INTO tc_users (user_email,user_pass,user_username,user_reg_date)".
			//			"VALUES ('$email','".sha1($pass1)."','$username',NOW())";

			//	$result = mysqli_query($dbc,$query)
			//			or die('fail');
			mysqli_close($dbc);
		}

	}
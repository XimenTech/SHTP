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
						or die('插入用户信息失败！');
					//注册成功>
					echo json_encode(array('flag' => 1, 'msg' => '创建账户成功'));

					
				}else{
					echo json_encode(array('flag' => 0, 'msg' => '用户名已存在' ));
				}		

			mysqli_close($dbc);
		}
		
		public function login(){
			require_once('include/user.class.php');

			//获取数据库连接变量
			require_once('include/connectvars.php');
				

//登陆前先判断是否存在cookie
//.......
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
				or die('连接数据库失败！');
			$email = $_POST['email'];
			$password = $_POST['password'];
			$query = "SELECT * FROM shtp_user WHERE user_email = '$email' AND user_password = '$password'";
			$data = mysqli_query($dbc, $query);

			if (mysqli_num_rows($data) == 1){
				$row = mysqli_fetch_array($data);
				//session_start();
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

				echo json_encode(array('flag' => 1, 'msg' => '登陆成功'));


					//header('Location: ../index.php');
			}else{

				echo json_encode(array('flag' => 0, 'msg' => '用户名或密码错误'));

			}
			mysqli_close($dbc);
		}
		
		public function user_center(){

		}

		public function edit_profile(){
			require_once('include/user.class.php');

			//获取数据库连接变量
			require_once('include/connectvars.php');
			require_once('include/appvars.php');

			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
				or die('连接数据库失败！');


			//$authority	=	$_POST['authority'];
			//$avatar		=	$_POST['avatar'];
			//	echo $_POST['name'];
			$id 		=	$_SESSION['user_id'];
			$avatar		= 	$_FILES['avatar']['name'];
			$avatar_type= 	$_FILES['avatar']['type'];
			$avatar_size= 	$_FILES['avatar']['size'];

			$name		=	$_POST['name'];
			$qq			=	$_POST['qq'];
			$phone		=	$_POST['phone'];
			$address	=	$_POST['address'];

			if (!empty($avatar)){
				if ((($avatar_type == 'image/gif') 	|| 
					 ($avatar_type == 'image/jpeg') || 
					 ($avatar_type == 'image/pjpeg')|| 
					 ($avatar_type == 'image/png'))	&& 
					 ($avatar_size > 0) 			&& 
					 ($avatar <= HEADPORTRAIT_MAXFILESIZE)) {

						$avatar = $id;

		

						$target = HEADPORTRAIT_PATH. $avatar;
						move_uploaded_file($_FILES['avatar']['tmp_name'], $target);

						//$query = "UPDATE tc_users SET user_head_portrait = '$hp' WHERE user_ID = $temp";
						$query = "UPDATE shtp_user SET 	user_avatar		= '$avatar',
														user_name 		= '$name',
														user_qq			= '$phone',
														user_phone		= '$phone',
														user_address	= '$address'
														WHERE user_id	= '$id'";
						$result = mysqli_query($dbc,$query)
							or die('fail');
						echo "修改成功";

				}else{
					echo '类型或大小错误';
				}
			}else{
				echo '未选择文件';
			}	
				
			mysqli_close($dbc);
		}

		public function logout(){ 
			if (isset($_SESSION['user_ID'])) {
    			// Delete the session vars by clearing the $_SESSION array
    			$_SESSION = array();

    			// Delete the session cookie by setting its expiration to an hour ago (3600)
    			if (isset($_COOKIE[session_name()])) {
      				setcookie(session_name(), '', time() - 3600);
    			}

    			// Destroy the session
				session_destroy();
			}

			// Delete the user ID and username cookies by setting their expirations to an hour ago (3600)
  			setcookie('user_id', '', time() - 3600);
	 		setcookie('user_email', '', time() - 3600);
	  		setcookie('user_username', '', time() - 3600);
    		setcookie('user_authority', '', time() - 3600);
    		setcookie('user_address', '', time() - 3600);
    		setcookie('user_phone', '', time() - 3600);
    		setcookie('user_qq', '', time() - 3600);
    		setcookie('user_status', '', time() - 3600);
    		setcookie('user_avatar', '', time() - 3600);
    		setcookie('user_reg_date', '', time() - 3600);
    		// Redirect to the home page
    		header('Location: ../index.php' );
		}

	}
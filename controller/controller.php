<?php
	
	class controller{

		public function invoke(){
			if ( isset($_GET['controller']) ) {
				$controller	=	$_GET['controller'];
				$action		= 	$_GET['action'];
			}elseif ( isset($_POST['controller']) ) {
				$controller	=	$_POST['controller'];
				$action		= 	$_POST['action'];
			}

			if ( isset($controller) ){
				switch ($controller) {
					case 'c_user':
						require_once('contrpller/c_user.php');
						$c_user = new c_user();
						$c_user->invoke();
						break;
					case 'c_item':
						require_once('controller/c_item.php');
						$c_item = new c_item();
						$c_item->invoke();
						break;
				}
			}else{
				require_once('view/v_main.php');
			}
		}
	}
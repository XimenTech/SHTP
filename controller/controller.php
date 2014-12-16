<?php
	
	class controller{

		public function invoke(){

			GLOBAL 	$controller, 
					$action;

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

						require_once('controller/c_user.php');
						$c_user = new c_user();
						$c_user->invoke();
						break;
					case 'c_item':
						require_once('controller/c_item.php');
						$c_item = new c_item();
						$c_item->invoke();
						break;
				}

			}elseif ( isset($_GET['static']) ){
				echo 1;
				require_once('view/v_'.$_GET['static'].'.php');
			}else{
				GLOBAL $action;
				$action = "hotitem";
				require_once('controller/c_item.php');
				$c_item = new c_item();
				$c_item->invoke();
				// $c_item->newitem();sss

				require_once('view/v_main.php');
			}
		}
	}
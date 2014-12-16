<?php
	
	class controller{

		public function invoke(){
<<<<<<< HEAD
=======
			GLOBAL 	$controller, 
					$action;

>>>>>>> ery
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
<<<<<<< HEAD
						require_once('contrpller/c_user.php');
=======
						require_once('controller/c_user.php');
>>>>>>> ery
						$c_user = new c_user();
						$c_user->invoke();
						break;
					case 'c_item':
						require_once('controller/c_item.php');
						$c_item = new c_item();
						$c_item->invoke();
						break;
				}
<<<<<<< HEAD
			}else{
=======
			}elseif ( isset($_GET['static']) ){
				echo 1;
				require_once('view/v_'.$_GET['static'].'.php');
			}else{
				// $c_item = new c_item();
				// $c_item->hotitem();
				// $c_item->newitem();
>>>>>>> ery
				require_once('view/v_main.php');
			}
		}
	}
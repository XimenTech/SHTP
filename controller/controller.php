<?php
	
	class controller{

		public function invoke(){

			if (isset($_GET['controller'])) {
				
				switch ($_GET['controller']) {
					case 'c_item':
						require_once('c_item.php');
						$c_item = new c_item();
						$c_item->invoke();
						break;
				}	

			}else{

				require_once('view/v_index.php');
			
			}
		}

	}
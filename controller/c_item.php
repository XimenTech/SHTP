<?php
	class c_item{
		public function invoke(){
			switch ($_GET['action']) {
				case 'additem':
					require_once('model/m_item.php');
					$this->model = new m_item();
					$this->model->additem();
					require_once('view/v_viewitem.php');
					break;

				case 'viewitem':
					require_once('view/v_viewitem.php');
					break;

				case 'edititem':
					require_once('model/m_item.php');
					$this->model = new m_item();
					$this->model->edititem();
					require_once('view/v_viewitem.php');
					break;

				case 'removeitem':
					require_once('view/v_viewitem.php');
					break;
			}
		}
?>
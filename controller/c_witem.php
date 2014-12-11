<?php
	class c_witem{
		public function invoke(){
			GLOBAL $action;
			switch ($action) {
				case 'addwitem':
					require_once('model/m_witem.php');
					$this->model = new m_witem();
					$this->model->addwitem();
					require_once('view/v_viewwitem.php');
					break;

				case 'edit_witem':
					require_once('model/m_witem.php');
					$this->model = new m_witem();
					$this->model->editwitem();
					require_once('view/v_viewwitem.php');
					break;

				case 'removewitem':
					require_once('view/v_viewwitem.php');
					break;
			}
		}
?>
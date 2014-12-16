<?php
	class c_user{
		public function invoke(){
			GLOBAL $action;
			switch ($action) {

				case 'signup':
					require_once('model/m_user.php');
					$this->model = new m_user();
					$this->model->signup();
					break;

				case 'login':
					require_once('model/m_user.php');
					$this->model = new m_user();
					$this->model->login();
					break;

				case 'user_center':
					require_once('model/m_user.php');
					$this->model = new m_user();
					$this->model->user_center();
					require_once('view/v_user_center.php');
					break;

				case 'edit_profile':
					require_once('model/m_user.php');
					$this->model = new m_user();
					$this->model->edit_profile();
					require_once('view/v_user_center.php');
					break;

				case 'logout':
					require_once('model/m_user.php');
					$this->model = new m_user();
					$this->model->logout();
					require_once('view/v_main.php');
					break;

			}
		} 
	}
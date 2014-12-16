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
					break;

				case 'edit_profile':
					require_once('model/m_user.php');
					$this->model = new m_user();
					$this->model->user_edit_profile();
					break;

			}
		} 
	}
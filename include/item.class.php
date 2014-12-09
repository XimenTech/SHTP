<?php
	class item{
		public 	$item_id,
				$item_title,
				$user_name;

		public function __construct($id, $title, $user){
			$this->item_id		=	$id;
			$this->item_title 	=	$title;
			$this->user_name		=	$user;
		}
	}
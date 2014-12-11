<?php
	class user{
		public 	$user_id,
				$user_authority,
				$user_status,
				$user_avatar,
				$user_email,
				$user_name,
				$user_password,
				$user_qq,
				$user_phone,
				$user_address,
				$user_reg_date;

		public function __construct($email,$password,$id,$authority=1, $status=1, $avatar, $name="", $qq="", $phone="", $address="", $reg_date=""){
			$this->user_id			=	$id;
			$this->user_authority	=	$authority;
			$this->user_status		=	$status;
			$this->user_avatar		=	$avatar;
			$this->user_email		=	$email;
			$this->user_name		=	$name;
			$this->user_password	=	$password;
			$this->user_qq			=	$qq;
			$this->user_phone		=	$phone;
			$this->user_address		=	$address;
			$this->user_reg_date	=	$reg_date;
		}
	}
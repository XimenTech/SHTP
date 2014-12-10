<?php
	class user{
		public 	$user_id,
		public  $user_authority,
		public  $user_status,
		public  $user_avatar,
		public  $user_email,
		public  $user_name,
		public  $user_password,
		public  $user_qq,
		public  $user_phone,
		public  $user_address,
		public  $user_reg_date;

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
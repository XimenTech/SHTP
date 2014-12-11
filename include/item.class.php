<?php
	class item{ 
		public $item_id,
			   $user_id,
			   $item_status,
			   $item_img,
			   $item_type,
			   $item_title,
			   $item_detail,
			   $item_price,
			   $item_owner_qq,
			   $item_owner_phone,
			   $item_owner_address,
			   $item_viewtime,
			   $item_dttm;

		public function __construct($status=1,$img,$type,$title,$detail,$price,$owner_qq,$owner_phone,$owner_address,$viewtime,$dttm){ 
			$this->item_id 		=	$item_id;
			$this->user_id 		=	$user_id;
			$this->item_status 	=	$status;
			$this->item_img 	=	$img;
			$this->item_type 	=	$type;
			$this->item_title 	=	$title;
			$this->item_detail 	=	$detail;
			$this->item_price 	=	$price;
			$this->item_owner_qq 	=	$owner_qq;
			$this->item_owner_address 	=	$owner_address;
			$this->item_viewtime 	=	$viewtime;
			$this->item_dttm 	=	$dttm;
		}
	}	
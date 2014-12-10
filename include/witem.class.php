<?php
	class item{ 
		public $witem_id,
			   $user_id,
			   $witem_status,
			   $witem_img,
			   $witem_type,
			   $witem_title,
			   $witem_detail,
			   $witem_price,
			   $witem_owner_qq,
			   $witem_owner_phone,
			   $witem_owner_address,
			   $witem_viewtime,
			   $witem_dttm;

		public function __construct($item_id,$user_id,$status,$img,$type,$title,$detail,$price,$owner_qq,$owner_phone,$owner_address,$viewtime,$dttm){ 
			$this->witem_id 	=	$item_id;
			$this->user_id 	=	$user_id;
			$this->witem_status 	=	$status;
			$this->witem_img 	=	$img;
			$this->witem_type 	=	$type;
			$this->witem_title 	=	$title;
			$this->witem_detail 	=	$detail;
			$this->witem_price 	=	$price;
			$this->witem_owner_qq 	=	$owner_qq;
			$this->witem_owner_address 	=	$owner_address;
			$this->witem_viewtime 	=	$viewtime;
			$this->witem_dttm 	=	$dttm;
		}
	}	
?>
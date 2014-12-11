<?php
	class itemlist{ 
		public $item_id,
			   $user_id,
			   $item_img,
			   $item_title,
			   $item_price,
			   $item_dttm,
			   $item_detail;

		public function __construct($item_id,$user_id,$img,$type,$title,$price,$viewtime){ 
			$this->item_id 	=	$item_id;
			$this->user_id 	=	$user_id;
			$this->item_img 	=	$img;
			$this->item_title 	=	$title;
			$this->item_price 	=	$price;
			$this->item_dttm 	=	$dttm;
			$this->item_detail 	=	$detail;
		}
	}
<?php
    require_once('../smarty/libs/Smarty.class.php');

    
    $item_title;
    $item_img;
    $item_type;
    $item_detail;
    $item_price;
	$viewitem = new smarty();
	
	$viewitem->display("template/view_item.tpl");
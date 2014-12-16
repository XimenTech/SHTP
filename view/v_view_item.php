<?php
	require_once('../smarty/libs/Smarty.class.php');
    header("Content-Type:text/html;charset=utf-8");

	
    // $item_title = '香蕉';
    // $item_id = '123456';
    // $item_status = '1';
    // $item_img = 'resource\banana.jpg';
    // $item_type = 'food';
    // $item_detail = 'delicious fruit';
    // $item_owner_qq = '**********';
    // $item_owner_phone = '**********';
    // $item_owner_address = '*********';
    // $item_viewtime = '4';
    // $item_dttm = '2014/11/11';
    // $item_price = '1.00';
	$viewitem = new smarty();
    
    GLOBAL $item;
     $vitem_data['item_title'];
     $vitem_data['item_id'];
     $vitem_data['item_status'];
     $vitem_data['item_img'];
     $vitem_data['item_type'];
     $vitem_data['item_detail'];
     $vitem_data['item_owner_qq'];
     $vitem_data['item_owner_phone'];

     $vitem_data['item_owner_address'];
      $vitem_data['item_viewtime'];
       $vitem_data['item_dttm'];
        $vitem_data['$item_price'];


    $viewitem->assing("title",$title);
	$viewitem->assign("items_title",$vitem_data['item_title']);
	$viewitem->assign("item_id",$vitem_data['item_id']);
	$viewitem->assign("item_status",$vitem_data['item_status']);
	$viewitem->assign("item_img",$vitem_data['item_img']);
	$viewitem->assign("item_type",$vitem_data['item_type']);
	$viewitem->assign("item_detail",$vitem_data['item_detail']);
	$viewitem->assign("item_owner_qq",$vitem_data['item_owner_qq']);
	$viewitem->assign("item_owner_phone",$vitem_data['item_owner_phone']);
	$viewitem->assign("item_owner_address",$vitem_data['item_owner_address']);
	$viewitem->assign("item_viewtime", $vitem_data['item_viewtime']);
	$viewitem->assign("item_dttm",$vitem_data['item_dttm']);
	$viewitem->assign("item_price",$vitem_data['$item_price']);
	// $viewitem->assign("item_price",$user_id);
    
    if($user_id==$_SESSION['user_id']){
        $viewitem->assign('flag',1);
    }
    else{
        $viewitem->assign('flag',0);
    }

    require_once('view/v_header.php');
    
	$viewitem->display("template/view_item.tpl");
	require_once('view/v_footer.php');
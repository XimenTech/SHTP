<?php
    require_once('../smarty/libs/Smarty.class.php');
    header("Content-Type:text/html;charset=utf-8");
    
    
    $witem_title='fexix';
   
    $witem_type='fruit';
    $witem_detail='awful fruit';
    
	$wadditem = new smarty();
	

	$wadditem->assign("items_title",$witem_title);
	$wadditem->assign("item_type",$witem_type);
	$wadditem->assign("item_detail",$witem_detail);
	


    require_once('view/v_header.php');
    $wadditem->display("template/add_witem.tpl");
    require_once('view/v_footer.php');
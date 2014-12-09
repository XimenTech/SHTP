<?php /* Smarty version Smarty-3.1.18, created on 2014-12-09 13:38:09
         compiled from "template\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:255535486fb414eb643-01682687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1330b55f35665f430ce9b8167feebce9b68bc0a' => 
    array (
      0 => 'template\\index.tpl',
      1 => 1418130657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255535486fb414eb643-01682687',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5486fb415458d7_32250402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5486fb415458d7_32250402')) {function content_5486fb415458d7_32250402($_smarty_tpl) {?><form action = "index.php" method="get">
<input type="hidden" name="controller" value="c_item">
<input type="hidden" name="action" value="additem">
<input type = "submit" value = "additem"/>
</form>
<form action = "index.php" method="get">
<input type="hidden" name="controller" value="c_item">
<input type="hidden" name="action" value="viewitem">
<input type = "submit" value = "viewitem"/>
</form><?php }} ?>

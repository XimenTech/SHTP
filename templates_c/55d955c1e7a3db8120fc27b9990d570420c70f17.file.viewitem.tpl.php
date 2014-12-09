<?php /* Smarty version Smarty-3.1.18, created on 2014-12-09 13:38:10
         compiled from "template\viewitem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:241185486fb42c4a033-79421164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55d955c1e7a3db8120fc27b9990d570420c70f17' => 
    array (
      0 => 'template\\viewitem.tpl',
      1 => 1418131853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241185486fb42c4a033-79421164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5486fb42ca04d4_99464190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5486fb42ca04d4_99464190')) {function content_5486fb42ca04d4_99464190($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<div>
<p>title : <?php echo $_smarty_tpl->tpl_vars['item']->value->item_title;?>
</p>
<p>owner : <?php echo $_smarty_tpl->tpl_vars['item']->value->user_name;?>
</p>
</div>
<?php } ?>
<?php }} ?>

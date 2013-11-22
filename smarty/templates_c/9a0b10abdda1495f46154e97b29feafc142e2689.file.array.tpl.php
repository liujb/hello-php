<?php /* Smarty version Smarty-3.1.15, created on 2013-11-21 14:32:23
         compiled from "array.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24835528cc0692f1cb0-99512455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a0b10abdda1495f46154e97b29feafc142e2689' => 
    array (
      0 => 'array.tpl',
      1 => 1385015537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24835528cc0692f1cb0-99512455',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_528cc0694474a6_09602698',
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528cc0694474a6_09602698')) {function content_528cc0694474a6_09602698($_smarty_tpl) {?><?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<table>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<tr>
		<?php  $_smarty_tpl->tpl_vars['pair'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pair']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pair']->key => $_smarty_tpl->tpl_vars['pair']->value) {
$_smarty_tpl->tpl_vars['pair']->_loop = true;
?>
		<td><?php echo $_smarty_tpl->tpl_vars['pair']->key;?>
:<?php echo $_smarty_tpl->tpl_vars['pair']->value;?>
</td>
		<?php } ?>
	</tr>
	<?php } ?>
</table><?php }} ?>

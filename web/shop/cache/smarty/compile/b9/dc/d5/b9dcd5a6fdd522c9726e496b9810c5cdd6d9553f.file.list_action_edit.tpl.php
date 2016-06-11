<?php /* Smarty version Smarty-3.1.19, created on 2016-03-30 14:50:57
         compiled from "/nfsmnt/hosting1_1/e/8/e8f5f997-df61-48b3-adf6-31d7f8929760/gardendirect.sk/web/shop/admin499n08c5y/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209867316256fbcbb1cbd2d4-38152480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9dcd5a6fdd522c9726e496b9810c5cdd6d9553f' => 
    array (
      0 => '/nfsmnt/hosting1_1/e/8/e8f5f997-df61-48b3-adf6-31d7f8929760/gardendirect.sk/web/shop/admin499n08c5y/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1459267954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209867316256fbcbb1cbd2d4-38152480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56fbcbb1ce0806_84678079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fbcbb1ce0806_84678079')) {function content_56fbcbb1ce0806_84678079($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>

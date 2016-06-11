<?php /* Smarty version Smarty-3.1.19, created on 2016-03-30 14:58:19
         compiled from "/nfsmnt/hosting1_1/e/8/e8f5f997-df61-48b3-adf6-31d7f8929760/gardendirect.sk/web/shop/modules/blockcmsinfo/blockcmsinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206173351156fbcd6b20e0f0-93801268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f82965f1b3930c9ad5c81130a05742292ee2602f' => 
    array (
      0 => '/nfsmnt/hosting1_1/e/8/e8f5f997-df61-48b3-adf6-31d7f8929760/gardendirect.sk/web/shop/modules/blockcmsinfo/blockcmsinfo.tpl',
      1 => 1459268189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206173351156fbcd6b20e0f0-93801268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56fbcd6b23e9e5_53195417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fbcd6b23e9e5_53195417')) {function content_56fbcd6b23e9e5_53195417($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
<!-- MODULE Block cmsinfo -->
<div id="cmsinfo_block">
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<div class="col-xs-6"><?php echo $_smarty_tpl->tpl_vars['info']->value['text'];?>
</div>
		<?php } ?>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }?><?php }} ?>

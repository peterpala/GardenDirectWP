<?php /* Smarty version Smarty-3.1.19, created on 2016-03-30 14:50:19
         compiled from "/nfsmnt/hosting1_1/e/8/e8f5f997-df61-48b3-adf6-31d7f8929760/gardendirect.sk/web/shop/admin499n08c5y/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109932871256fbcb8b208a23-31050749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3746785c0b3875080854a255ba16600cce956d09' => 
    array (
      0 => '/nfsmnt/hosting1_1/e/8/e8f5f997-df61-48b3-adf6-31d7f8929760/gardendirect.sk/web/shop/admin499n08c5y/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1459267954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109932871256fbcb8b208a23-31050749',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56fbcb8b210d14_82864619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fbcb8b210d14_82864619')) {function content_56fbcb8b210d14_82864619($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2016-03-30 14:50:36
         compiled from "/nfsmnt/hosting1_1/e/8/e8f5f997-df61-48b3-adf6-31d7f8929760/gardendirect.sk/web/shop/modules/gadwords/views/templates/admin/gadwords.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97526862156fbcb9c3175a0-95092096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e6c7e54e458150423d9a5e2a3e3d7161a6b634c' => 
    array (
      0 => '/nfsmnt/hosting1_1/e/8/e8f5f997-df61-48b3-adf6-31d7f8929760/gardendirect.sk/web/shop/modules/gadwords/views/templates/admin/gadwords.tpl',
      1 => 1459342233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97526862156fbcb9c3175a0-95092096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'code' => 0,
    'landing_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56fbcb9c3cc0a0_46582727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fbcb9c3cc0a0_46582727')) {function content_56fbcb9c3cc0a0_46582727($_smarty_tpl) {?>

<div class="panel">
	<div class="row gadwords-header">
		<div class="col-xs-6 text-center">
			<img id="adwords_logo" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
img/header_logo.jpg" alt="<?php echo smartyTranslate(array('s'=>'Google AdWords','mod'=>'gadwords'),$_smarty_tpl);?>
" />
		</div>
		<div class="col-xs-6 text-center">
			<span class="items-video-promotion"><object type="text/html" data="<?php echo smartyTranslate(array('s'=>'//www.youtube.com/embed/25AKLJAk-Lk?rel=0&amp;controls=0&amp;showinfo=0','mod'=>'gadwords'),$_smarty_tpl);?>
" width="400" height="225"></object></span>
		</div>
	</div>
	<hr />
	<div class="gadwords-content">
		<div class="row">
			<div class="col-xs-12">
				<p>
					<b>
						<?php echo smartyTranslate(array('s'=>'Show your ad to people at the very moment they are searching for what you offer. Google and PrestaShop increase your advertising investment by offering free advertising after you start spending!','mod'=>'gadwords'),$_smarty_tpl);?>

					</b>
				</p>

				<ul>
					<li><?php echo smartyTranslate(array('s'=>'Add your promotional code from Prestashop after entering billing details, and we will automatically credit your account when you spend a minimum credit*.','mod'=>'gadwords'),$_smarty_tpl);?>
</li>
					<li><?php echo smartyTranslate(array('s'=>'Got questions? Call at 0800 169 0489, and a Google AdWords expert will help you build your first campaign and offer tips on how to get the most out of AdWords.','mod'=>'gadwords'),$_smarty_tpl);?>
</li>
				</ul>
				<br/>
				<div class="col-xs-12 text-center">
						<h4><?php echo smartyTranslate(array('s'=>'Your Google AdWords promotional code for your shop is','mod'=>'gadwords'),$_smarty_tpl);?>
:</h4>
						<pre id="adwords_voucher"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</pre>
						<p><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['landing_page']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" target="_blank" title="Google AdWords"><?php echo smartyTranslate(array('s'=>'Start your campaign now with your promotional code','mod'=>'gadwords'),$_smarty_tpl);?>
</a></p>
				</div>
				<em class="small">
					* <?php echo smartyTranslate(array('s'=>'terms and conditions apply.','mod'=>'gadwords'),$_smarty_tpl);?>

				</em>
			</div>
		</div>
	</div>
</div>
<?php }} ?>

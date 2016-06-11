<?php /*%%SmartyHeaderCode:85579856256fbcc9e830c26-83651099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00f1cf8a49db0eb3029582ebfee87c733c7cb9ba' => 
    array (
      0 => '/nfsmnt/hosting1_1/e/8/e8f5f997-df61-48b3-adf6-31d7f8929760/gardendirect.sk/web/shop/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1459268268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85579856256fbcc9e830c26-83651099',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56fbcdbc7383f7_20856035',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fbcdbc7383f7_20856035')) {function content_56fbcdbc7383f7_20856035($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//gardendirect.sk/shop/vyhledavani" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Hľadať" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Hľadať</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>

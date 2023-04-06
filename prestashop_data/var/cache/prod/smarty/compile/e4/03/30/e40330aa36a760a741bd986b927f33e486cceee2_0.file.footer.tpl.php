<?php
/* Smarty version 4.2.1, created on 2023-04-06 04:41:27
  from '/bitnami/prestashop/administration/themes/new-theme/template/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642eafe7e86cd9_14782866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e40330aa36a760a741bd986b927f33e486cceee2' => 
    array (
      0 => '/bitnami/prestashop/administration/themes/new-theme/template/footer.tpl',
      1 => 1680768963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642eafe7e86cd9_14782866 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="footer" class="bootstrap">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackOfficeFooter"),$_smarty_tpl ) );?>

</div>
<?php }
}

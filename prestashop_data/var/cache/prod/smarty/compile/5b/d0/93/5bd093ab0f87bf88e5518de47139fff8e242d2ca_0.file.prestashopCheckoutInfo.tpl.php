<?php
/* Smarty version 4.2.1, created on 2023-04-06 04:29:26
  from '/bitnami/prestashop/modules/paypal/views/templates/admin/_partials/messages/prestashopCheckoutInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642ead165be237_04483462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bd093ab0f87bf88e5518de47139fff8e242d2ca' => 
    array (
      0 => '/bitnami/prestashop/modules/paypal/views/templates/admin/_partials/messages/prestashopCheckoutInfo.tpl',
      1 => 1680274280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642ead165be237_04483462 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info ps-checkout-info">
  <button type="button" class="close" data-dismiss="alert" data-action="close">×</button>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This module allows your customers to pay with their PayPal account. If you wish to accept credit cards and other payment methods in addition to PayPal, we recommend the [a @href1@]PrestaShop Checkout[/a] module.','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable9 = ob_get_clean();
ob_start();
echo '#';
$_prefixVariable10 = ob_get_clean();
ob_start();
echo 'data-action="install"';
$_prefixVariable11 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable9,array('@href1@'=>$_prefixVariable10,'@target@'=>$_prefixVariable11));?>

</div>
<?php }
}

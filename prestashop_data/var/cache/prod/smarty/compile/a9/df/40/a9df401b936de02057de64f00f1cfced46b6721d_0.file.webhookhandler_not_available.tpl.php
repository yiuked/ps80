<?php
/* Smarty version 4.2.1, created on 2023-04-06 04:29:26
  from '/bitnami/prestashop/modules/paypal/views/templates/admin/_partials/messages/webhookhandler_not_available.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642ead162ba800_72306230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9df401b936de02057de64f00f1cfced46b6721d' => 
    array (
      0 => '/bitnami/prestashop/modules/paypal/views/templates/admin/_partials/messages/webhookhandler_not_available.tpl',
      1 => 1680274280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642ead162ba800_72306230 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <div>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PayPal webhooks can not be enabled. The reason of the error is one of the following:','mod'=>'paypal'),$_smarty_tpl ) );?>

    </div>

  <ul>
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'htpasswd enabled','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'the https protocol is not supported','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'wrong https certificate','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'invalid server settings or insufficient access rights.','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
  </ul>

  <div>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please fix the issue or contact our support team. (link to add for [a @href1@]\'our support team\'[/a].','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
ob_start();
echo 'https://addons.prestashop.com/fr/contactez-nous?id_product=1748';
$_prefixVariable4 = ob_get_clean();
ob_start();
echo 'target="blank"';
$_prefixVariable5 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable3,array('@href1@'=>$_prefixVariable4,'@target@'=>$_prefixVariable5));?>

  </div>

  <div>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Webhooks are not used by the module until the moment the problem will be fixed. Please refresh the page to check the status again.','mod'=>'paypal'),$_smarty_tpl ) );?>

  </div>
</div>
<?php }
}

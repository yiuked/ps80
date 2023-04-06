<?php
/* Smarty version 4.2.1, created on 2023-04-06 04:29:26
  from '/bitnami/prestashop/modules/paypal/views/templates/admin/_partials/statusBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642ead163e3321_51423742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb5062b8096e8a54b9077df7e20ca02af867b00b' => 
    array (
      0 => '/bitnami/prestashop/modules/paypal/views/templates/admin/_partials/statusBlock.tpl',
      1 => 1680274280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642ead163e3321_51423742 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <p>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchant Country:','mod'=>'paypal'),$_smarty_tpl ) );?>
 <b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['merchantCountry']->value,'htmlall','UTF-8' ));?>
</b>
    </p>

    <p>
      <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To  modify country: [a @href1@]International > Localization[/a]','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminLocalization',true);
$_prefixVariable7 = ob_get_clean();
ob_start();
echo 'target="blank"';
$_prefixVariable8 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable6,array('@href1@'=>$_prefixVariable7,'@target@'=>$_prefixVariable8));?>

    </p>

    <p>
        <span class="btn btn-default" id="btn-check-requirements"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check requirements','mod'=>'paypal'),$_smarty_tpl ) );?>
</span>
    </p>

    <ul class="list-unstyled">
        <li>
            <?php if ((isset($_smarty_tpl->tpl_vars['sslActivated']->value)) && $_smarty_tpl->tpl_vars['sslActivated']->value) {?>
                <i class="icon-check text-success"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SSL enabled.','mod'=>'paypal'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <i class="icon-remove text-danger"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SSL should be enabled on your website.','mod'=>'paypal'),$_smarty_tpl ) );?>

            <?php }?>
        </li>

        <li>
            <?php if ((isset($_smarty_tpl->tpl_vars['tlsVersion']->value)) && $_smarty_tpl->tpl_vars['tlsVersion']->value['status']) {?>
                <i class="icon-check text-success"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The PHP cURL extension must be enabled on your server.','mod'=>'paypal'),$_smarty_tpl ) );?>

            <?php } elseif ((isset($_smarty_tpl->tpl_vars['tlsVersion']->value)) && $_smarty_tpl->tpl_vars['tlsVersion']->value['status'] == false) {?>
                <i class="icon-remove text-danger"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The PHP cURL extension must be enabled on your server. Please contact your hosting provider for more information.','mod'=>'paypal'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['tlsVersion']->value['error_message'];?>

            <?php }?>

        </li>

        <li>
            <?php if ((isset($_smarty_tpl->tpl_vars['accountConfigured']->value)) && $_smarty_tpl->tpl_vars['accountConfigured']->value) {?>
                <i class="icon-check text-success"></i>
            <?php } else { ?>
                <i class="icon-remove text-danger"></i>
            <?php }?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must connect your PayPal account','mod'=>'paypal'),$_smarty_tpl ) );?>

        </li>

        <?php if ((isset($_smarty_tpl->tpl_vars['showWebhookState']->value)) && $_smarty_tpl->tpl_vars['showWebhookState']->value) {?>
          <li class="pp__flex">
              <?php if ((isset($_smarty_tpl->tpl_vars['webhookState']->value)) && $_smarty_tpl->tpl_vars['webhookState']->value) {?>
                <i class="icon-check text-success"></i>
              <?php } else { ?>
                <i class="icon-remove text-danger"></i>
              <?php }?>
              <?php if ((isset($_smarty_tpl->tpl_vars['webhookStateMsg']->value))) {
echo $_smarty_tpl->tpl_vars['webhookStateMsg']->value;
}?>
          </li>
        <?php }?>
    </ul>
</div>



<?php }
}

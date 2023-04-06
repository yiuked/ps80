<?php
/* Smarty version 4.2.1, created on 2023-04-06 04:41:27
  from '/bitnami/prestashop/administration/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642eafe7a08aa6_59708371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10bef5cb04586fb91ee201821ee05b22a0714162' => 
    array (
      0 => '/bitnami/prestashop/administration/themes/new-theme/template/content.tpl',
      1 => 1680768963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642eafe7a08aa6_59708371 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}

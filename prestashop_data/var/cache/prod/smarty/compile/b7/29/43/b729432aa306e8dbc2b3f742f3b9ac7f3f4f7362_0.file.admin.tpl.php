<?php
/* Smarty version 4.2.1, created on 2023-04-06 04:29:26
  from '/bitnami/prestashop/modules/paypal/views/templates/admin/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642ead16530023_07250175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b729432aa306e8dbc2b3f742f3b9ac7f3f4f7362' => 
    array (
      0 => '/bitnami/prestashop/modules/paypal/views/templates/admin/admin.tpl',
      1 => 1680274280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642ead16530023_07250175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['isModeSandbox']->value)) && $_smarty_tpl->tpl_vars['isModeSandbox']->value) {?>
  <style>
    .page-head {
      background-color: #585757 !important;
    }

    .bootstrap .page-head .toolbarBox .btn-toolbar .toolbar_btn i {
      color: #fff !important;
    }

    .bootstrap .page-head ul.breadcrumb {
      color: #fff !important;
    }

    .bootstrap .page-head ul.page-breadcrumb li:before {
      color: #fff !important;
    }

    .bootstrap .page-head ul.page-breadcrumb li a {
      color: #fff !important;
    }

    .page-head .wrapper h1 {
      color: #fff !important;
    }

    .bootstrap .page-head .toolbarBox .btn-toolbar .toolbar_btn {
      color: #fff !important;
    }

    <?php if (version_compare($_smarty_tpl->tpl_vars['psVersion']->value,'1.7.4','<')) {?>

    .page-head .page-title {
      color: #fff !important;
    }

    .page-head .page-head-tabs a{
      color: #fff !important;
    }

    .page-head .page-head-tabs a.current{
      border-bottom: 3px solid #fff !important;
    }

    <?php }?>


  </style>
<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1300293289642ead1652ebf5_69086062', 'content');
?>


<?php }
/* {block 'content'} */
class Block_1300293289642ead1652ebf5_69086062 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1300293289642ead1652ebf5_69086062',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php }
}
}
/* {/block 'content'} */
}

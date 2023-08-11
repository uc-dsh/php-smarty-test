<?php
/* Smarty version 4.3.1, created on 2023-08-11 09:12:01
  from 'C:\xampp\htdocs\UCERTIFY\php-test\templates\question7.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d5df41eda951_26660533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b7e3966cea3a65b5ad990755c5520ada7fa48ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\php-test\\templates\\question7.tpl',
      1 => 1691737920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d5df41eda951_26660533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\php-test\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\php-test\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<h2>Lower Case</h2>
<p><b>String 1: </b><?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['str1']->value, 'UTF-8');?>
</p>
<p><b>String 2: </b><?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['str2']->value, 'UTF-8');?>
</p>
<br/>

<h2>Replace 'ucertify' with 'uCertify'</h2>
<p><b>String 1: </b><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['str1']->value,'ucertify','uCertify');?>
</p>
<p><b>String 2: </b><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['str2']->value,'ucertify','uCertify');?>
</p>
<br />

<h2>Wrapping Strings with 30 char</h2>
<p><b>String 1: </b><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['str1']->value,30,false);?>
</p>
<p><b>String 2: </b><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['str2']->value,30,false);?>
</p>
<br />

<h2>Merging Both Strings</h2>
<p><?php echo ($_smarty_tpl->tpl_vars['str1']->value).($_smarty_tpl->tpl_vars['str2']->value);?>
</p>
<?php }
}

<?php
/* Smarty version 4.3.1, created on 2023-08-08 08:50:55
  from 'C:\xampp\htdocs\UCERTIFY\php-test\templates\question7.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d1e5cfde5555_96780342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b7e3966cea3a65b5ad990755c5520ada7fa48ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\php-test\\templates\\question7.tpl',
      1 => 1691477451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d1e5cfde5555_96780342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\php-test\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\php-test\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_assignInScope('newStr1', smarty_modifier_truncate(smarty_modifier_replace(mb_strtolower((string) $_smarty_tpl->tpl_vars['str1']->value, 'UTF-8'),'ucertify','uCertify'),30,false));
$_smarty_tpl->_assignInScope('newStr2', smarty_modifier_truncate(smarty_modifier_replace(mb_strtolower((string) $_smarty_tpl->tpl_vars['str2']->value, 'UTF-8'),'ucertify','uCertify'),30,false));
echo ($_smarty_tpl->tpl_vars['newStr1']->value).($_smarty_tpl->tpl_vars['newStr2']->value);
}
}

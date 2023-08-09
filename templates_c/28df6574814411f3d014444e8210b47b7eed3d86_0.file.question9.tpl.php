<?php
/* Smarty version 4.3.1, created on 2023-08-08 09:04:21
  from 'C:\xampp\htdocs\UCERTIFY\php-test\templates\question9.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d1e8f54c0620_79452318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28df6574814411f3d014444e8210b47b7eed3d86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\php-test\\templates\\question9.tpl',
      1 => 1691478259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d1e8f54c0620_79452318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\php-test\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),1=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\php-test\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),));
echo smarty_function_html_checkboxes(array('options'=>$_smarty_tpl->tpl_vars['select']->value,'name'=>'check'),$_smarty_tpl);?>

<?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['select']->value,'name'=>'radio'),$_smarty_tpl);
}
}

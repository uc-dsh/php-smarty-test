<?php
/* Smarty version 4.3.1, created on 2023-08-08 08:08:19
  from 'C:\xampp\htdocs\UCERTIFY\php-test\templates\question1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d1dbd3780824_55741123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9f291ad0e14fd725f642e32303fb355b63c6cd7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\php-test\\templates\\question1.tpl',
      1 => 1691474897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d1dbd3780824_55741123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\php-test\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<select>
<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['select']->value),$_smarty_tpl);?>

</select><?php }
}

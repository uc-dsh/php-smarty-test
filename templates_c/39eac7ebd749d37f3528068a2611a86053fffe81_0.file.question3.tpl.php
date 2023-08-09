<?php
/* Smarty version 4.3.1, created on 2023-08-08 08:18:36
  from 'C:\xampp\htdocs\UCERTIFY\php-test\templates\question3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d1de3c706b58_43946852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39eac7ebd749d37f3528068a2611a86053fffe81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\php-test\\templates\\question3.tpl',
      1 => 1691475513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d1de3c706b58_43946852 (Smarty_Internal_Template $_smarty_tpl) {
?><table border=1>
<thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Pass</th>
    </tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['data']->value["name"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['data']->value["email"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['data']->value["pass"];?>
</td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table><?php }
}

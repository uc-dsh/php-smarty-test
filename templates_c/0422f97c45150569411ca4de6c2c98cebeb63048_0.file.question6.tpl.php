<?php
/* Smarty version 4.3.1, created on 2023-08-08 08:36:03
  from 'C:\xampp\htdocs\UCERTIFY\php-test\templates\question6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d1e252f3f608_03982697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0422f97c45150569411ca4de6c2c98cebeb63048' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\php-test\\templates\\question6.tpl',
      1 => 1691476557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d1e252f3f608_03982697 (Smarty_Internal_Template $_smarty_tpl) {
?><table border=1>
    <thead>
        <tr>
            <th>Fax</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Contacts']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value["fax"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value["email"];?>
</td>
                <td>
                    <p><b>Home : </b><?php echo $_smarty_tpl->tpl_vars['data']->value["phone"]["home"];?>
</p>
                    <p><b>Cell : </b><?php echo $_smarty_tpl->tpl_vars['data']->value["phone"]["cell"];?>
</p>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table><?php }
}

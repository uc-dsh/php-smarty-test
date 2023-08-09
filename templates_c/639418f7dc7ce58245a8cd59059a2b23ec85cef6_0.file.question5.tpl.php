<?php
/* Smarty version 4.3.1, created on 2023-08-08 09:14:35
  from 'C:\xampp\htdocs\UCERTIFY\php-test\templates\question5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d1eb5b7d8146_54074467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '639418f7dc7ce58245a8cd59059a2b23ec85cef6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\php-test\\templates\\question5.tpl',
      1 => 1691478869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d1eb5b7d8146_54074467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\php-test\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\php-test\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<table border=1>
    <thead>
        <tr>
            <th>Sr.no.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Pass</th>
        </tr>
    </thead>
    <tbody>
        <?php echo smarty_function_counter(array('start'=>0,'skip'=>1),$_smarty_tpl);?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
            <tr>
                <td><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</td>
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
    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
            <tr>
            <td><?php echo smarty_function_cycle(array('values'=>'odd, even'),$_smarty_tpl);?>
</td>
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

<?php
/* Smarty version 3.1.30, created on 2022-11-12 13:41:21
  from "C:\xampp\htdocs\06b-namespaces\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_636f947149f959_02801524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88b6038edb6795d530ca44d53723bfbffb0c057d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\06b-namespaces\\app\\views\\CalcView.tpl',
      1 => 1668256312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_636f947149f959_02801524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_620968770636f9471466a59_81918419', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1317605868636f947149f499_44824148', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_620968770636f9471466a59_81918419 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
stopka...<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1317605868636f947149f499_44824148 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2>Kalkulator kredytowy</h2>

<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
<fieldset>
		<table>
		<tr>
		<td>
		<label for="x">Kwota kredytu: </label>
		</td>
		<td>
		<input id="x" type="text" placeholder="kwota kredytu" name="x"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
">
		</td>
		</tr>
		<tr>
		<td>
		<label for="z">Ile lat spłaty: </label>
		</td>
		<td>
		<input id="z" type="text" placeholder="ilość lat spłaty" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
">
		</td>
		</tr>
		<tr>
		<td>
		<label for="y">Oprocentowanie: </label>
		</td>
		<td>
		<input id="y" type="text" placeholder="oprocentowanie" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
">
		</td>
		</tr>
		<tr>
		</fieldset>
		<td align="center" colspan="2">
		<button type="submit" class="pure-button">Oblicz</button></td></tr>
		</table>
		
</form>


<div class="messages">

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>


<?php
}
}
/* {/block 'content'} */
}

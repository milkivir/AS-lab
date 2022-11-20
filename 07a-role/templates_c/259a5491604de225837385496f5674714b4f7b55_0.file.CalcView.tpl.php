<?php
/* Smarty version 3.1.30, created on 2022-11-20 13:19:36
  from "C:\xampp\htdocs\07a-role\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_637a1b58da8e26_83798632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '259a5491604de225837385496f5674714b4f7b55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\07a-role\\app\\views\\CalcView.tpl',
      1 => 1668946296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_637a1b58da8e26_83798632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_914373562637a1b58da1fa0_86786326', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_246718674637a1b58da8ad7_14856761', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_914373562637a1b58da1fa0_86786326 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
stopka...<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_246718674637a1b58da8ad7_14856761 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">Wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Kalkulator</legend>
	<fieldset>
		<table>
		<tr>
		<td>
		<div class="pure-control-group">
		<label for="x">Kwota kredytu: </label>
		</td>
		<td>
		<input id="x" type="text" placeholder="kwota kredytu" name="x"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
"></div>
		</td>
		</tr>
		<tr>
		<td>
		<div class="pure-control-group">
		<label for="z">Ile lat spłaty: </label>
		</td>
		<td>
		<input id="z" type="text" placeholder="ilość lat spłaty" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
"></div>
		</td>
		</tr>
		<tr>
		<td>
		<div class="pure-control-group">
		<label for="y">Oprocentowanie: </label>
		</td>
		<td>
		<input id="y" type="text" placeholder="oprocentowanie" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
"></div>
		</td>
		</tr>
		<tr>
		<div class="pure-controls">
		<td align="center" colspan="2">
		<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/></div></td></tr>
		</table>
	</fieldset>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
<div class="messages info">
	Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

</div>
<?php }?>

</div>


<?php
}
}
/* {/block 'content'} */
}

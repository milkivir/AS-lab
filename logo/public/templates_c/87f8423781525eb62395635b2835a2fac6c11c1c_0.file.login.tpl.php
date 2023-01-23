<?php
/* Smarty version 3.1.33, created on 2023-01-21 23:21:28
  from 'C:\xampp\htdocs\logo\app\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63cc656853dbf6_97731804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87f8423781525eb62395635b2835a2fac6c11c1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\logo\\app\\views\\login.tpl',
      1 => 1674333295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63cc656853dbf6_97731804 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90092522163cc656851d319_74307527', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_90092522163cc656851d319_74307527 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_90092522163cc656851d319_74307527',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<div class="container">
						<div class="row">
							<div class="col-6">

								<!-- Logo -->
									<h1>Strona logowania</h1>



							</div>
						</div>
					</div>
				</section>

			<!-- Content -->
				<section id="content">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Main Content -->
									<section>
										<header>
											<h2>Wprowadź dane logowania:</h2>
										</header>
										<fieldset>
										<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="test-form">
										<table border=0>
											  <tr>
											  <td><label for="id_login"><span>Wpisz login:</span></label></td>
											  <td><input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/><p></td>
											  </tr>
											  <tr><td>
											  <label for="id_pass"><span>Wpisz hasło:</span></label></td>
											  <td><input id="id_pass" type="password" name="pass"/><p></td>
											  </tr>
											  </table><p>
											  <div><input type="submit" value="Zaloguj"></div>
										</form>
										</fieldset>
										<style>

									</section>	
							</div>
						</div>
					</div>
				</section>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}

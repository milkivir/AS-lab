<?php
/* Smarty version 3.1.33, created on 2023-01-22 13:55:54
  from 'C:\xampp\htdocs\logo\app\views\contacts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63cd325a861848_02881149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83e600c09ccf1f4bbaf1dad5f852cccc47715db0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\logo\\app\\views\\contacts.tpl',
      1 => 1674392149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63cd325a861848_02881149 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198778664463cd325a857cb2_17326562', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_198778664463cd325a857cb2_17326562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_198778664463cd325a857cb2_17326562',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Logo -->
									<h1><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'logo'),$_smarty_tpl ) );?>
" id="logo">Logopedia</a></h1>
								<!-- Nav -->
									<nav id="nav">
										<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'logo'),$_smarty_tpl ) );?>
">O projekcie</a>
										<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'exercises'),$_smarty_tpl ) );?>
">Zestawy zadań</a>
										<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'patients'),$_smarty_tpl ) );?>
">Pacjenci</a>
										<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'contacts'),$_smarty_tpl ) );?>
">Kontakty</a>
										<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="button-large">Wyloguj</a>
										</nav>

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
										<h2>Lista kontaktów</h2>
											</header>
										<p>
										<legend>Opcje wyszukiwania</legend>
											<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
contacts" class="test-form">
											<fieldset>
											  <input type="text" placeholder="nazwisko" name="sf_surname" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->surname;?>
" /><br />
											  <button type="submit" class="button-large">Filtruj</button>
										</fieldset>
										</form>	<p>
										
										<table id="tab_people2" width=500>
										<thead>
											<tr>
												<th>imię</th>
												<th>nazwisko</th>
												<th>email</th>
												<th>nr tel.</th>					
											</tr>
										</thead>
										<tbody>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people2']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
										<tr><td align=center><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td align=center><?php echo $_smarty_tpl->tpl_vars['p']->value["surname"];?>
</td><td align=center><?php echo $_smarty_tpl->tpl_vars['p']->value["email"];?>
</td><td align=center><?php echo $_smarty_tpl->tpl_vars['p']->value["phone"];?>
</td></tr>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</tbody>
										</table>
										<style>
									</section>

							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<div class="row">
							<div class="col-8 col-12-medium">

								<!-- Links -->
									<section>
										<h2>Ważne linki</h2>
										<div>
											<div class="row">
												<div class="col-3 col-12-small">
													<ul class="link-list last-child">
														<li><a href="#">Link 1</a></li>
														<li><a href="#">Link 2</a></li>
													</ul>
												</div>

												<div class="col-3 col-12-small">
													<ul class="link-list last-child">
														<li><a href="#">Link 3</a></li>
														<li><a href="#">Link 4</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</section>

							</div>
						</div>
					</div>
				</section>

			<!-- Copyright -->
				<div id="copyright">
					&copy; Logopedia. All rights reserved. | Design: <a href="http://html5up.net">HTML5 UP</a>
				</div>

		</div>

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

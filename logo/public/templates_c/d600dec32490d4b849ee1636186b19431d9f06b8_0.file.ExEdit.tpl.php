<?php
/* Smarty version 3.1.33, created on 2023-01-23 16:56:32
  from 'C:\xampp\htdocs\logo\app\views\ExEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63ceae307616d9_90883318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd600dec32490d4b849ee1636186b19431d9f06b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\logo\\app\\views\\ExEdit.tpl',
      1 => 1674489390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ceae307616d9_90883318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49101262063ceae3075adc0_40607941', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_49101262063ceae3075adc0_40607941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_49101262063ceae3075adc0_40607941',
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
							<div class="col-3 col-12-medium">

								<!-- Sidebar -->
									<section>
										<header>
											<h2>Grupy głosek:</h2>
										</header>
										<ul class="link-list">
											<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'wargowe'),$_smarty_tpl ) );?>
"}">Wargowe</a></li>
											<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'przednio'),$_smarty_tpl ) );?>
">Przedniojęzykowe</a></li>
											<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'srod'),$_smarty_tpl ) );?>
">Śródjęzykowe</a></li>
											<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'tylno'),$_smarty_tpl ) );?>
">Tylnojęzykowe</a></li>											
										</ul>
									</section>
							

							</div>
							<div class="col-9 col-12-medium imp-medium">

								<!-- Main Content -->
								
									<section>
									
									<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
exSave" method="post"  class="test-form">
										<fieldset>
											<legend>Dane zadania:</legend>
											<table><tr>
												<td align=center><label for="surname">grupa wiekowa</label>
												<input id="age" type="text" placeholder="grupa wiekowa" name="age" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->age;?>
"></td>
											
												<td align=center><label for="birthdate">głoska</label>
												<input id="sound" type="text" placeholder="głoska" name="sound" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->sound;?>
"></td>
											
												<td align=center><label for="linkex">link</label>
												<input id="linkex" type="text" placeholder="link" name="link" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->linkex;?>
"></td>
												</tr><tr><td>
												<input type="submit" class="button-large" value="Zapisz"/></td></tr>
												</table><p><center>
												<a class="button-large" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
exercises">Powrót</a></center>
											</div>
										</fieldset>
										<input type="hidden" name="idex" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idex;?>
">
									</form>	
									</div>







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

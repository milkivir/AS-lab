{extends file="main.tpl"}

{block name=content}

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
										<form action="{$conf->action_root}login" method="post" class="test-form">
										<table border=0>
											  <tr>
											  <td><label for="id_login"><span>Wpisz login:</span></label></td>
											  <td><input id="id_login" type="text" name="login" value="{$form->login}"/><p></td>
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

{/block}
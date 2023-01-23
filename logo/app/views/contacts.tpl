{extends file="main.tpl"}

{block name=content}

		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Logo -->
									<h1><a href="{url action='logo'}" id="logo">Logopedia</a></h1>
								<!-- Nav -->
									<nav id="nav">
										<a href="{url action='logo'}">O projekcie</a>
										<a href="{url action='exercises'}">Zestawy zadań</a>
										<a href="{url action='patients'}">Pacjenci</a>
										<a href="{url action='contacts'}">Kontakty</a>
										<a href="{$conf->action_root}logout" class="button-large">Wyloguj</a>
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
											<form action="{$conf->action_root}contacts" class="test-form">
											<fieldset>
											  <input type="text" placeholder="nazwisko" name="sf_surname" value="{$searchForm->surname}" /><br />
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
										{foreach $people2 as $p}
										{strip}
											<tr>
												<td align=center>{$p["name"]}</td>
												<td align=center>{$p["surname"]}</td>
												<td align=center>{$p["email"]}</td>
												<td align=center>{$p["phone"]}</td>
											</tr>
										{/strip}
										{/foreach}
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>


{/block}
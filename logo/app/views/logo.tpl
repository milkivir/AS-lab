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
					<div id="banner">
						<div class="container">
							<div class="row">
								<div class="col-6 col-12-medium">

									<!-- Banner Copy -->
										<p>Witaj w aplikacji pozwalajacej udostępniać ćwiczenia logopedyczne pacjentom.</p>
								</div>
								<div class="col-6 col-12-medium imp-medium">

									<!-- Banner Image -->
										<a href="#" class="bordered-feature-image"><img src="images/banner.jpg" alt="by npaszek" /></a>

								</div>
							</div>
						</div>
					</div>
				</section>

			<!-- Features 
				<section id="features">
					<div class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								<!-- Feature #1
									<section>
										<a href="#" class="bordered-feature-image"><img src="images/pic01.jpg" alt="" /></a>
										<h2>Welcome to Halcyonic</h2>
										<p>
											This is <strong>Halcyonic</strong>, a free site template
											by <a href="http://twitter.com/ajlkn">AJ</a> for
											<a href="http://html5up.net">HTML5 UP</a>. It's responsive,
											built on HTML5 + CSS3, and includes 5 unique page layouts.
										</p>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">  -->

								<!-- Feature #2 
									<section>
										<a href="#" class="bordered-feature-image"><img src="images/pic02.jpg" alt="" /></a>
										<h2>Responsive You Say?</h2>
										<p>
											Yes! Halcyonic is built to be fully responsive so it looks great
											at every screen size, from desktops to tablets to mobile phones.
										</p>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small"> -->

								<!-- Feature #3 
									<section>
										<a href="#" class="bordered-feature-image"><img src="images/pic03.jpg" alt="" /></a>
										<h2>License Info</h2>
										<p>
											Halcyonic is licensed under the <a href="http://html5up.net/license">CCA</a> license,
											so use it for personal/commercial use as much as you like (just keep
											our credits intact).
										</p>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small"> -->

								<!-- Feature #4
									<section>
										<a href="#" class="bordered-feature-image"><img src="images/pic04.jpg" alt="" /></a>
										<h2>Volutpat etiam aliquam</h2>
										<p>
											Duis neque nisi, dapibus sed mattis quis, rutrum accumsan sed. Suspendisse
											eu varius nibh. Suspendisse vitae magna mollis.
										</p>
									</section> -->

							<!-- </div>
						</div>
					</div>
				</section> -->

			<!-- Content -->
				<section id="content">
					<div class="container">
						<div class="row aln-center">
							<div class="col-4 col-12-medium">

								<!-- Box #1 -->
									<section>
										<header>
											<h2>Dodawaj własne zadania</h2>
											</header>
											<p>
											Masz możliwość stworzenia własnych ćwiczeń, zadań i gier w oparciu o swoje doświadczenie i udsostępnienia ich pacjonetom.
										</p>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Box #2 -->
									<section>
										<header>
											<h2>Korzystaj z wszystkich możliwości</h2>
										</header>
										<ul class="check-list">
											<li>przypisujesz zadania konkretnej osobie</li>
											<li>dodajesz swoje zadania</li>
											<li>widzisz czy pacjent wykonał zadanie</li>
										</ul>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Box #3 -->
									
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
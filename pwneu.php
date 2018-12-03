
<?php
include_once 'autopw.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
            <title>Passwort neu setzen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
                                                                    <span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Neues Passwort anfordern</span>
								</a>
						</div>
					</header>


				<!-- Main -->
					<div id="main">
						<div class="inner">
                                                    <h1>Bitte geben sie ihre E-Mail Adresse an</h1>
                                                        
                                                    <div class=" pwneubox">
                                                      <form name="pwneu" action="autopw.php" method="post">
                                                          <input  type="text" name="pwemail" id="pwemail" value=""  placeholder="Ihre E-Mail Adresse" tabindex="1" maxlength="64" />
                                                          <label  id="msgemail"></label>
                                                          <br>
                                                        <span class="loginbutton">
                                                            <input id="submit "type="submit" name="submit" value="Senden" class="primary" tabindex="3"/>
                                                            <input type="reset" value="Reset" tabindex="4" />
                                                        </span>
                                                      </form>
                                                        <span class="loginlink"><a href="index.php"><b>Abbrechen</b></a></span>
                                                    </div>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Kontakt</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
										<div class="field">
											<textarea name="message" id="message" placeholder="Message"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="primary" /></li>
									</ul>
								</form>
							</section>
							
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design:Lars Lutz</li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
                        <script src="assets/js/formpwverg.js"></script>

	</body>
</html>


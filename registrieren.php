<!DOCTYPE HTML>

<html>
	<head>
            <title>Registrieren</title>
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
								<a href="index.html" class="logo">
                                                                    <span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Registrieren</span>
								</a>

							

						</div>
					</header>


				<!-- Main -->
					<div id="main">
						<div class="inner">
                                                    <h1>Geben sie Bitte ihre Daten ein.</h1>
                                                        
                                                    <div class=" regbox">
                                                        <form name="login" action="reg.php" method="post">
                                                          <input type="text" name="usernr" id="usernr" value=""  placeholder="Anmelde Nummer" tabindex="1" maxlength="8" />
                                                        <br>
                                                        <input type="password" name="regpassword" id="regpassword" value="" placeholder="Passwort" tabindex="2" />
                                                        <br>
                                                        <input type="password" name="regpasswordag" id="regpasswordag" value="" placeholder="Passwort" tabindex="3" />
                                                        <br>
                                                        <input type="text" name="usermail" id="usermail" value=""  placeholder="E-Mail" tabindex="1" maxlength="64" tabindex="4" />
                                                        <br>
                                                        <span class="loginbutton">
                                                            <input type="submit" name="submit" value="Registrieren" class="primary" tabindex="5"/>
                                                            <input type="reset" value="Reset" tabindex="6" />
                                                        </span>
                                                      </form>
                                                        <span class="loginlink"><a href="loginseite.php"><b>Zur&uumlck</b></a></span>
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

	</body>
</html>



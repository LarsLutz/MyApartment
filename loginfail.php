<!DOCTYPE HTML>

<html>
	<head>
            <title>Login felgeschlagen</title>
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
                                                                    <span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Login MyApartment</span>
								</a>

							

						</div>
					</header>


				<!-- Main -->
					<div id="main">
						<div class="inner">
                                                    <h1>Login fehlgeschlagen</h1>
                                                        
                                                    <div class=" loginbox">
                                                      <form name="login" action="login.php" method="post">
                                                        <label for="autologin" font-color="red"><b>Username oder Passwort sind falsch!</b></label>
                                                        <input type="text" name="loginname" id="loginname" value="" placeholder="Loginname" tabindex="1" />
                                                        <input type="password" name="password" id="passwordname" value="" placeholder="Passwort" tabindex="2" />
                                                        <input type="checkbox" id="demo-copy" name="demo-copy" tabindex="5">
                                                        <label for="autologin"><b>Autologin</b></label>
                                                        <input type="submit" value="Login!" class="primary" tabindex="3"/>
							<input type="reset" value="Reset" tabindex="4" />
                                                      </form>
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


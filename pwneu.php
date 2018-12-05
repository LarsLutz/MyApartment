

<!DOCTYPE HTML>
<html>
	<head>
            <title>Passwort neu setzen</title>
		<meta charset="utf-8" />
                <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
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
                                                                <form method="post" action="mail.php">
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
										 <li><input  name="mailsend" id="mailsend" type="submit" value="Senden" class="primary" /></li>
									</ul>
								</form>
							</section>
                                                    <section>

                        <ul class="icons">
                            <li><a href="tel:+41627728069" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
                            <li><a href="mailto:admin.bclaufen.ch" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
                        </ul>
                    </section>
							
							<ul class="copyright">
								<li>&copy; FHNW 2018. All rights reserved</li><li>Design:Eduart Bunjaku, Robin Widmer, Lars Lutz</li>
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


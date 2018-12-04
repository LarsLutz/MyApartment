<?php
include "isuser.php";
include 'db.php';
include "autologout.php";
?>


<!DOCTYPE HTML>

<html>
    <head>
        <title>Mietrechnung</title>
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
                        <span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">MyApartment</span>
                    </a>

                    <!-- Nav -->
                    <nav>
                        <ul>
                            <li><a href="#menu">Menu</a></li>
                        </ul>
                    </nav>

                </div>
            </header>

            <!-- Menu -->
            <nav id="menu">
                <h2>Menu</h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="mieterspiegel.php">Mieterspiegel</a></li>
                    <li><a href="nebenkosten.php">Nebenkosten</a></li>
                    <li><a href="newsseite.php">News</a></li>
                    <li><a href="mietrechnung.php">Mietrechnung</a></li>
                    <li><a href="hausordnung.pdf">Hausordnung</a></li>
                    <li><a href="userconf.php">Einstellungen</a></li>
                    <li><a href="logout.php"><b>Logout</b></a></li>
                </ul>
            </nav>

            <!-- Main -->
            <div id="main">
                <div class="inner">
                    <h1>Mietrechnung</h1>
                    <span class="image main"><img alt="" /></span>
                    <div class="table-wrapper">



                        <table>
                            <thead>
                                <tr>
                                    <th>Monat</th>
                                    <th>offen/bezahlt</th>
                                    <th>Betrag</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include_once 'mietrechnung_sql.php' ?>

                            </tbody>

                        </table>
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
                                    <textarea name="message" id="message" placeholder="Nachricht"></textarea>
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

    </body>
</html>

<?php
include_once 'dbclose.php';
$_SESSION['ErrorMSG1'] = "";
$_SESSION['ErrorMSG2'] = "";
$_SESSION['ErrorMSG3'] = "";
?>
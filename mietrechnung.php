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
                        <span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">MyApartement</span>
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
                    <li><a href="test.php">Ipsum veroeros</a></li>
                    <li><a href="test.php">Tempus etiam</a></li>
                    <li><a href="test.php">Consequat dolor</a></li>
                    <li><a href="elements.php">Elements</a></li>
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
                    <section>
                        <h2>Follow</h2>
                        <ul class="icons">
                            <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
                            <li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
                            <li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
                        </ul>
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

<?php
include_once 'dbclose.php';
$_SESSION['ErrorMSG1']="";
$_SESSION['ErrorMSG2']="";
$_SESSION['ErrorMSG3']="";
?>
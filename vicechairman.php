<!-- Developed by Saurav Bajracharya and Pramesh Bajracharya -->


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="shortcut icon" href="bvc.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="animate.css">
    <script type="text/javascript" src="date_time.js"></script>


</head>

<?php
		include "functions.php";
		create();
?>

    <body>
        <div class="topDiv">
            <div class="imageLeft">
                <img src="round.png" />
            </div>
            <div id="asideCont">
                <h1>बोनम  वेंकटा  चालामाया इंजीनियरिंग महाविध्यालय
</h1>
                <h2>Bonam Venkata Chalamayya Engineering College,<br> Odalarevu</h2>
                <h3>Affiliated To  JNTUK, Kakinada</h3> Accredited By NBA New Delhi and NAAC With 'A' Grade<br> Approved By AICTE, New Delhi<br> Established in 1997<br><br>

            </div>
            <div class="imageRight">
                <img src="group.png" /><br><br>
                <span id="date_time"></span>
                <script type="text/javascript">
                    window.onload = date_time('date_time');

                </script>
            </div>
        </div>
        <div class="clear"></div>

        <div id="main" role="main">
            <center>
                <ul class="menu">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="About.php">About Us</a></li>
                    <li><a href="vision.php">Vision &amp; Mission</a></li>
                    <li><a href="#">Management</a>

                        <ul class="submenu">
                            <li><a href="founderchairman.php">Founder-Chairman</a></li>
                            <li><a href="secretary.php">Secretary</a></li>
                            <li><a href="chairman.php">Chairman</a></li>
                            <li><a href="vicechairman.php">Vice-Chairman</a></li>

                        </ul>
                    </li>
                    <li><a href="principal.php">Principal</a></li>
                    <li><a href="#">Faculty</a>
                        <ul class="submenu1">
                            <li><a href="#">CSE</a></li>
                            <li><a href="#">CE</a></li>
                            <li><a href="#">ME</a></li>
                            <li><a href="#">EEE</a></li>
                            <li><a href="#">ECE</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php">Students</a></li>
                    <li><a href="#"> Departments</a>
                        <ul class="submenu1">
                            <li><a href="Department.php">CSE</a></li>
              
                            <li><a href="civil.php">CE</a></li>
                            <li><a href="mech.php">ME</a></li>
                            <li><a href="eee.php">EEE</a></li>
                            <li><a href="ece.php">ECE</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Accredition</a>
                        <ul class="submenu1">
                            <li><a href="naac.php">NAAC</a></li>
                            <li><a href="nba.php">NBA</a></li>
                            <li><a href="pio.php">PIO</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Help</a></li>

                </ul>
                <div class="bodyDiv">
                    <div class="forAside">
                        <aside id="buttonsAside">
                            <form class="navBar">
                                <nav id="navigationBar">
                                    <ul class="sideBar" style="margin-left:-25%;">
                                        <li><a href="acadamic.php">Academics</a></li>
                                        <li><a href="#">Administration</a></li>
                                        <li><a href="#">BVC News</a></li>
                                        <li><a href="#">Forthcoming Event</a></li>
                                <li><a href="emailnew.php">E-mail to students</a></li>
                                        <li><a href="#">SMS to Parents/Students</a></li>
                                        <li><a href="#">Recruitment</a></li>
                                        <li><a href="#">Professional Body</a></li>
                                        <li><a href="#">Projects</a></li>
                                        <li><a href="#">Department Library</a></li>
                                        <li><a href="#">Training</a></li>
                                        <li><a href="#">Games And Sports</a></li>
                                        <li><a href="#">Placement</a></li>
                                <li><a href="feedback.php">Feedback to College</a></li>
                                        <li><a href="alumini.php">Alumini</a></li>
                                        <li><a href="#">Notices &amp; Circulars</a></li>
                                    </ul>
                                </nav>
                            </form>
                        </aside>
                    </div>
                    <div class="centralDiv">
                        <br>
                        <br>
                        <h2>The Vice Chairman</h2>
                        <img src="picsPage/viceChairman.png" style="width:400px; height:250px;">
                        <h3>Mr. Bonam Krishna Satish</h3>
                    </div>
                </div>
            </center>
        </div>
        <footer id="footer">
            <h4 id="left">Copyright &copy;</h4>
            <h4 id="right">BVCEC</h4>
        </footer>
    </body>

</html>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <script type="text/javascript" src="date_time.js"></script>
</head>

<body>
    <div class="topDiv">
        <div class="imageLeft">
            <img src="round.png" />
        </div>
        <div id="asideCont">
            <h2>BVC Engineering College, Odalarevu</h2>
            <h3>Affiliated To  JNTUK, Kakinada</h3> Accredited By NBA New Delhi and NAAC With 'A' Grade<br> Approved By AICTE, New Delhi<br> Established in 1997<br><br>
        </div>
        <div class="imageRight">
            <span id="date_time"></span>
            <script type="text/javascript">
                window.onload = date_time('date_time');

            </script>
            <img src="group.png" />
        </div>
    </div>
    <div class="clear"></div>
<center>
                <ul class="menu">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="About.php">About Us</a></li>
                    <li><a href="vision.php">Vision &amp; Mission</a></li>
                    <li><a href="st_table.php">Management</a>

                        <ul class="submenu">
                            <li><a href="founderchairman.php">Founder-Chairman</a></li>
                            <li><a href="secretary.php">Secretary</a></li>
                            <li><a href="chairman.php">Chairman</a></li>
                            <li><a href="vicechairman.php">Vice-Chairman</a></li>
                        </ul>
                    </li>
                    <li><a href="principal.php">Principal</a></li>
                    <li><a href="st_table.php">Faculty</a>
                        <ul class="submenu1">
                            <li><a href="st_table.php">CSE</a></li>
                            <li><a href="cest.php">CE</a></li>
                            <li><a href="mest.php">ME</a></li>
                            <li><a href="eeest.php">EEE</a></li>
                            <li><a href="ecest.php">ECE</a></li>
                        </ul>
                    </li>
            
                    <li><a href="st_table.php"> Departments</a>
                        <ul class="submenu1">
                            <li><a href="Department.php">CSE</a></li>
                            <li><a href="civil.php">CE</a></li>
                            <li><a href="mech.php">ME</a></li>
                            <li><a href="eee.php">EEE</a></li>
                            <li><a href="ece.php">ECE</a></li>
                        </ul>
                    </li>
                    <li><a href="st_table.php">Accredition</a>
                        <ul class="submenu1">
                            <li><a href="naac.php">NAAC</a></li>
                            <li><a href="nba.php">NBA</a></li>
                            <li><a href="pio.php">PIO</a></li>
                        </ul>
                    </li>
                    <li><a href="help.php">Help</a></li>

                </ul>
            </center>

<body>
        <br>
        <br>
    <header><h1 align="center" style="color: dimgray"><u>Student Details Information</u></h1></header>
    <div id="bodyMain">
        <?php
			include "functions.php";
			stu_table();
        ?>
    </div>
</body>
</html>

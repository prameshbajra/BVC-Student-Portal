
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Student Details Information.</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleDetails.css">
    <link rel="stylesheet" href="animate.css">

    <script type="text/javascript" src="date_time.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="bvc.png" type="image/x-icon" />


</head>

<body>

    <div class="topDiv">
        <div class="imageLeft">
            <img src="round.png" />
        </div>
        <div id="asideCont">
            <h2>BVC Engineering College, Odalarevu</h2>
            <h3>Affiliated To  JNTUK, Kakinada</h3> Accredited By NBA New Delhi and NAAC With 'A' Grade<br> Approved By AICTE, New Delhi<br> Established in 1997
        </div>
        <div class="imageRight">
            <img src="group.png" />
        </div> <span id="date_time"></span>
            <script type="text/javascript">
                window.onload = date_time('date_time');

            </script>
    </div>
    <div class="clear"></div>
<ul class="menu">
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="About.php">About Us</a></li>
        <li><a href="vision.php">Vision &amp; Mission</a></li>
        <li><a href="asd.php">Management</a>

            <ul class="submenu">
                <li><a href="founderchairman.php">Founder-Chairman</a></li>
                <li><a href="secretary.php">Secretary</a></li>
                <li><a href="chairman.php">Chairman</a></li>
                <li><a href="vicechairman.php">Vice-Chairman</a></li>

            </ul>
        </li>
        <li><a href="#">Principal</a></li>
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
                        <ul class="sideBar">
                            <li><a href="#">Attenance</a></li>
							
                            <li><a href="#">Mid_Marks</a></li>
							
                            <li><a href="#">1-1 Semester</a></li>
                            <li><a href="#">1-2 Semester</a></li>
                            <li><a href="#">2-1 Semester</a></li>
                            <li><a href="#">2-2 Semester</a></li>
                            <li><a href="#">3-1 Semester</a></li>
                            <li><a href="#">3-2 Semester</a></li>
                            <li><a href="#">4-1 Semester</a></li>
                            <li><a href="#">4-2 Semester</a></li>
                            
                        <li><a href="#">Forthcoming Event</a></li>
                                
                            <li><a href="#">Notices &amp; Circulars</a></li>
                        </ul>
                    </nav>
                </form>
            </aside>
        </div>
        <div id="bodyMain">
            <br>
            <br>
            <form action="registrationPage.php" method="POST" class="form form--login">
                <?php
            	include "functions.php";
				details();
            ?>
            </form>
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <script type="text/javascript" src="date_time.js"></script>

</head>
<?php
    if(isset($_POST["submit"]))
	{
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$emailRegd = "pe.messh@gmail.com";
		$from = "FROM: bvcec@org ";    // Additional details here if needed ...
		// $selectQuery = "Select email FROM info WHERE roll_no = $emailRegd";
		// mail($selectQuery,$subject,$message,$from) or die("There 1".mysql_error());
		mail($emailRegd,$subject,$message,$from) or die("Here 2".mysql_error());
	}
?>

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

                <img src="group.png" />
                <span id="date_time"></span>
                <script type="text/javascript">
                    window.onload = date_time('date_time');

                </script>
            </div>
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
            <div class="forAside" style="margin-top:-7px;">
                <aside id="buttonsAside">
                    <form class="navBar">
                        <nav id="navigationBar">
                            <ul class="sideBar">
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

            <center>
                <div class="container">
                    <form action="feedback.php" method="post" class="formFeed">
                        <h3>Subject of Your Feedback</h3><br>
                        <textarea name="subject" value="" style="width:90%;border:1px solid black;" required></textarea><br><br><br>
                        <h3>Message</h3><br>
                        <textarea name="message" cols="100" rows="10"></textarea><br><br><br>
                        <input type="submit" name="submit" value="Send" id="submitButton" required/>
                    </form>
                </div>
            </center>
        </div>
        <footer id="footer">
            <h4 id="left">Copyright &copy; - <?php echo "20".date('y');?></h4>
            <h4 id="right">BVCEC</h4>
        </footer>
    </body>

</html>

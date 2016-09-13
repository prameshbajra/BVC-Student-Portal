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
                <h2>BVC Engineering College, Odalarevu</h2>
                <h3>Affiliated To  JNTUK, Kakinada</h3> Accredited By NBA New Delhi and NAAC With 'A' Grade<br> Approved By AICTE, New Delhi<br> Established in 1997

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

        <div id="main" role="main">
            <center>
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
                    <li><a href="#">Faculty</a></li>
                    <li><a href="stlo.php">Students</a></li>
                    <li><a href="Department.php"> Departments</a>
                        <ul class="submenu">
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
                    <li><a href="help.php">Help</a></li>

                </ul>
                <div class="bodyDiv">
                    <div class="forAside">
                        <aside id="buttonsAside">
                            <form class="navBar">
                                <nav id="navigationBar">
                                    <ul class="sideBar" style="margin-left:-90px;">
                                        <li><a href="acadamic.php">Academics</a></li>
                                        <li><a href="administration.php">Administration</a></li>
                                        <li><a href="bvcnews.php">BVC News</a></li>
                                        <li><a href="forthcoming.php">Forthcoming Event</a></li>
                                <li><a href="emailnew.php">E-mail to students</a></li>
                                        <li><a href="sms.php">SMS to Parents/Students</a></li>
                                        <li><a href="recuriment.php">Recruitment</a></li>
                                        <li><a href="proffesional.php">Professional Body</a></li>
                                        <li><a href="project.php">Projects</a></li>
                                        <li><a href="deplib.php">Department Library</a></li>
                                        <li><a href="training.php">Training</a></li>
                                        <li><a href="games.php">Games And Sports</a></li>
                                        <li><a href="placements.php">Placement</a></li>
                                <li><a href="feedback.php">Feedback to College</a></li>
                                        <li><a href="alumini.php">Alumini</a></li>
                                        <li><a href="notice.php">Notices &amp; Circulars</a></li>
                                    </ul>
                                </nav>
                            </form>
                        </aside>
                    </div>
                    <div class="centralDiv">
                        <br>

                        <center>
                            <div class="loginForm">
                                <form action="al.php" method="POST" class="form form--login">
                                    <br>
                                    <h2>WELCOME TO ALUMINI LOGIN PAGE</h2>
                                    <br>
                                    <br>
                                    <div class="form__field">
                                        <label>Username</label>
                                        <input id="login__username" type="text" class="form__input" placeholder="" name="username" required>
                                    </div>

                                    <div class="form__field">
                                        <label>Password</label>
                                        <input id="login__password" type="password" class="form__input" placeholder="" name="password" required>
                                    </div>
                                    <div class="form__field__signup">
                                        <input type="submit" name="commit" value="Sign In">
                                    </div>
                                </form>
                                <br>
                                <p class="text--center">New user?<a href="reg.php" style="color:black;"> Please Register here ...  </a> <span class="fontawesome-arrow-right"></span></p>
                            </div>
                        </center>
                    </div>

                    <div class="asideRight">
                        <p>.</p>
                    </div>


                </div>
                <footer id="bottom-part">
                    <p class="newFooter"> Copyright &copy; -2016</p>
                    <p class="newFoot">BVC Engineering College @ CSE</p>

                </footer>
            </center>
        </div>
    </body>

</html>


<?php
error_reporting(0);
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
if(isset($_POST['commit'])){
	
	mysql_connect("localhost","root","");
	mysql_select_db("ex");
	$query=mysql_query("select * from al");
	while($row=mysql_fetch_array($query)){
		
		$r=$row['username'];
		$b=$row['password'];
			}
	if($username==$r && $password==$b)
	{
		//echo"Welcome Sucessfully Login";
		echo"
		<script language='javascript'>;
		window.location.href='alw.php';
		</script>
		

		
		";
	}
	else{
		
		echo "Something Wrong Check Username & Password";
		
	}
}

?>

    </html>

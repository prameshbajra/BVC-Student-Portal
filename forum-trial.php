<html lang="en">

<head>
      
        <script type="text/javascript" src="date_time.js"></script>

    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="shortcut icon" href="bvc.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="animate.css">

</head>


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
                <img src="group.png" />
				
				
            </div>
        
		
				</br></br>
				
            <span id="date_time"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>
		
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
                            <li><a href="#">CSE</a></li>
                            <li><a href="#">CE</a></li>
                            <li><a href="#">ME</a></li>
                            <li><a href="#">EEE</a></li>
                            <li><a href="#">ECE</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Principal</a></li>
                    <li><a href="#">Faculty</a></li>
                    <li><a href="stlo.php">Students</a></li>
                    <li><a href="Department.php"> Departments</a>
                        <ul class="submenu">
                            <li><a href="#">CSE</a></li>
                            <li><a href="#">CE</a></li>
                            <li><a href="#">ME</a></li>
                            <li><a href="#">EEE</a></li>
                            <li><a href="#">ECE</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Accredition</a>
                        <ul class="submenu">
                            <li><a href="#">CSE</a></li>
                            <li><a href="#">CE</a></li>
                            <li><a href="#">ME</a></li>
                            <li><a href="#">EEE</a></li>
                            <li><a href="#">ECE</a></li>
                        </ul>
                    </li>
                    <li><a href="help.php">Help</a></li>

                </ul>
                <div class="bodyDiv">
                    <div class="forAside">
                        <aside id="buttonsAside">
                            <form class="navBar">
                                <nav id="navigationBar">
                                    <ul class="sideBar">
                                        <li><a href="acadamic.php">Academics</a></li>
                                        <li><a href="administration.php">Administration</a></li>
                                        <li><a href="bvcnews.php">BVC News</a></li>
                                        <li><a href="forthcoming.php">Forthcoming Event</a></li>
                                        <li><a href="sms.php">SMS to Parents/Students</a></li>
                                        <li><a href="recuriment.php">Recruitment</a></li>
                                        <li><a href="proffesional.php">Professional Body</a></li>
                                        <li><a href="project.php">Projects</a></li>
                                        <li><a href="deplib.php">Department Library</a></li>
                                        <li><a href="training.php">Training</a></li>
                                        <li><a href="games.php">Games And Sports</a></li>
                                        <li><a href="placements.php">Placement</a></li>
                                        <li><a href="feedback.php">Feedback to College</a></li>
                                        <li><a href="al.php">Alumini</a></li>
                                        <li><a href="notice.php">Notices &amp; Circulars</a></li>
                                    </ul>
                                </nav>
                            </form>
                        </aside>
                    </div>
                    <div class="centralDiv">
			
<?PHP
	$con = mysql_connect("localhost","id435190_bvcecweb99999999","bvcecweb99999999");
    $create = "CREATE DATABASE id435190_info";
    $create_db = mysql_query($create);
    $db_name = "id435190_info";
    $select = mysql_select_db($db_name,$con);
    $create_table1 = "CREATE TABLE forum
                    (feild1 text,
                    name text,
					time timestamp
                    );";
					
	?>
			
	<?php
$con =mysqli_connect("localhost","id435190_bvcecweb99999999","bvcecweb99999999");
mysqli_select_db($con,"id435190_info");
	$feild1=$_POST['feild1'];
	$name=$_POST['name'];
	$sql="INSERT INTO forum(
		feild1,name)
		VALUES('$feild1','$name');";
	$result1 = mysqli_query($con,$sql) or die(mysqli_error($con));
	echo "entered";
    mysqli_close($con);
?>
				
						
<?php
	$con =mysqli_connect("localhost","id435190_bvcecweb99999999","bvcecweb99999999");
    mysqli_select_db($con,"id435190_info");
    $result = mysqli_query($con,"SELECT * FROM forum");
	echo "<table border=2>";
    while($row = mysqli_fetch_array($result))
    {
		echo "<tr><td>".$row['feild1']."</td><td>".$row['name']."</td><td>".$row['time']."</td></tr>"; 
    }

	echo "</table>";
	

    mysqli_close($con);
?>
	<form action="forum-trial.php" method="POST">
	<input type="text" name="feild1" required>
	<input type="text" name="name" value="Annonymous">
	<input type="submit" value="submit">
	</form>
					
					</div>
				</div>
			</center>
		</div>	
	</body>
</html>
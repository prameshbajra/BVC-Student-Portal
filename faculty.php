<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="shortcut icon" href="bvc.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="styleDetails.css">


</head>



<body>
    <div class="topDiv">
        <div class="imageLeft">
            <img src="round.png" />
        </div>
        <div id="asideCont">
            <h2>BVC Engineering College, Odalarevu</h2>
            <h3>Affiliated To  JNTUK, Kakinada</h3> Accredited By NBA New Delhi and NAAC With 'A' Grade<br> Approved By AICTE, New Delhi<br> Established in 1997<br><br>
            <?php
                echo "Today's Date : ".date("Y/m/d")." And Time ".date("h:i")."<br><br>";
            ?>
        </div>
        <div class="imageRight">
            <img src="group.png" />
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
                                            <li><a href="dean.php">Dean</a></li>

            </ul>
        </li>
        <li><a href="principal.php">Principal</a></li>
        <li><a href="faculty.php">Faculty</a>
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
                <li><a href="#">CE</a></li>
                <li><a href="#">ME</a></li>
                <li><a href="#">EEE</a></li>
                <li><a href="#">ECE</a></li>
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
                            <li><a href="#">Academics</a></li>
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
                            <li><a href="#">Alumini</a></li>
                            <li><a href="#">Notices &amp; Circulars</a></li>
                        </ul>
                    </nav>
                </form>
            </aside>
        </div>
        <?php
            $con =mysqli_connect("localhost","root","bveecskrv");
    mysqli_select_db($con,"info");
   /* $flag=0;
	$temp=0;
    $uname=$_POST['uname'];
    $pwd=$_POST['pwd'];*/
    $result = mysqli_query($con,"SELECT * FROM profiles");
            echo "<p style='float:right;'>Welcome to</p> ";
                echo "<table border='0' cellspacing='30px'><br>";
			//$temp=$row['roll_no'];
            echo "<tr><th> Name of Faculty</td><td>". "</td></tr>";
            echo "<tr><th> DOB</td><td>" . "</td></tr>";
            echo "<tr><th> DOJ</td><td>" . "</td></tr>";
            echo "<tr><th> Father's Name</td><td>" ."</td></tr>";
            echo "<tr><th> Address</td><td>" .  "</td></tr>";
            echo "<tr><th> Email ID</td><td>" .  "</td></tr>";
            echo "<tr><th> Mobile No.</td><td>" . "</td></tr>";
            echo "<tr><th> Aadhaar Id</td><td>" .  "</td></tr>";
            echo "<tr><th> Gender</td><td>" . "</td></tr>";
            echo "<tr><th> Nationality</td><td>" .  "</td></tr>";
            echo "<tr><th> Caste</td><td>" . "</td></tr>";
            echo "<tr><th> Qualification</td><td>" .  "</td></tr>";
            echo "<tr><th> Specialization</td><td>" . "</td></tr>";
            echo "</table>";
            echo "<img src = ''>";
   
            //Table Btech marks starts from here ...

            echo "<br><br><p id='achievements'><u>Experience</u></p>";

            //Table Btech end ...

            echo "<table border='0' cellspacing='30px'><br>";
            echo "<tr><th>Member of Professional Society </td><td>"."</td></tr>";
            echo "<tr><th>Hobbbies </td><td>"."</td></tr>";
            echo "<tr><th>Subject Taught </td><td>"."</td></tr>";
            echo "<tr><th>Labs Handled </td><td>"."</td></tr>";
            echo "</table>";

            //Table academiics starts ....

 echo "
<table class='tg'>"; echo "
    <tr>"; echo "
        <td class='tg1'></td>"; echo "
        <td class='tg1'>Year</td>"; echo "
        <td class='tg2'>Month</td>"; echo "</tr>"; echo "
    <tr>"; echo "
        <td class='tg1'>Teaching</td>"; echo "
        <td class='tg2'> </td>"; echo "
        <td class='tg1'></td>"; echo "
        <tr>"; echo "
            <td class='tg1'>Industry</td>"; echo "
            <td class='tg2'> </td>"; echo "
            <td class='tg1'> </td>"; echo "</tr>"; echo "</table>";            echo "<br><br><p id='achievements'><u>Teaching</u></p>";
            echo "<table class = 'tg'>";
            echo "<tr>";
            echo "<td class='tg1'>Attended FDP</td>";
            echo "<td class='tg2'>Workshop</td>";
            echo "<td class='tg2'>Semenars</td>";
        echo "</tr>";
            echo "<td class='tg2'>Guest Lectures</td>";
            echo "<td class='tg2'>Delievered Guest Lectures</td>";
            echo "<td class='tg2'>Worked As Resource Person : NC/IC/WS/GL/FDP</td>";
         echo "<td class='tg1'>Publications</td>";
            echo "<td class='tg2'>IJ</td>";
            echo "<td class='tg2'>NJ</td>";
            echo "<td class='tg2'>NC</td>";
            echo "<td class='tg2'>IC</td>";
          
            echo "</tr>";
            echo "<tr>";
            echo "<td class='tg3'>1st</td>";
            echo "<td class='tg3'>"."</td>";
            echo "<td class='tg3'>"."</td>";
            echo "<td class='tg3'>"."</td>";
            echo "<td class='tg3'>"."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class='tg3'>2nd</td>";
            echo "<td class='tg3'>"."</td>";
            echo "<td class='tg3'>"."</td>";
            echo "<td class='tg3'>"."</td>";
            echo "<td class='tg3'>"."</td>";
            echo "</tr>";
            echo "</table>";
           /* echo "<p id='achievements'><u>Achievements</u></p>";
            echo "<table class='tg'>";
            echo "<tr>";
            echo "<td class='tg1'>Academic </td>";
            echo "<td class='tg2'>Curricular</td>";
            echo "<td class='tg2'>Co-curricular</td>";
            echo "<td class='tg2'>ExtraCurricular</td>";
            echo "<td class='tg2'>Others</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class='tg3'>".$row['academics1']."</td>";
            echo "<td class='tg3'>".$row['curricular1']."</td>";
            echo "<td class='tg3'>".$row['co_curricular1']."</td>";
            echo "<td class='tg3'>".$row['extra_curricular1']."</td>";
            echo "<td class='tg3'>".$row['others1']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class='tg2'>".$row['academics2']."</td>";
            echo "<td class='tg2'>".$row['curricular2']."</td>";
            echo "<td class='tg2'>".$row['co_curricular2']."</td>";
            echo "<td class='tg2'>".$row['extra_curricular2']."</td>";
            echo "<td class='tg2'>".$row['others2']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class='tg2'>".$row['academics3']."</td>";
            echo "<td class='tg2'>".$row['curricular3']."</td>";
            echo "<td class='tg2'>".$row['co_curricular3']."</td>";
            echo "<td class='tg2'>".$row['extra_curricular3']."</td>";
            echo "<td class='tg2'>".$row['others3']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class='tg2'>".$row['academics4']."</td>";
            echo "<td class='tg2'>".$row['curricular4']."</td>";
            echo "<td class='tg2'>".$row['co_curricular4']."</td>";
            echo "<td class='tg2'>".$row['extra_curricular4']."</td>";
            echo "<td class='tg2'>".$row['others4']."</td>";
            echo "</tr>";
            echo "</table>";*/
            ?>

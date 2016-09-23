<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <script type="text/javascript" src="date_time.js"></script>
    <style>
        #cust {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 70%;
            margin-top:0px;
        }
        
        #cust td,
        #cust th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        
        #cust tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        #cust tr:hover {
            background-color: #ddd;
        }
        
        #cust th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: burlywood;
            color: white;
        }

    </style>
</head>

<body>
    <div class="topDiv">
        <div class="imageLeft">
            <img src="round.png" />
        </div>
        <div id="asideCont">
            <h2>BVC Engineering College, Odalarevu</h2>
            <h3>Affiliated To JNTUK, Kakinada</h3> Accredited By NBA New Delhi and NAAC With 'A' Grade<br> Approved By AICTE, New Delhi<br> Established in 1997<br><br>

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
                <li><a href="st_table.php">CSE</a></li>
                <li><a href="#">CE</a></li>
                <li><a href="#">ME</a></li>
                <li><a href="#">EEE</a></li>
                <li><a href="#">ECE</a></li>
            </ul>
        </li>
        <li><a href="stlo.php">Students</a></li>
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
        <li><a href="help.php">Help</a></li>

    </ul>
    <div class="bodyDiv">
        <div class="forAside" style="margin-top:-7px;">
            <aside id="buttonsAside">
                <form class="navBar">
                    <nav id="navigationBar">
                        <ul class="sideBar">
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
        <center>
            <div class="container">
                <?php
			         $con =mysqli_connect("localhost","root","");
                    mysqli_select_db($con,"info");
                    $flag=0;
			         $count=0;
                    $result = mysqli_query($con,"SELECT * FROM backlogs ORDER BY year DESC");
                    $result3 = mysqli_query($con,"SELECT * FROM backlogs ORDER BY year DESC");
                    $result4 = mysqli_query($con,"SELECT * FROM backlogs ORDER BY year DESC");
                    $result5 = mysqli_query($con,"SELECT * FROM backlogs ORDER BY year DESC");
                    $result6 = mysqli_query($con,"SELECT * FROM backlogs ORDER BY year DESC");
                    $result7 = mysqli_query($con,"SELECT * FROM backlogs ORDER BY year DESC");
                    $result1 = mysqli_query($con,"SELECT * FROM profiles");
                    $roll_no=$_REQUEST['roll_no'];


                echo "<table id = 'cust'>";
                  echo "<tr>
                <th> Subject</th>
                <th> Internal Marks</th>
                <th> External Marks</th>
                <th> Total</th>
                <th> Credits</th>";
                while($row = mysqli_fetch_array($result) )
                {
                    if($roll_no==$row['roll_no'] )
                    {
                        if($row['year']=='3rd' && $row['sem']=='I')
                        {
                              echo "</tr>
                              <td>" . $row['subject'] . "</td>
                              <td>" . $row['internal'] . "</td>
                              <td>".$row['external']."</td>
                              <td>" . $row['marks'] . "</td>
                              <td>" . $row['status'] . "</td>
                              </tr>";
                        }   
                    }
                }
                echo "<br>";echo "<br>";;echo "<br>";echo "<br>";;;
      	     echo "</table>";
                echo "<table id = 'cust'>";
		      echo "<tr>
			<th> Subject</th>
			<th> Internal Marks</th>
            <th> External Marks</th>
            <th> Total</th>
            <th> Credits</th>";
                while($row3 = mysqli_fetch_array($result3) )
                {
                    if($roll_no==$row3['roll_no'] )
                    {
                        if($row3['year']=='2nd' && $row3['sem']=='I')
                        {
                              echo "</tr>
                              <td>" . $row3['subject'] . "</td>
                              <td>" . $row3['internal'] . "</td>
                              <td>".$row3['external']."</td>
                              <td>" . $row3['marks'] . "</td>
                              <td>" . $row3['status'] . "</td>
                              </tr>";
                        }   
                    }
                }
                echo "<br>";echo "<br>";;
      	     echo "</table>";
                echo "<table id = 'cust'>";
		      echo "<tr>
			<th> Subject</th>
			<th> Internal Marks</th>
            <th> External Marks</th>
            <th> Total</th>
            <th> Credits</th>";
                while($row7 = mysqli_fetch_array($result7) )
                {
                    if($roll_no==$row7['roll_no'] )
                    {
                        if($row7['year']=='2nd' && $row7['sem']=='II')
                        {
                              echo "</tr>
                              <td>" . $row7['subject'] . "</td>
                              <td>" . $row7['internal'] . "</td>
                              <td>".$row7['external']."</td>
                              <td>" . $row7['marks'] . "</td>
                              <td>" . $row7['status'] . "</td>
                              </tr>";
                        }   
                    }
                }
                echo "<br>";echo "<br>";;
      	     echo "</table>";
                   echo "<table id = 'cust'>";
		      echo "<tr>
			<th> Subject</th>
			<th> Internal Marks</th>
            <th> External Marks</th>
            <th> Total</th>
            <th> Credits</th>";
                while($row4 = mysqli_fetch_array($result4) )
                {
                    if($roll_no==$row4['roll_no'] )
                    {
                        if($row4['year']=='1st' && $row4['sem']=='I')
                        {
                              echo "</tr>
                              <td>" . $row4['subject'] . "</td>
                              <td>" . $row4['internal'] . "</td>
                              <td>".$row4['external']."</td>
                              <td>" . $row4['marks'] . "</td>
                              <td>" . $row4['status'] . "</td>
                              </tr>";
                            
                        }   
                    }
                }
                echo "<br>";echo "<br>";;
      	     echo "</table>";
                     echo "<table id = 'cust'>";
		      echo "<tr>
			<th> Subject</th>
			<th> Internal Marks</th>
            <th> External Marks</th>
            <th> Total</th>
            <th> Credits</th>";
                while($row6 = mysqli_fetch_array($result6) )
                {
                    if($roll_no==$row6['roll_no'] )
                    {
                        if($row6['year']=='1st' && $row6['sem']=='II')
                        {
                              echo "</tr>
                              <td>" . $row6['subject'] . "</td>
                              <td>" . $row6['internal'] . "</td>
                              <td>".$row6['external']."</td>
                              <td>" . $row6['marks'] . "</td>
                              <td>" . $row6['status'] . "</td>
                              </tr>";
                        }   
                    }
                }
                echo "<br>";echo "<br>";;
      	     echo "</table>";
                        
	       
        
       
          
        mysqli_close($con);

		?>
            </div>
        </center>
        <br>
        <br>
        <br>
    </div>
    <footer id="footer">
        <h4 id="left">Copyright &copy;</h4>
        <h4 id="right">BVCEC</h4>
    </footer>
</body>

</html>

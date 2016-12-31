<!-- Developed by Saurav Bajracharya and Pramesh Bajracharya -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="script.js"></script>
    <link rel="shortcut icon" href="round.png" type="image/x-icon" />
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="styleIndex.css">
    <script type="text/javascript" src="date_time.js"></script>
</head>

<body>
    <div class="topDiv">
        <div class="imageLeft">
            <img src="round.png" />
        </div>
        <div id="asideCont">
            <h1>बोनम वेंकटा चालामाया इंजीनियरिंग महाविध्यालय</h1>
            <h2>Bonam Venkata Chalamayya Engineering College,<br> Odalarevu</h2>
            <h3>Affiliated To JNTUK, Kakinada</h3>
            <h5>Accredited By NBA New Delhi and NAAC With 'A' Grade<br> Approved By AICTE, New Delhi<br> Established in 1997</h5>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="About.php">About Us</a></li>
                <li><a href="vision.php">Vision &amp; Mission</a></li>
                <li><a href="index.php">Management</a>

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
                <li><a href="index.php"> Departments</a>
                    <ul class="submenu1">
                        <li><a href="Department.php">CSE</a></li>
                        <li><a href="civil.php">CE</a></li>
                        <li><a href="mech.php">ME</a></li>
                        <li><a href="eee.php">EEE</a></li>
                        <li><a href="ece.php">ECE</a></li>
                    </ul>
                </li>
                <li><a href="index.php">Accredition</a>
                    <ul class="submenu1">
                        <li><a href="naac.php">NAAC</a></li>
                        <li><a href="nba.php">NBA</a></li>
                        <li><a href="pio.php">PIO</a></li>
                    </ul>
                </li>
                <li><a href="help.php">Help</a></li>
            </ul>
        </center>

        <div class="bodyDiv">
            <div class="forAside">
                <aside id="buttonsAside">
                    <nav id="navigationBar">
                        <ul class="sideBar" style="margin-left:-10px;">
                            <li><a href="acadamic.php">Academics</a></li>
                            <li><a href="administration.php">Administration</a></li>
                            <li><a href="bvcnews.php">BVC News</a></li>
                            <li><a href="forthcoming.php">Forthcoming Event</a></li>
                            <li><a href="sms.php">SMS to Parents/Students</a></li>
                            <li><a href="proffesional.php">Professional Body</a></li>
                            <li><a href="project.php">Projects</a></li>
                            <li><a href="deplib.php">Department Library</a></li>
                            <li><a href="training.php">Training</a></li>
                            <li><a href="games.php">Games And Sports</a></li>
                            <li><a href="recuriment.php">Recruitment</a></li>
                            <li><a href="placements.php">Placement</a></li>
                            <li><a href="feedback.php">Feedback to College</a></li>
                            <li><a href="alumini.php">Alumini</a></li>
                            <li class="lastItem"><a href="notice.php">Notices &amp; Circulars</a></li>
                        </ul>
                    </nav>
                </aside>
            </div>
            <div class="centralDiv">
                <br><br>
                <h3>In the service of the society for last 20 years.<br> Our Motto Is to impart Quality Education.</h3><br>
                <h1>Welcome To BVC Engineering Portal</h1>
                <h2 class="page ">Welcome To The Student Information Systems</h2>

                </br>
                <div class="container">
                    <h3 style="margin-left:-160px;">WELCOME TO BVCE STUDENT PORTAL</h3>
                    <article>
                        <div class="loginForm">
                            <form action="details.php" method="POST" class="form form--login">
                                <br>
                                <h2>LOGIN </h2>

                                <div class="form__field">
                                    <label>Username</label>
                                    <input id="login__username" type="text" class="form__input" placeholder="" name="uname" required>
                                </div>

                                <div class="form__field">
                                    <label>Password</label>
                                    <input id="login__password" type="password" class="form__input" placeholder="" name="pwd" required>
                                </div>

                                <div class="form__field__signup">
                                    <input type="submit" value="Sign In">
                                </div>
                            </form>
                            <br>
                            <p class="text--center">New user?<a href="registrationPage.php" style="color:black;"> Please Register here</a>
                        </div>
                    </article>
                </div>
                </br>
                </br>
                </br>
                <div align="right" style="width:100%;margin-left:-347px;">
                    <div class="slideshow-container" style="width:100%;">

                        <div class="mySlides fade" style="width:100%;">

                            <img src="bvc_gurukul-756x250.jpg" style="width:202%;height:400px;border-bottom:10px double black;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom_part" style="border:3px solid gray;margin:80px 0 0 990px;width:25%;height:500px;">
        <p class="newFooter">
            <h2 align="center">
                <u style="color: blue">Flash News</u>
            </h2>
            <marquee behavior="scroll" scrollamount="5" direction="left" onmouseover="this.stop();" onmouseout="this.start();">

                <?php
                            $servername = "localhost";
                            $username = "id435190_bvcecweb99999999";
                            $password = "bvcecweb99999999";
                            $dbname = "id435190_info";

                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn->connect_error) {
                                 die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM upfn";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                 // output data of each row
                                 while($row = mysqli_fetch_array($result)) {
                                     echo "<br> ". $row["texto"]. " <br>". $row["textt"]. " <br>";
                                     echo "". $row["textt"]. " <br>";
                                     echo "". $row["textth"]. " <br>";
                                     echo " ". $row["textf"]. " <br>";
                                     echo "". $row["textfi"]. " <br>";
                                 }
                            } else {
                                 echo "0 results";
                            }

                            $conn->close();
                        ?>

            </marquee><br>
            <br>
        </p>
    </div>
    </div>
    </br>
    </br>
    </br>

    <footer id="footer">
        <h4 id="left">Copyright &copy;</h4>
        <h4 id="right">BVCEC</h4>
    </footer>
</body>




</html>

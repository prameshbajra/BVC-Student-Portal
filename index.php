<!-- Developed by Saurav Bajracharya and Pramesh Bajracharya -->


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Login</title>
    <script src="script.js"></script>
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
                    
                        <ul class="submenu1">
                            <li><a href="st_table.php">CSE</a></li>
                            <li><a href="cest.php">CE</a></li>
                            <li><a href="mest.php">ME</a></li>
                            <li><a href="eeest.php">EEE</a></li>
                            <li><a href="ecest.php">ECE</a></li>
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
                </ul>
            </center>

            <div class="bodyDiv">
                <div class="forAside">
                    <aside id="buttonsAside">
                        <nav id="navigationBar">
                            <ul class="sideBar">
                                <li><a href="acadamic.php">Academics</a></li>
                                <li><a href="administration.php">Administration</a></li>
                                <li><a href="bvcnews.php">BVC News</a></li>
                                <li><a href="forthcoming.php">Forthcoming Event</a></li>
                                <li><a href="emailnew.php">E-mail to students</a></li>
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
                                <li><a href="notice.php">Notices &amp; Circulars</a></li>
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
                        <h3 style="margin-left:-450px;">WELCOME TO BVCE STUDENT PORTAL</h3>
                        <article>
                            <div class="loginForm" style="margin-left:-190px;">
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
                                <p class="text--center">New user?<a href="registrationPage.php" style="color:black;"> Please Register here</a> <span class="fontawesome-arrow-right"></span></p>
                            </div>
                        </article>
                    </div>
                    </br>
                    </br>
                    </br>
                    <div align="right">
                        <div class="slideshow-container">

                            <div class="mySlides fade" style="margin-left: 110px;margin-bottom: 60px;">
                                <div class="numbertext">1 / 3</div>
                                <img src="bvc_gurukul-756x250.jpg" style="margin-left: 410px;margin-top: -210px;width:75%;height:10%;">

                            </div>

                            <div class="mySlides fade">
                                <div class="numbertext">2 / 3</div>
                                <img src="af206dd800ed91ddb218932ded2b02e3coverBVCITS.jpg" style="width:75%;margin-left: 410px;margin-top: -210px;height:5%">

                            </div>

                            <div class="mySlides fade">
                                <div class="numbertext">3 / 3</div>
                                <img src="4596970e54c7df92f2dfc2293cfcffb2.jpg" style="width:75%;margin-left: 410px;margin-top: -210px;height:10%">



                            </div>
                            </br>
                            </br>
                            </br>

                          
                        </div>
                    </div>
                </div>



            </div>



            <div id="bottom_part" style="border:3px solid gray;margin-left: 990px;width:25%;">
                <p class="newFooter">
                    <h2 align="center">
                        <u style="color: blue">Flash News</u>
                    </h2>
                    <marquee behavior="scroll" scrollamount="5" direction="left" onmouseover="this.setAttribute('scrollamount',0);" onmouseout="this.setAttribute('scrollamount',5);">

                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "info";

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

        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1
                }
                x[myIndex - 1].style.display = "block";
                setTimeout(carousel, 3500);
            }

        </script>
    </body>
    <footer id="footer">
        <h4 id="left">Copyright &copy;</h4>
        <h4 id="right">BVCEC</h4>
    </footer>


    <!DOCTYPE html>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box
        }
        
        body {
            font-family: Verdana, sans-serif;
        }
        /* Slideshow container */
        
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }
        /* Caption text */
        
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 1000%;
            text-align: center;
        }
        /* Number text (1/3 etc) */
        
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        /* The dots/bullets/indicators */
        
        .dot {
            height: 13px;
            width: 13px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        
        .active {
            background-color: #717171;
        }
        /* Fading animation */
        
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }
        
        @-webkit-keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }
        
        @keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }
        /* On smaller screens, decrease text size */
        
        @media only screen and (max-width: 1000px) {
            .text {
                font-size: 11px
            }
        }

    </style>




    <html>
    <title>Welcome To BVCEC</title>

    <head>
        <style>
            body {
                background-color: white;
            }

        </style>


        <style>
            .button {
                border-top: 1px solid #96d1f8;
                background: #2f434f;
                background: -webkit-gradient(linear, left top, left bottom, from(blue), to(#2f434f));
                background: -webkit-linear-gradient(top, blue, #2f434f);
                background: -moz-linear-gradient(top, blue, #2f434f);
                background: -ms-linear-gradient(top, blue, #2f434f);
                background: -o-linear-gradient(top, blue, #2f434f);
                padding: 16.5px 33px;
                -webkit-border-radius: 13px;
                -moz-border-radius: 13px;
                border-radius: 13px;
                -webkit-box-shadow: rgba(0, 0, 0, 1) 0 1px 0;
                -moz-box-shadow: rgba(0, 0, 0, 1) 0 1px 0;
                box-shadow: rgba(0, 0, 0, 1) 0 1px 0;
                text-shadow: rgba(0, 0, 0, .4) 0 1px 0;
                color: white;
                font-size: 18px;
                font-family: Georgia, Serif;
                text-decoration: none;
                vertical-align: middle;
            }
            
            .button:hover {
                border-top-color: #2980b9;
                background: #2980b9;
                color: white;
            }
            
            .button:active {
                border-top-color: #8f9aa1;
                background: white;
            }

        </style>




    </head>

    <body>
        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }

        </script>

    </html>

    </body>

</html>

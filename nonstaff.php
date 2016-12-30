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
                      <li><a href="stlo.php">Students</a></li>      
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
    <div class="bodyDiv">
       <div class="forAside">
                    <aside id="buttonsAside">
                        <nav id="navigationBar">
                            <ul class="sideBar">
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
                                <li><a href="notice.php">Notices &amp; Circulars</a></li>
                            </ul>
                        </nav>
                    </aside>
                </div>
        <div class="container">

            <header>
			 <img src="hod.jpg" alt="logo" style= "width: 50px;height: 60px;"  ><style> img{
float: left;
}</style>
			<center><h1>HOD CSE</h1></center>
            </header>



            <article>
			<p>
<h4> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Professor Gunamani Jena after completing his Master Degree from National Institute of Technology, Rourkala joined as a faculty in AP. He has completed his Ph D with specialization of Image Processing and Channel Equalisers. He has 28 years of experience in teaching and industry. He is a Fellow of Institution of Engineers (India) and a Senior Member of IEEE, LMISTE, MCSI. He published 35 numbers of technical papers in various International Journals and Conferences. In the month of July 2016 he visited Florida, Orlando, USA and presented a paper in the 7th International conference  AHFE-2016 jointly conducted by IBM and Microsoft(25th July-2nd August 2016). He is the chief editor of International journal IJACTA. His area of specialization is Image Processing, UML DP</h4>
<h4>Contact</h4>
<h4>Mobile +91 9440121621</h4>
<h4>Email: hodcse.bvce@bvcgroup.in</h4>

			</p>
			</br>
			<p>
			<h2>NON TECHNICAL STAFF Detalies<h2>
			</p>
    <div id="bodyMain">
<center>
        <?php
			include "funcst.php";
			st();

        ?>
		
</center>
    </div>
	
	</article>
	
	
	</br></br>
            <aside class="map" style="float:right; margin-left:10%;">
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                <div style='overflow:hidden;height:440px;width:662px;margin-left:30%;'>
                    <div id='gmap_canvas' style='height:240px;width:462px;border:2px solid gray;'></div>

                    <style>
                        #gmap_canvas img {
                            max-width: none!important;
                            background: none!important
                        }

                    </style>
                </div>
                <script type='text/javascript'>
                    function init_map() {
                        var myOptions = {
                            zoom: 10,
                            center: new google.maps.LatLng(16.46982694408489, 81.93206051503896),
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                        marker = new google.maps.Marker({
                            map: map,
                            position: new google.maps.LatLng(16.46982694408489, 81.93206051503896)
                        });
                        id435190_infowindow = new google.maps.InfoWindow({
                            content: '<strong>BVC</strong><br>Odalarevu<br>'
                        });
                        google.maps.event.addListener(marker, 'click', function() {
                            id435190_infowindow.open(map, marker);
                        });
                        id435190_infowindow.open(map, marker);
                    }
                    google.maps.event.addDomListener(window, 'load', init_map);

                </script>
            </aside>


        </div>
    </div>



	</body>
<footer id="footer">
    <h4 id="left">Copyright &copy;</h4>
    <h4 id="right">BVCEC</h4>
</footer>


</html>

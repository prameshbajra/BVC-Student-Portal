<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        Student details id435190_information.
    </title>
    <link rel="stylesheet" href="styleadmin.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="shortcut icon" href="round.png" type="image/x-icon" />
    <link rel="stylesheet" href="main.css">
    <script type="text/javascript" src="date_time.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>

<body>
    </br>
    <div align="center" style="color: gray">
        <img src="round.png" style="position:absolute;margin:0 50% 5% -50%;float:left;">
        <h2 style="color: gray;">BVC Engineering College, Odalarevu</h2>
        <h3 style="color: gray">Affiliated To JNTUK, Kakinada</h3> Accredited By NBA New Delhi and NAAC With 'A' Grade<br> Approved By AICTE, New Delhi<br> Established in 1997<br><br>
        <img src="group.png" style="margin: -15% 0 0 30%;position:absolute;">
    </div>
    <div align="right"><span id="date_time" style="color: black"></span>
        <script type="text/javascript">
            window.onload = date_time('date_time');

        </script>
    </div>
    </br>
    <ul class="menu">


        <li style="margin-left:60px;"><a href="admin.php">Send E-mail</a>
            <ul class="submenu1">
                <li><a href="emailnew.php">1st year</a></li>
                <li><a href="#">2nd year</a></li>
                <li><a href="#">3rd year</a></li>
                <li><a href="#">4th year</a></li>
            </ul>
        </li>
        <li style="margin-left:60px;"><a href="stud.php">Student Details</a>

        </li>
        <li style="margin-left:60px;"><a href="upf.php">Update Flash News</a></li>
        <li style="margin-left:60px;">
            <a href="admin.php"> Update Staff Details</a>
            <ul class="submenu1">
                <li><a href="ustaff.php">Technical Staff</a></li>
                <li><a href="unstaff.php">Non-Technical Staff</a></li>
            </ul>
        </li>
        <li style="margin-left:60px;">
            <a href="admin.php">Settings</a>
            <ul class="submenu1">
                <li><a href="cha.php">ChangePassword</a></li>

            </ul>
        </li>
        <li style="margin-left:60px;"><a href="help.php">Help</a></li>
        <li style="margin-left:60px;"><a href="index.php">LogOut</a></li>
    </ul>

    <center>
        <h1 style="color:black;">
            WELCOME
        </h1>
        <div id="bodyMain">
            <div id="bodyMain">
                <form id="importExcel" name="import" method="post" enctype="multipart/form-data" action="admin.php">
                    <p id="text" style="color: gray">Upload Details Into Student<br></p>
                    <input id="file" type="file" name="file" value="Choose a file"><br /><br>
                    <input id="submit" type="submit" name="submit" value="Insert">
                </form>
                <form id="importExcel" name="import2" method="post" enctype="multipart/form-data" action="import.php">
                    <p id="text" style="color: gray">Upload Marks For Students<br></p>
                    <input id="file" type="file" name="file" value="Choose a file"><br /><br>
                    <input id="submit" type="submit" name="submit" value="Insert">
                </form>

                <?php
                    include "functions.php";
                    import();
	             ?>
                    <div id="clear"></div>
            </div>
        </div>
    </center>
</body>

</html>

<!-- Developed by Saurav Bajracharya and Pramesh Bajracharya -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Student Details Information.</title>
    <link rel="stylesheet" href="style_detailadmin.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="shortcut icon" href="bvc.png" type="image/x-icon" />

</head>
<body>

    <header id="topHead" class="animated fadeInDown">
        <a href="index.php"><h2 style = "margin-left : 30px">Student Information Sheet - BVCEC</h2></a>
        <a href="index.php"><img id="home" src="download.png" style="width : 65px ; height : 65px;"></a>
    </header>

    <div id="bodyMain">
         <?php
            include "functions.php";
		  	admin_update();
          ?>
     </div>
</body>
</html>

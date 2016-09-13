<!-- Developed by Saurav Bajracharya and Pramesh Bajracharya -->

<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Student Detail Information.</title>
    <link rel="shortcut icon" href="bvc.png" type="image/x-icon" />
    <link rel="stylesheet" href="styleReg.css">
    <link rel="stylesheet" href="animate.css">

</head>

<body>

    <header id="topHead" class="animated fadeInDown">
        <h2><a href="index.php">Student Information Sheet - BVCEC</a></h2>
        <a href="index.php"><img id="home" src="download.png" style="width : 65px ; height : 65px;"></a>
    </header>

    <div id="bodyMain">
        <div id="uploadpage">>
            <?php
               include "functions.php";
			   upload();
            ?>
        </div>
    </div>
</body>

</html>

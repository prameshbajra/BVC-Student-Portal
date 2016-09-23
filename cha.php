<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        Student details information.
    </title>
    <link rel="stylesheet" href="styleadmin.css">
    <link rel="stylesheet" href="animate.css">
<link rel="shortcut icon" href="round.png" type="image/x-icon" />    <link rel="stylesheet" href="main.css">
    <script type="text/javascript" src="date_time.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>


<body>
    <form action="admin_update.php" method="POST" class="form form--login">
        <p id="search"><br><br><u style="color: gray">Change username password</u></p>
        <div class="dibba">
            <div class="new">
                <label class="fontawesome-user" for="login__username"><span class="hidden" style="color: gray">Current Username</span></label>
            </div>
            <input id="login__rollno" type="text" class="form__input" placeholder="" name="cuname">
        </div>
        <div class="dibba">
            <div class="new">
                <label class="fontawesome-user" for="login__username"><span class="hidden" style="color: gray">Current password</span></label></div>
            <input id="login__rollno" type="text" class="form__input" placeholder="" name="cpwd">
        </div>
        <div class="dibba">
            <div class="new">
                <label class="fontawesome-user" for="login__username"><span class="hidden" style="color: gray">New Username</span></label></div>
            <input id="login__rollno" type="text" class="form__input" placeholder="" name="nuname">
        </div>
        <div class="dibba">
            <div class="new">
                <label class="fontawesome-user" for="login__username"><span class="hidden" style="color: gray">New Password</span></label></div>
            <input id="login__rollno" type="text" class="form__input" placeholder="" name="npwd">
        </div>
    </form>

    </br>
    </br>
    <form action="admin.php" method="POST" class="form form--login">
        <div class="searchbottom animated bounce ">
            <input type="submit" value="submit">
        </div>
    </form><br><br></body>

</html>

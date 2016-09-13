   


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        Student details information.
    </title>
    <link rel="stylesheet" href="styleadmin.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="shortcut icon" href="bvc.png" type="image/x-icon" />
    <link rel="stylesheet" href="main.css"> 
    <script type="text/javascript" src="date_time.js"></script>    
</head>

ssss
</br></br>
<div align="right">
                <form action="admin.php" method="POST" class="form form--login">
<div class="viewupdate animated bounce">
                        <input type="submit" value="Exit">
                    </div>
</form></div>
</br></br>

   <form action="stu_table_criteria.php" method="POST" class="form form--login">
                    <p id="search"><u style="color: gray">Advanced search</u></p>
                    <div class="dibba">
                        <div class="new">
                            <label class="fontawesome-user" for="login__username"><span class="hidden" style="color: gray">Percentage Greater Than</span></label>
                            </div>
                        <input id="login__rollno" type="text" class="form__input" placeholder="" name="field_1">
                    </div>
                    <div class="searchbottom animated bounce ">
                        <input type="submit" value="Search">
                    </div>
                </form>

</br></br>
   <form action="details_admin.php" method="POST" class="form form--login">
                    <div class="form__fieldRoll">
                        <div class="new">
                            <label class="fontawesome-user" for="login__username"><span class="hidden" style="color: gray">Roll no</span></label></div>
                        <input id="login__rollno" type="text" class="form__input" placeholder="" name="roll_no" required> *
                    </div>
                    <div class="viewupdate animated bounce">
                        <input type="submit" value="View/Update">
                    </div>
                </form>
                <form action="stu_table.php" method="POST" class="form form--login">
                    <div class="form__fieldRoll">
                        <div class="studentlist animated bounce">
                            <input type="submit" value="View student list">
                        </div>
                    </div>
                </form>
                
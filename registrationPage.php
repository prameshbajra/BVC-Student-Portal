<!-- Developed by Saurav Bajracharya and Pramesh Bajracharya -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Details Information.</title>
    <link rel="stylesheet" href="styleReg.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <nav>
            <ul class="nav nav-tabs">
                <li role="presentation">
                    <a href="index.php">Home</a>
                </li>
                <li role="presentation" class="active"><a href="#">Register</a></li>
                <li role="presentation"><a href="stlo.php">Already a User?</a></li>
            </ul>
        </nav><br><br>
        <!--
        <div class="imageUpload">
            <div id="uploadImagediv">
                <image src="uploadlogo.png" id="uploadImage"></image>
            </div>
            <form action="upload.php" method="post" enctype="multipart/form-data" class="form_upload">
                Select image to upload:
                <input type="file" name="fileToUpload" class="form-control" id="fileToUpload">
                <input class="upload" type="submit" value="Upload" name="submit">
            </form>
        </div>
            -->
        <form action="registrationPage.php" method="POST" class="form form--login ">
            <div class="formFull">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputName2">Registration Number</label>
                            <input type="text" class="form-control" name="roll_no" id="exampleInputName2" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputName2">Name (As per SSC)</label>
                            <input type="text" class="form-control" name="name" id="exampleInputName2" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputName2">Date of Birth</label>
                            <input class="form-control" type="date" name="dob" id="example-date-input">
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputName2">Gender</label>
                            <input class="form-control" type="text" name="sex" placeholder="Male/Female or M/F" id="example-date-input">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputName2">Father's name</label>
                            <input id="example-date-input" type="text " class="form-control" placeholder="" name="father_name">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputName2">Username</label>
                            <input id="example-date-input" type="text " class="form-control" placeholder="" name="uname">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputName2">Address</label>
                            <input id="example-date-input" type="text " class="form-control" placeholder="" name="address">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputName2">Password</label>
                            <input id="example-date-input" type="password" class="form-control" placeholder="" name="pwd">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputName2">E-mail</label>
                            <input id="example-date-input" type="text " class="form-control" placeholder="example@example.com" name="email">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputName2">Mobile Number</label>
                            <input id="example-date-input" type="text " class="form-control" placeholder="" name="mobile">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputName2">Parent's Mobile Number</label>
                            <input id="example-date-input" type="text " class="form-control" placeholder="" name="father_mobile">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputName2">Aadhaar ID</label>
                            <input id="example-date-input" type="text " class="form-control" placeholder="" name="aadhaar_id">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputName2">Nationality</label>
                            <input id="example-date-input" type="text " class="form-control" placeholder="" name="nationality">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputName2">Caste</label>
                            <input id="example-date-input" type="text " class="form-control" placeholder="" name="caste">
                        </div>
                    </div>
                </div><br><br>

                <h3><u>Marks</u></h3><br>

                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="exampleInputName2">10th</label>
                            <input id="example-date-input" type="text " class="form-control" placeholder="" name="th10">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="exampleInputName2">+2 Sc.</label>
                            <input id="example-date-input" type="text " class="form-control" placeholder="" name="sc2">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="exampleInputName2">+3Sc Or Diploma</label>
                            <input id="example-date-input" type="text " class="form-control" placeholder="" name="diploma">
                        </div>
                    </div>
                </div>
                <br>

                <h3><u>B-Tech marks (%)</u></h3><br>

                <table class="tg table table-striped">
                    <tr>
                        <td class="tg1 ">Semester </td>
                        <td class="tg2 ">I year</td>
                        <td class="tg2 ">II year</td>
                        <td class="tg2 ">III year</td>
                        <td class="tg2 ">IV year</td>
                    </tr>
                    <tr>
                        <td class="tg3 ">1st</td>
                        <td class="tg3 ">
                            <div class="col-xs-6">
                                <input type="text" class="form-control" name="one_1" placeholder="">
                            </div>
                        </td>
                        <td class="tg3 ">
                            <div class="col-xs-6">
                                <input type="text" class="form-control" name="two_1" placeholder="">
                            </div>
                        </td>
                        <td class="tg3 ">
                            <div class="col-xs-6">
                                <input type="text" class="form-control" name="three_1" placeholder="">
                            </div>
                        </td>
                        <td class="tg3 ">
                            <div class="col-xs-6">
                                <input type="text" class="form-control" name="four_1" placeholder="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="tg3 ">2nd</td>
                        <td class="tg3 ">
                            <div class="col-xs-6">
                                <input type="text" class="form-control" name="one_2" placeholder="">
                            </div>
                        </td>
                        <td class="tg3 ">
                            <div class="col-xs-6">
                                <input type="text" class="form-control" name="two_2" placeholder="">
                            </div>
                        </td>
                        <td class="tg3 ">
                            <div class="col-xs-6">
                                <input type="text" class="form-control" name="three_2" placeholder="">
                            </div>
                        </td>
                        <td class="tg3 ">
                            <div class="col-xs-6">
                                <input type="text" class="form-control" name="four_2" placeholder="">
                            </div>
                        </td>
                    </tr>
                </table>
                <br>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputName2">Attendance (%)</label>
                            <input id="example-date-input" type="text " class="form-control" placeholder="" name="attendance">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputName2">Members of</label>
                            <input id="example-date-input" type="text " class="form-control" placeholder="" name="members">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputName2">Hobbies</label>
                            <input id="example-date-input" type="text " class="form-control" placeholder="" name="hobbies">
                        </div>
                    </div>
                </div>
                <br><br>
                <h3 id="achievements "><u>Achievements</u></h3><br>
                <table class="tg table table-striped ">
                    <tr>
                        <td class="tg1 ">Academic </td>
                        <td class="tg2 ">Curricular</td>
                        <td class="tg2 ">Co-curricular</td>
                        <td class="tg2 ">ExtraCurricular</td>
                        <td class="tg2 ">Others</td>
                    </tr>
                    <tr>
                        <td class="tg3 ">
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="academics1" placeholder="">
                            </div>
                        </td>
                        <td class="tg3 ">
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="curricular1" placeholder="">
                            </div>
                        </td>
                        <td class="tg3 ">
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="co_curricular1" placeholder="">
                            </div>
                        </td>
                        <td class="tg3 ">
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="extracurricular1" placeholder="">
                            </div>
                        </td>
                        <td class="tg3 ">
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="others1" placeholder="">
                            </div>
                        </td>
                    </tr>
                    <!--
                    <tr>
                        <td class="tg2 "><input type="text " name="academics2 " style="width : 150px; "></td>
                        <td class="tg2 "><input type="text " name="curricular2 " style="width : 150px; "></td>
                        <td class="tg2 "><input type="text " name="co_curricular2 " style="width : 150px; "></td>
                        <td class="tg2 "><input type="text " name="extra_curricular2 " style="width : 150px; "></td>
                        <td class="tg2 "><input type="text " name="others2 " style="width : 150px; "></td>
                    </tr>
                    <tr>
                        <td class="tg2 "><input type="text " name="academics3 " style="width : 150px; "></td>
                        <td class="tg2 "><input type="text " name="curricular3 " style="width : 150px; "></td>
                        <td class="tg2 "><input type="text " name="co_curricular3 " style="width : 150px; "></td>
                        <td class="tg2 "><input type="text " name="extra_curricular3 " style="width : 150px; "></td>
                        <td class="tg2 "><input type="text " name="others3 " style="width : 150px; "></td>
                    </tr>
                    <tr>
                        <td class="tg2 "><input type="text " name="academics4 " style="width : 150px; "></td>
                        <td class="tg2 "><input type="text " name="curricular4 " style="width : 150px; "></td>
                        <td class="tg2 "><input type="text " name="co_curricular4 " style="width : 150px; "></td>
                        <td class="tg2 "><input type="text " name="extra_curricular4 " style="width : 150px; "></td>
                        <td class="tg2 "><input type="text " name="others4 " style="width : 150px; "></td>
                    </tr>
-->
                </table>
                <br><br>
                <center>
                    <article id="left_art ">
                        Press the button below for registering !
                    </article>
                    <br>
                    <input type="submit" class="btn btn-warning" value="Submit" name="submit" target="_blank ">
                </center>

                <?php
			      	include "functions.php ";
	            	insert();
                ?>
            </div>

        </form>
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js " integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa " crossorigin="anonymous "></script>
</body>

</html>

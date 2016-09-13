<!-- Developed by Saurav Bajracharya and Pramesh Bajracharya -->

<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Student Details Information.</title>
    <link rel="stylesheet" href="styleReg.css">


</head>

        
        <div id="bodyMain">
            <div id="uploadImagediv">
                <image src="uploadlogo.png" id="uploadImage"></image>
            </div>
            <form action="upload.php" method="post" enctype="multipart/form-data" class="form_upload">
                Select image to upload:<br>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input class="upload" type="submit" value="Upload" name="submit">
            </form>


            <form action="registrationPage.php" method="POST" class="form form--login ">

                <div class="form__fieldRoll">
                    <div class="new">
                        <label class="fontawesome-user " for="login__username"><span class="hidden">Roll no</span></label></div>
                    <input id="login__rollno" type="text" class="form__input" placeholder="" name="roll_no" required> *
                </div>

                <div class="form__field">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">Name of student (As per SSC) </span></label></div>
                    <input id="login__name" type="text" class="form__input" placeholder="" name="name" required> *
                </div>

                <div class="form__field">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">Date Of Birth </span></label></div>
                    <input id="login__dob" type="text" class="form__input" placeholder="YYYY-MM-DD" name="dob">
                </div>

                <div class="form__field">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">Gender </span></label></div>
                    <select name="sex" id="sex_option">
                      <option value="N/A">-</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                </div>

                <div class="form__field">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">Father's name</span></label></div>
                    <input id="login__fname" type="text" class="form__input" placeholder="" name="father_name">
                </div>

                <div class="form__field">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">Address</span></label></div>
                    <input id="login__address" type="text" class="form__input" placeholder="" name="address">
                </div>

                <div class="form__field">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">Email ID</span></label></div>
                    <input id="login__email" type="text" class="form__input" placeholder="" name="email" required> *
                </div>

                <div class="form__field">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">Mobile No.</span></label></div>
                    <input id="login__mobile" type="text" class="form__input" placeholder="" name="mobile" required> *
                </div>

                <div class="form__field">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">Aadhaar Id</span></label></div>
                    <input id="login__mobile" type="text" class="form__input" placeholder="" name="aadhaar_id" required> *
                </div>

                <div class="form__field">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">Parent's Mobile No.</span></label></div>
                    <input id="login__pmobile" type="text" class="form__input" placeholder="" name="father_mobile">
                </div>
                <div class="form__field__uname">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label></div>
                    <input id="login__pmobile" type="text" class="form__input" placeholder="" name="uname" required>
                </div>
                <div class="form__field__pass">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">Password</span></label></div>
                    <input id="login__pmobile" type="password" class="form__input" placeholder="" name="pwd" required>
                </div>
                <div class="form__field">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">Nationality </span></label></div>
                    <input id="login__nationality" type="text" class="form__input" placeholder="" name="nationality">
                </div>
                <div class="form__field">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">Caste </span></label></div>
                    <input id="login__caste" type="text" class="form__input" placeholder="" name="caste">
                </div>
                <!--

                                                          NO LONGER NEEDED

                <div class="form__field">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">Choose your photo</span></label>
                    </div>
                    <input id="imagePath" type="file" name="image">
                </div>

                -->

                <br><br>
                <p id="career"><u>Career</u></p>
                <div class="form__field">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">10th </span></label></div>
                    <input id="login__th10" type="text" class="form__input" placeholder="" name="th10" required>
                </div>
                <div class="form__field">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">+2Sc </span></label></div>
                    <input id="login__sc2" type="text" class="form__input" placeholder="" name="sc2" required>
                </div>
                <div class="form__field">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">Diploma (or) +3Sc </span></label></div>
                    <input id="login__diploma" type="text" class="form__input" placeholder="" name="diploma">
                </div>
                <br><br>
                <p id="btech"><u>B-Tech marks (%)</u></p>
                <table class="tg">
                    <tr>
                        <td class="tg1">Semester </td>
                        <td class="tg2">I year</td>
                        <td class="tg2">II year</td>
                        <td class="tg2">III year</td>
                        <td class="tg2">IV year</td>
                    </tr>
                    <tr>
                        <td class="tg3">1st</td>
                        <td class="tg3"><input type="text" name="one_1" style="width : 150px;"></td>
                        <td class="tg3"><input type="text" name="two_1" style="width : 150px;"></td>
                        <td class="tg3"><input type="text" name="three_1" style="width : 150px;"></td>
                        <td class="tg3"><input type="text" name="four_1" style="width : 150px;"></td>
                    </tr>
                    <tr>
                        <td class="tg3">2nd</td>
                        <td class="tg3"><input type="text" name="one_2" style="width : 150px;"></td>
                        <td class="tg3"><input type="text" name="two_2" style="width : 150px;"></td>
                        <td class="tg3"><input type="text" name="three_2" style="width : 150px;"></td>
                        <td class="tg3"><input type="text" name="four_2" style="width : 150px;"></td>
                    </tr>
                </table>
                <br>
                <div class="form__field">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">Attendance % </span></label></div>
                    <input id="login__attendance" type="text" class="form__input" placeholder="" name="attendance">
                </div>
                <div class="form__field">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">Members Of </span></label></div>
                    <input id="login__members" type="text" class="form__input" placeholder="" name="members">
                </div>
                <div class="form__field">
                    <div class="new">
                        <label class="fontawesome-user" for="login__username"><span class="hidden">Hobbies </span></label></div>
                    <input id="login__members" type="text" class="form__input" placeholder="" name="hobbies">
                </div>
                <br><br>
                <p id="achievements"><u>Achievements</u></p>
                <table class="tg">
                    <tr>
                        <td class="tg1">Academic </td>
                        <td class="tg2">Curricular</td>
                        <td class="tg2">Co-curricular</td>
                        <td class="tg2">ExtraCurricular</td>
                        <td class="tg2">Others</td>
                    </tr>
                    <tr>
                        <td class="tg3"><input type="text" name="academics1" style="width : 150px;"></td>
                        <td class="tg3"><input type="text" name="curricular1" style="width : 150px;"></td>
                        <td class="tg3"><input type="text" name="co_curricular1" style="width : 150px;"></td>
                        <td class="tg3"><input type="text" name="extra_curricular1" style="width : 150px;"></td>
                        <td class="tg3"><input type="text" name="others1" style="width : 150px;"></td>
                    </tr>
                    <tr>
                        <td class="tg2"><input type="text" name="academics2" style="width : 150px;"></td>
                        <td class="tg2"><input type="text" name="curricular2" style="width : 150px;"></td>
                        <td class="tg2"><input type="text" name="co_curricular2" style="width : 150px;"></td>
                        <td class="tg2"><input type="text" name="extra_curricular2" style="width : 150px;"></td>
                        <td class="tg2"><input type="text" name="others2" style="width : 150px;"></td>
                    </tr>
                    <tr>
                        <td class="tg2"><input type="text" name="academics3" style="width : 150px;"></td>
                        <td class="tg2"><input type="text" name="curricular3" style="width : 150px;"></td>
                        <td class="tg2"><input type="text" name="co_curricular3" style="width : 150px;"></td>
                        <td class="tg2"><input type="text" name="extra_curricular3" style="width : 150px;"></td>
                        <td class="tg2"><input type="text" name="others3" style="width : 150px;"></td>
                    </tr>
                    <tr>
                        <td class="tg2"><input type="text" name="academics4" style="width : 150px;"></td>
                        <td class="tg2"><input type="text" name="curricular4" style="width : 150px;"></td>
                        <td class="tg2"><input type="text" name="co_curricular4" style="width : 150px;"></td>
                        <td class="tg2"><input type="text" name="extra_curricular4" style="width : 150px;"></td>
                        <td class="tg2"><input type="text" name="others4" style="width : 150px;"></td>
                    </tr>
                </table>

                <?php
			      	include "functions.php";
	            	insert();
                ?>

                    <center>
                        <article id="left_art">
                            Press the button below for registering !
                        </article><input type="submit" value="Submit" name="submit" id="form_submit" target="_blank">
                    </center>
            </form>
        </div>
    </body>

</html>

<!-- Developed by Saurav Bajracharya and Pramesh Bajracharya -->


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="shortcut icon" href="bvc.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="animate.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript">
        function checkedbox(element) {
            var checkboxes = document.getElementsByTagName('input');
            if (element.checked) {
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = true;
                    }
                }
            } else {
                for (var i = 0; i < checkboxes.length; i++) {
                    console.log(i)
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = false;
                    }
                }
            }
        }

    </script>
    <script src="js/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });

    </script>

</head>
 
                              
                
        <div class="clear"></div>

        
                    <div class="centralDiv" style="margin-left:5%;">
                        <?php 
                        
                        include('includes/config.php');

                        if(isset($_POST['check']) == true)
                        {

                            $subject = trim($_POST['subject']);
                            $message = trim($_POST['message']);
                            $from = 'pe.messh@gmail.com';
                            $reply = 'pe.messh@gmail.com';

                            foreach($_POST['check'] as $key => $value)
                            {
                                // Set content-type for sending HTML email
                                $headers = "BVC Engineering College" . "\r\n";
                                $headers .= "Odalarevu, Amalapuram" . "\r\n";
                                $headers .= "From: <".$from.">\r\n";
                                $headers .= "Reply-To: ".$reply."";
                                if(@mail($value,$subject,$message,$headers))
                                {
                                    echo '<div class="container-fluid" style="width:130%;">
                                          <div class="alert alert-success fade in">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
                                    echo '<strong>Success! </strong>';
                                    echo ' Mail has been Successfully sent to '.$value.'</br>';
                                    echo '</div></div>';
                                }
                            }
                        }

                        ?>
                        <div class="container-fluid" style="width:130%;">
                            <center>
                                <p>
                                    <h2>Please Select Students</h2>
                                </p><br><br>

                                <form method="post" action="">
                                    <?php

                            // Retrieve Email from Database
                            $getemail = mysql_query("SELECT * FROM profiles");

                            if (!$getemail) die('MySQL Error: ' . mysql_error());

                            echo '<table class="table table-bordered">';
                            echo "<thead>
                                  <tr>
                                  <th><input type='checkbox' onchange='checkedbox(this)' name='chk'/><h4> All</h4></th>
                                  <th><h4>Registration Number</h4></th>
                                  <th><h4>Student's Name</h4></th>
                                  <th><h4>E-mail</h4></th>
                                  </tr>
                                  </thead>";

                            if (mysql_num_rows($getemail) == 0) {
                            echo "<tbody><tr><td colspan='3'>No Data Avaialble</td></tr></tbody>";
                            }

                            while ($row = mysql_fetch_assoc($getemail)) {
                                echo "<tbody><tr><td><input value='".$row['email']."' type='checkbox' name='check[]'/></td>";
                                echo "<td >".$row['roll_no']."</td>";
                                echo "<td >".$row['name']."</td>";
                                echo "<td >".$row['email']."</td></tr></tbody>";
                            }
                            echo "</table>";
                            ?>
                                        <br><br>
                                        <p>Email Subject: <input type="text" name="subject" value="" class="form-control" /></p>
                                        <br><br>
                                        <p>Email Content: <textarea name="message" cols="40" rows="6"></textarea></p>
                                        <center><input type='submit' name='submit' value='Send Email Now' class="btn btn-primary btn-block" />
                                        </center>
                                        <br></form>
                        </div>
                    </div>
                </div>
                </center>
        </div>
        <footer id="footer">
            <h4 id="left">Copyright &copy; - <?php echo "20".date('y');?></h4>
            <h4 id="right">BVCEC</h4>
        </footer>
    </body>

</html>

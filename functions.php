<html>

<head>

    <style>
        #cust {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 98%;
        }
        
        #cust td,
        #cust th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        
        #cust tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        #cust tr:hover {
            background-color: #ddd;
        }
        
        #cust th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: burlywood;
            color: white;
        }

    </style>
</head>

</html>



<?php

// Creation of databaase , select DATABASE...

function create()
{
	$con = mysql_connect("localhost","root","");
    $create = "CREATE DATABASE info";
    $create_db = mysql_query($create);
    $db_name = "info";
    $select = mysql_select_db($db_name,$con);
    $create_table1 = "CREATE TABLE faculty
                    (name char(50),
                    dob date,
                    sex text(10),
                    father_name char(50),
                    address text(90),
                    email char(40),
                    mobile bigint(16),
                    aadhaar_id bigint(20),
                    uname varchar(30),
                    pwd varchar(30),
                    nationality text(30),
                    caste text(30),
                    qualifications text,
                    specialization text,
                    
                    members text,
					hobbies text
                    );";
    $create_table = "CREATE TABLE profiles
                    (roll_no varchar(10) PRIMARY KEY ,
                    name char(50),
                    dob date,
                    sex text(10),
                    father_name char(50),
                    address text(90),
                    email char(40),
                    mobile bigint(16),
                    aadhaar_id bigint(20),
                    father_mobile bigint(16),
                    uname varchar(30),
                    pwd varchar(30),
                    nationality text(30),
                    caste text(30),
                    th10 float,
                    sc2 float,
                    diploma float,
                    one_1 float,
                    two_1 float,
                    three_1 float,
                    four_1 float,
                    one_2 float,
                    two_2 float,
                    three_2 float,
                    four_2 float,
                    aggregate float,
                    attendance float,
                    members text,
					hobbies text,
                    academics1 text,
                    curricular1 text,
                    co_curricular1 text,
                    extra_curricular1 text,
                    others1 text,
                    academics2 text,
                    curricular2 text,
                    co_curricular2 text,
                    extra_curricular2 text,
                    others2 text,
                    academics3 text,
                    curricular3 text,
                    co_curricular3 text,
                    extra_curricular3 text,
                    others3 text,
                    academics4 text,
                    curricular4 text,
                    co_curricular4 text,
                    extra_curricular4 text,
                    others4 text
                    );";
    $table = mysql_query($create_table);
    $table1 = mysql_query($create_table1);
    mysql_close($con);
}

//Insertion in database....

function insert()
{
    $con =mysqli_connect("localhost","root","");
    mysqli_select_db($con,"info");

    if(isset($_POST['submit']))
    {
        $roll_no=$_POST['roll_no'];
        $name=$_POST['name'];
        $dob = $_POST['dob'];
        $sex = $_POST['sex'];
        $father_name=$_POST['father_name'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $aadhaar_id = $_POST['aadhaar_id'];
        $father_mobile=$_POST['father_mobile'];
        $uname=$_POST['uname'];
        $pwd=$_POST['pwd'];
        $nationality = $_POST['nationality'];
        $caste = $_POST['caste'];
        $th10 = $_POST['th10'];
        $sc2 = $_POST['sc2'];
        $diploma = $_POST['diploma'];
        $one_1 = $_POST['one_1'];
        $two_1 = $_POST['two_1'];
        $three_1 = $_POST['three_1'];
        $four_1 = $_POST['four_1'];
        $one_2 = $_POST['one_2'];
        $two_2 = $_POST['two_2'];
        $three_2 = $_POST['three_2'];
        $four_2 = $_POST['four_2'];
        $attendance = $_POST['attendance'];
        $members = $_POST['members'];
		$hobbies = $_POST['hobbies'];
        $academics1 = $_POST['academics1'];
        $academics2 = $_POST['academics2'];
        $academics3 = $_POST['academics3'];
        $academics4 = $_POST['academics4'];
        $curricular1 = $_POST['curricular1'];
        $curricular2 = $_POST['curricular2'];
        $curricular3 = $_POST['curricular3'];
        $curricular4 = $_POST['curricular4'];
        $co_curricular1 = $_POST['co_curricular1'];
        $co_curricular2 = $_POST['co_curricular2'];
        $co_curricular3 = $_POST['co_curricular3'];
        $co_curricular4 = $_POST['co_curricular4'];
        $extra_curricular1 = $_POST['extra_curricular1'];
        $extra_curricular2 = $_POST['extra_curricular2'];
        $extra_curricular3 = $_POST['extra_curricular3'];
        $extra_curricular4 = $_POST['extra_curricular4'];
        $others1 = $_POST['others1'];
        $others2 = $_POST['others2'];
        $others3 = $_POST['others3'];
        $others4 = $_POST['others4'];


        $sql="INSERT INTO profiles
        (roll_no,
        name,
        dob,
        sex,
        father_name,
        address,
        email,
        mobile,
        aadhaar_id,
        father_mobile,
        uname,
        pwd,
        nationality,
        caste,
        th10,
        sc2,
        diploma,
        one_1,
        two_1,
        three_1,
        four_1,
        one_2,
        two_2,
        three_2,
        four_2,
        attendance,
        members,
		hobbies,
        academics1,
        curricular1,
        co_curricular1,
        extra_curricular1,
        others1,
        academics2,
        curricular2,
        co_curricular2,
        extra_curricular2,
        others2,
        academics3,
        curricular3,
        co_curricular3,
        extra_curricular3,
        others3,
        academics4,
        curricular4,
        co_curricular4,
        extra_curricular4,
        others4
        )
 VALUES
        ('$roll_no',
        '$name',
        '$dob',
        '$sex',
        '$father_name',
        '$address',
        '$email',
        '$mobile',
        '$aadhaar_id',
        '$father_mobile',
        '$uname',
        '$pwd',
        '$nationality',
        '$caste',
        '$th10',
        '$sc2',
        '$diploma',
        '$one_1',
        '$two_1',
        '$three_1',
        '$four_1',
        '$one_2',
        '$two_2',
        '$three_2',
        '$four_2',
        '$attendance',
        '$members',
		'$hobbies',
        '$academics1',
        '$curricular1',
        '$co_curricular1',
        '$extra_curricular1',
        '$others1',
        '$academics2',
        '$curricular2',
        '$co_curricular2',
        '$extra_curricular2',
        '$others2',
        '$academics3',
        '$curricular3',
        '$co_curricular3',
        '$extra_curricular3',
        '$others3',
        '$academics4',
        '$curricular4',
        '$co_curricular4',
        '$extra_curricular4',
        '$others4'
        );";
        $result = mysqli_query($con,$sql) or die(mysqli_error($con));
        echo "<br> Data Registered ";
    }
    else" failed";
    mysqli_close($con);
}

//  View student details...

function details()
{
	$con =mysqli_connect("localhost","root","");
    mysqli_select_db($con,"info");
    $flag=0;
	$temp=0;
    $uname=strtoupper($_POST['uname']);
    $pwd=strtoupper($_POST['pwd']);
    $result = mysqli_query($con,"SELECT * FROM profiles");
     date_default_timezone_set('Asia/Calcutta');
     $today=date('m-d');
    
    while($row = mysqli_fetch_array($result))
    {
        $dayBirth = $row['dob'];
        $mmdd = substr($dayBirth,5);
        if($row['uname']==$uname && $row['pwd']==$pwd && $row['name']=="ADMIN")
		{
            echo "<br><br><h2 align = 'center'>";
			echo "Welcome admin";
            echo "</h2>";
			echo "<br><h4 align ='center'><a href='admin.php' style='color:#636363;text-align :center;'>Press here to continue!</a></h4>";
			$flag=2;


		}
        elseif($row['uname']==$uname && $row['pwd']==$pwd)
        {
			//for cumulative percentage starts

			if($row['one_1']==0)
					$row['aggregate']=0;
			elseif($row['one_2']==0)
					$row['aggregate']=$row['one_1']/1;
			elseif($row['two_1']==0)
					$row['aggregate']=($row['one_1']+$row['one_2'])/2;
			elseif($row['two_2']==0)
					$row['aggregate']=($row['one_1']+$row['one_2']+$row['two_1'])/3;
			elseif($row['three_1']==0)
					$row['aggregate']=($row['one_1']+$row['one_2']+$row['two_1']+$row['two_2'])/4;
			elseif($row['three_2']==0)
					$row['aggregate']=($row['one_1']+$row['one_2']+$row['two_1']+$row['two_2']+$row['three_1'])/5;
			elseif($row['four_1']==0)
					$row['aggregate']=($row['one_1']+$row['one_2']+$row['two_1']+$row['two_2']+$row['three_1']+$row['three_2'])/6;
			elseif($row['four_2']==0)
					$row['aggregate']=($row['one_1']+$row['one_2']+$row['two_1']+$row['two_2']+$row['three_1']+$row['three_2']+$row['four_1'])/7;
			else
					$row['aggregate']=($row['one_1']+$row['one_2']+$row['two_1']+$row['two_2']+$row['three_1']+$row['three_2']+$row['four_1']+$row['four_2'])/8;
            
			$agg=$row['aggregate'];
			$sql = "UPDATE profiles SET aggregate='$agg' WHERE uname='$uname'";
			$ress = mysqli_query($con,$sql) or die(mysqli_error($con));

			//end

			//echo "<img src='uploads/".$row['roll_no']."' style = 'width : 200px; margin : 75px 0 -300px 950px;'>";
            echo "<div align=CENTER>";
            echo "<tr><th><br><br><h1 style = 'color: dimgray;font-size:16px;'> WELCOME : </td><td>" . $row['name'] . "</h1></td></tr><br><br>";
            if ($mmdd == $today)
            {
                echo "<h3 style ='margin-top:-160px;position:absolute;margin-left:40%;'>Many Many Happy Returns of The Day Mr ". $row['name']."</h3>";               
            }
			echo"</div>";
			echo "<div align=center>";
            $conv = $row['roll_no'];
            $roll=strtoupper($conv);
            echo "<img src='uploads/".$roll.".jpg' style = 'width:100px ;height :120px ;margin-left:340px;margin-top:-35px;position:absolute;'>";
			echo "<table border='0' cellspacing='1px'><br>";
            echo "<tr><th> Roll no</td><td>" . $row['roll_no'] . "</td></tr>";
			$temp=$row['roll_no'];
            echo "<tr><th> Name of student (As per SSC)</td><td>" . $row['name'] . "</td></tr>";
            echo "<tr><th> DOB</td><td>" . $row['dob'] . "</td></tr>";
            echo "<tr><th> Gender</td><td>" . $row['sex'] . "</td></tr>";
            echo "<tr><th> Father's name</td><td>" . $row['father_name'] . "</td></tr>";
            echo "<tr><th> Address</td><td>" . $row['address'] . "</td></tr>";
            echo "<tr><th> Email ID</td><td>" . $row['email'] . "</td></tr>";
            echo "<tr><th> Mobile No.</td><td>" . $row['mobile'] . "</td></tr>";
            echo "<tr><th> Aadhaar Id</td><td>" . $row['aadhaar_id'] . "</td></tr>";
            echo "<tr><th> Parent's Mobile No.</td><td>" . $row['father_mobile'] . "</td></tr>";
            echo "<tr><th> Nationality</td><td>" . $row['nationality'] . "</td></tr>";
            echo "<tr><th> Caste</td><td>" . $row['caste'] . "</td></tr>";
            echo "<tr><th> 10th</td><td>" . $row['th10'] . "</td></tr>";
            echo "<tr><th> +2Sc</td><td>" . $row['sc2'] . "</td></tr>";
            echo "<tr><th> Diploma</td><td>" . $row['diploma'] . "</td></tr>";
            echo "<tr style='background-color:white'><td colspan='2'><p id='achievements'><u>B.Tech Marks (in %)</u></p></td></tr>";
            echo "<tr><td>I-I</td><td>".$row['one_1']."</td></tr>";
            echo "<tr><td>I-II</td><td>".$row['one_2']."</td></tr>";
            echo "<tr><td>II-I</td><td>".$row['two_1']."</td></tr>";
            echo "<tr><td>II-II</td><td>".$row['two_2']."</td></tr>";
            echo "<tr><td>III-I</td><td>".$row['three_1']."</td></tr>";
            echo "<tr><td>III-II</td><td>".$row['three_2']."</td></tr>";
            echo "<tr><td>IV-I</td><td>".$row['four_1']."</td></tr>";
            echo "<tr><td>IV-II</td><td>".$row['four_2']."</td></tr>";
            echo "<tr><th>Cummulative percentage</td><td>".$row['aggregate']."</td></tr>";
            echo "<tr><th>Attendance %</td><td>".$row['attendance']."</td></tr>";
            echo "<tr><th>Member of </td><td>".$row['members']."</td></tr>";
            echo "<tr><th>Hobbies </td><td>".$row['hobbies']."</td></tr>";
            echo "<tr><td colspan='2'><p id='achievements'><u>Achievements</u></p></td></tr>";
            echo "<tr><td>Academic </td><td >".$row['academics1']."</td></tr>";
            echo "<tr><td>Curricular</td><td>".$row['curricular1']."</td></tr>";
            echo "<tr><td>Co-curricular</td><td>".$row['co_curricular1']."</td></tr>";
            echo "<tr><td>ExtraCurricular</td><td>".$row['extra_curricular1']."</td></tr>";
            echo "<tr><td>Others</td><td>".$row['others1']."</td></tr>";




            echo "</table>";
            echo"</div>";

            //Table academics ends ...
            $flag=1;
        }
    }
	mysqli_select_db($con,"image");
    $result = mysqli_query($con,"SELECT * FROM image");
    if($flag==0)
    {
        echo "<table border='0' cellspacing='30px'><br>";
        echo "<tr><td> <center>The username and password didnot match or is not registered in the database</center></td></tr>";
        echo "</table>";
    }
    mysqli_close($con);
}




// Importing Data From Excel Sheet...

function import()                                         // Function made for excel import only...
{
    $conn = mysql_connect("localhost","root","");
    mysql_select_db("info",$conn);
    if(isset($_POST["submit"]))
    {
        $file = $_FILES['file']['tmp_name'];
        $handle = fopen($file, "r");
        $c = 0;
		$x=0;
        while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
        {
			$x++;
			if( $x==1 or $x==2)
				continue;
            $roll_no= $filesop[0];
            $name= $filesop[1];
            $dob = $filesop[2];
            $sex = $filesop[3];
            $father_name=$filesop[4];
            $address=$filesop[5];
            $email=$filesop[6];
            $mobile=$filesop[7];
            $aadhaar_id = $filesop[8];
            $father_mobile=$filesop[9];
            $uname=$filesop[0];
            $pwd=$filesop[0];
            $nationality =$filesop[12];
            $caste = $filesop[13];
            $th10 =$filesop[14];
            $sc2 = $filesop[15];
            $diploma = $filesop[16];
            $one_1 =$filesop[17];
            $two_1 = $filesop[18];
            $three_1 =$filesop[19];
            $four_1 = $filesop[20];
            $one_2 =$filesop[21];
            $two_2 =$filesop[22];
            $three_2 =$filesop[23];
            $four_2 = $filesop[24];
            $attendance =$filesop[25];
            $members =$filesop[26];
            $academics1 =$filesop[27];
            $academics2 = $filesop[28];
            $academics3 = $filesop[29];
            $academics4 =$filesop[30];
            $curricular1 =$filesop[31];
            $curricular2 = $filesop[32];
            $curricular3 = $filesop[33];
            $curricular4 = $filesop[34];
            $co_curricular1 = $filesop[35];
            $co_curricular2 =$filesop[36];
            $co_curricular3 =$filesop[37];
            $co_curricular4 = $filesop[38];
            $extra_curricular1 = $filesop[39];
            $extra_curricular2 = $filesop[40];
            $extra_curricular3 = $filesop[41];
            $extra_curricular4 =$filesop[42];
            $others1 = $filesop[43];
            $others2 =$filesop[44];
            $others3 = $filesop[45];
            $others4 = $filesop[46];
            $aggregate = $filesop[47];
            $hobbies = $filesop[48];


            $sql_insert="INSERT INTO profiles
            (roll_no,
            name,
            dob,
            sex,
            father_name,
            address,
            email,
            mobile,
            aadhaar_id,
            father_mobile,
            uname,
            pwd,
            nationality,
            caste,
            th10,
            sc2,
            diploma,
            one_1,
            two_1,
            three_1,
            four_1,
            one_2,
            two_2,
            three_2,
            four_2,
            aggregate,
            attendance,
            members,
            hobbies,
            academics1,
            curricular1,
            co_curricular1,
            extra_curricular1,
            others1,
            academics2,
            curricular2,
            co_curricular2,
            extra_curricular2,
            others2,
            academics3,
            curricular3,
            co_curricular3,
            extra_curricular3,
            others3,
            academics4,
            curricular4,
            co_curricular4,
            extra_curricular4,
            others4
            )
     VALUES
            ('$roll_no',
            '$name',
            '$dob',
            '$sex',
            '$father_name',
            '$address',
            '$email',
            '$mobile',
            '$aadhaar_id',
            '$father_mobile',
            '$uname',
            '$pwd',
            '$nationality',
            '$caste',
            '$th10',
            '$sc2',
            '$diploma',
            '$one_1',
            '$two_1',
            '$three_1',
            '$four_1',
            '$one_2',
            '$two_2',
            '$three_2',
            '$four_2',
            '$aggregate',
            '$attendance',
            '$members',
            '$hobbies',
            '$academics1',
            '$curricular1',
            '$co_curricular1',
            '$extra_curricular1',
            '$others1',
            '$academics2',
            '$curricular2',
            '$co_curricular2',
            '$extra_curricular2',
            '$others2',
            '$academics3',
            '$curricular3',
            '$co_curricular3',
            '$extra_curricular3',
            '$others3',
            '$academics4',
            '$curricular4',
            '$co_curricular4',
            '$extra_curricular4',
            '$others4'
            );";
            $c = $c + 1;
            $sql = mysql_query($sql_insert) or die(mysql_error());
        }

        if($sql){
            echo "<br><br>You database has imported successfully. You have inserted $c records";
        }
        else{
            echo "<br><br>Sorry! There is some problem in the file. Please recheck and upload again.";
        }
    }
}
function import2()
{
    $conn = mysql_connect("localhost","root","");
    mysql_select_db("info",$conn);
    if(isset($_POST["submit"]))
    {
        $file = $_FILES['file']['tmp_name'];
        $handle = fopen($file, "r");
        $c = 0;
		$x=0;
        while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
        {
			$x++;
			if( $x==1 or $x==2)
				continue;
            $regulation= $filesop[0];
            $branch= $filesop[1];
            $year = $filesop[2];
            $sem = $filesop[3];
            $roll_no=$filesop[4];
            $subject=$filesop[5];
	    $internal=$filesop[6];
	    $external=$filesop[7];
            $marks=$filesop[8];
            $status=$filesop[9];


            $sql_insert="INSERT INTO backlogs
            (regulation,
            branch,
            year,
            sem,
            roll_no,
            subject,
	    internal,
	    external,
            marks,
            status
           
            )
     VALUES
            ('$regulation',
            '$branch',
            '$year',
            '$sem',
            '$roll_no',
            '$subject',
	    '$internal',
	    '$external',
            '$marks',
            '$status'
            );";
            $c = $c + 1;
            $sql = mysql_query($sql_insert) or die(mysql_error());
        }

        if($sql){
            echo "<br><br>You database has imported successfully. You have inserted $c records";
        }
        else{
            echo "<br><br>Sorry! There is some problem in the file. Please recheck and upload again.";
        }
    }
}

// Base overview of a table to admin ... some info present ...

function stu_table()
{
        $con =mysqli_connect("localhost","root","");
        mysqli_select_db($con,"info");
        $flag=0;
        $result = mysqli_query($con,"SELECT * FROM profiles ORDER BY roll_no");
        echo "<table id = 'cust'>
		<tr>
			<th> Roll no</th>
			<th> Name of student (As per SSC)</th>
			<th> Aggregate Percentage</th>
			<th> Father's name</th>
			<th> Email Address</th>
			<th> Mobile No.</th>
			<th> Parent's Mobile No.</th>
            <th> Details</th>
		</tr>
        <br>";

        while($row = mysqli_fetch_array($result))
        {
			if ( $row['name']=='ADMIN')
			continue;
			echo "<tr><td>" . $row['roll_no'] . "</td><td>" . $row['name'] . "</td><td>" . $row['aggregate'] . "</td><td>" . $row['father_name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['mobile'] . "</td><td>" . $row['father_mobile'] . "</td><td style = 'background-color:darkgray;'><a href='details_admin.php?roll_no=".$row['roll_no']."''>View Full Details</a></td></tr>";
		}

      	echo "</table>";
        mysqli_close($con);
}

// Details seen by admin ....

function details_admin()
{
    $con =mysqli_connect("localhost","root","");
    mysqli_select_db($con,"info");
    $flag=0;
    $roll_no=$_REQUEST['roll_no'];
    $result = mysqli_query($con,"SELECT * FROM profiles");
    $today = date('m-d');

    while($row = mysqli_fetch_array($result))
    {

        if($row['roll_no']==$roll_no)
        {


            echo "<div align=CENTER>";
            echo "<tr><th>Welcome <label style='color:blue;'>" . $row['name'] . "</label></td></tr><br><br>";
            if ($row['dob'] == $today)
            {
                echo "<p style ='margin-top:-100px;position:absolute;margin-left:70%;'>Many Many Happy Returns of The Day Mr ". $row['name']."</p>";               
            }
            echo"</div>";
            echo "<div align=center>";
            echo "<img src='uploads/".$row['roll_no'].".jpg' style = 'width:100px ;height :120px ;margin-left:340px;margin-top:-35px;position:absolute;'>";
            echo "<table border='0' cellspacing='1px'><form class='form form--login' action='details_update.php' method='POST'<br>";

            echo "<br><br><tr><th> Roll Number</td><td><input class='loginName' type='text' class='form__input' name='roll_no'  value='".$row['roll_no'] ."'></td></tr>";
            $temp=$row['roll_no'];
           

            echo "<tr><th> Name of student (As per SSC)</td><td><input class='loginName' type='text' class='form__input' value='".$row['name'] ."' name='name' ></td></tr>";
            echo "<tr><th> DOB</td><td><input class='loginName' type='text' class='form__input' value='"       .$row['dob'] ."' name='dob'  ></td></tr>";
            echo "<tr><th> Gender</td><td><input class='loginName' type='text' class='form__input' value='"       .$row['sex'] ."' name='sex'  ></td></tr>";
            echo "<tr><th> Father's Name</td><td><input class='loginName' type='text' class='form__input' value='"    .$row['father_name'] . "'  name='father_name'  ></td></tr>";
            echo "<tr><th> Address</td><td><input class='loginName' type='text' class='form__input' value='"       .$row['address'] ."'  name='address' ></td></tr>";
            echo "<tr><th> Email.</td><td><input class='loginName' type='text' class='form__input' value='"       .$row['email'] ."'  name='email' ></td></tr>";
            echo "<tr><th> Mobile No.</td><td><input class='loginName' type='text' class='form__input' value='"       .$row['mobile'] ."' name='mobile' ></td></tr>";
            echo "<tr><th> Aadhaar Id</td><td><input class='loginName' type='text' class='form__input' value='"       .$row['aadhaar_id'] ."' name='aadhaar_id' ></td></tr>";
            echo "<tr><th> Father's Mobile Number</td><td><input class='loginName' type='text' class='form__input' value='".$row['father_mobile'] ."' name='father_mobile'  ></td></tr>";
            echo "<tr><th> Username</td><td><input class='loginName' type='text' class='form__input' value='"       .$row['uname'] ."' name='uname' ></td></tr>";
            echo "<tr><th> Password</td><td><input class='loginName' type='text' class='form__input' value='"       .$row['pwd'] ."'  name='pwd'  ></td></tr>";
            echo "<tr><th> Nationality</td><td><input class='loginName' type='text' class='form__input' value='"       .$row['nationality'] ."'   name='nationality' ></td></tr>";
            echo "<tr><th> Caste</td><td><input class='loginName' type='text' class='form__input' value='"       .$row['caste'] ."'    name='caste' ></td></tr>";
            echo "<tr><th> 10th</td><td><input class='loginName' type='text' class='form__input' value='"       .$row['th10'] ."'   name='th10' ></td></tr>";
            echo "<tr><th> +2Sc</td><td><input class='loginName' type='text' class='form__input' value='"       .$row['sc2'] ."'   name='sc2'  ></td></tr>";
            echo "<tr><th> Diploma or +3Sc</td><td><input class='loginName' type='text' class='form__input' value='"       .$row['diploma'] ."' name='diploma' ></td></tr>";
           


            echo "<tr><td colspan='2'><p id='achievements'><u>B.Tech Marks (in %)</u></p></td></tr>";
            echo "<tr><td>I-I</td><td><input class='loginName' type='text' class='form__input' type='text' value='".$row['one_1'] ."' name='one_1' ></td></tr>";
            echo "<tr><td>I-II</td><td><input class='loginName' type='text' class='form__input' type='text' value='".$row['one_2'] ."' name='one_2' ></td></tr>";
            echo "<tr><td>II-I</td><td><input class='loginName' type='text' class='form__input' type='text' value='".$row['two_1'] ."' name='two_1' ></td></tr>";
            echo "<tr><td>II-II</td><td><input class='loginName' type='text' class='form__input' type='text' value='".$row['two_2'] ."' name='two_2' ></td></tr>";
            echo "<tr><td>III-I</td><td><input class='loginName' type='text' class='form__input' type='text' value='".$row['three_1'] ."' name='three_1' ></td></tr>";
            echo "<tr><td>III-II</td><td><input class='loginName' type='text' class='form__input' type='text' value='".$row['three_2'] ."' name='three_2' ></td></tr>";
            echo "<tr><td>IV-I</td><td><input class='loginName' type='text' class='form__input' type='text' value='".$row['four_1'] ."' name='four_1' ></td></tr>";
            echo "<tr><td>IV-II</td><td><input class='loginName' type='text' class='form__input' type='text' value='".$row['four_2'] ."' name='four_2' ></td></tr>";

            echo "<tr><th> Cummulative Percentage</td><td><input class='loginName' type='text' class='form__input' value='".$row['aggregate'] ."' name='aggregate' ></td></tr>";
            echo "<tr><th> Attendance</td><td><input class='loginName' type='text' class='form__input' value='"       .$row['attendance'] ."' name='attendace' ></td></tr>";
            echo "<tr><th>Member of </td><td><input class='loginName' type='text' class='form__input' value='"       .$row['members']."' name='members' ></td></tr>";
            echo "<tr><th>Hobbies </td><td><input class='loginName' type='text' class='form__input' value='"       .$row['hobbies']."' name='hobbies' ></td></tr>";

            echo "<tr><td colspan='2'><p id='achievements'><u>Achievements</u></p></td></tr>";

            echo "<tr><td>Academic </td><td><input class='loginName' type='text' class='form__input' value='".$row['academics1']."' name='academics1' ></td></tr>";
            echo "<tr><td>Curricular</td><td><input class='loginName' type='text' class='form__input' value='".$row['curricular1']."' name='curricular1' ></td></tr>";
            echo "<tr><td>Co-curricular</td><td><input class='loginName' type='text' class='form__input' value='".$row['co_curricular1']."' name='co_curricular1' ></td></tr>";
            echo "<tr><td>ExtraCurricular</td><td><input class='loginName' type='text' class='form__input' value='".$row['extra_curricular1']."' name='extra_curricular1' ></td></tr>";
            echo "<tr><td>Others</td><td><input class='loginName' type='text' class='form__input' value='".$row['others1']."' name='others1' ></td></tr>";
            

            echo "</table>";
echo"</div>";



            $flag=1;
        }

    }
   /* mysqli_select_db($con,"image");
    $result = mysqli_query($con,"SELECT * FROM image");
    while($row = mysqli_fetch_array($result))
    {

        if($row['regdno']== $temp.'.jpg' && $flag!=2)
		{
			echo "<div class = 'image_upload'><img src='".$row['image']."' style = 'margin : 0 0 0 200px;'></div>";
		}
	}
    */
    if($flag==0)
    {
        echo "<p style = 'margin : 150px 0 0 50px;'><center>The roll number is not registered in the database</p></center>";
    }
    echo "<input type = 'submit' name  = 'submitForm' value = 'Update' style = 'margin:20px 0 0 50%;position:absolute;width:90px;height:50px;border-radius:20px;background-color:firebrick;' >";
    echo "</form></table>";
	mysqli_close($con);

}


// Update that can be done by admin only...

function admin_update()
{
	$con =mysqli_connect("localhost","root","");
    mysqli_select_db($con,"info");
	$cuname=$_POST['cuname'];
	$cpwd=$_POST['cpwd'];
	$nuname=$_POST['nuname'];
	$npwd=$_POST['npwd'];
	$flag=0;

	$result = mysqli_query($con,"SELECT * FROM profiles");
	while($row = mysqli_fetch_array($result))
	{

		if($cuname==$row['uname'] && $cpwd==$row['pwd'] && $row['name']=="admin")
		{
			$sql = "UPDATE profiles SET  uname='$nuname', pwd='$npwd' WHERE name='admin' ";


			$ress = mysqli_query($con,$sql) or die(mysqli_error($con));
			echo "<br> <br><br>password/username changed successfylly ";
			$flag=1;
		}
	}
	if($flag==0)
		echo "<br><br><br><br><br> RESULT NOT FOUND <br>  Please try again!";
	mysqli_close($con);
}

// Details that admin updates...

function details_update()
{
	$con =mysqli_connect("localhost","root","");
	mysqli_select_db($con,"info");
    $roll_no=$_POST['roll_no'];
    $name=$_POST['name'];
    $dob = $_POST['dob'];
    $sex = $_POST['sex'];
    $father_name=$_POST['father_name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $aadhaar_id = $_POST['aadhaar_id'];
    $father_mobile=$_POST['father_mobile'];
    $uname=$_POST['uname'];
    $pwd=$_POST['pwd'];
    $nationality = $_POST['nationality'];
    $caste = $_POST['caste'];
    $th10 = $_POST['th10'];
    $sc2 = $_POST['sc2'];
    $diploma = $_POST['diploma'];
    $one_1 = $_POST['one_1'];
    $two_1 = $_POST['two_1'];
    $three_1 = $_POST['three_1'];
    $four_1 = $_POST['four_1'];
    $one_2 = $_POST['one_2'];
    $two_2 = $_POST['two_2'];
    $three_2 = $_POST['three_2'];
    $four_2 = $_POST['four_2'];
	$agg=$_POST['aggregate'];
    $attendance = $_POST['attendace'];
    $members = $_POST['members'];
	$hobbies = $_POST['hobbies'];
    $academics1 = $_POST['academics1'];
    /*$academics2 = $_POST['academics2'];
    $academics3 = $_POST['academics3'];
    $academics4 = $_POST['academics4'];*/
    $curricular1 = $_POST['curricular1'];
    /*$curricular2 = $_POST['curricular2'];
    $curricular3 = $_POST['curricular3'];
    $curricular4 = $_POST['curricular4'];*/
    $co_curricular1 = $_POST['co_curricular1'];
    /*$co_curricular2 = $_POST['co_curricular2'];
    $co_curricular3 = $_POST['co_curricular3'];
    $co_curricular4 = $_POST['co_curricular4'];*/
    $extra_curricular1 = $_POST['extra_curricular1'];
    /*$extra_curricular2 = $_POST['extra_curricular2'];
    $extra_curricular3 = $_POST['extra_curricular3'];
    $extra_curricular4 = $_POST['extra_curricular4'];*/
    $others1 = $_POST['others1'];
    /*$others2 = $_POST['others2'];
    $others3 = $_POST['others3'];
    $others4 = $_POST['others4'];*/
    if($_POST['one_1']==0)
			$_POST['aggregate']=0;
	elseif($_POST['one_2']==0)
			$_POST['aggregate']=$_POST['one_1']/1;
	elseif($_POST['two_1']==0)
			$_POST['aggregate']=($_POST['one_1']+$_POST['one_2'])/2;
	elseif($_POST['two_2']==0)
			$_POST['aggregate']=($_POST['one_1']+$_POST['one_2']+$_POST['two_1'])/3;
	elseif($_POST['three_1']==0)
			$_POST['aggregate']=($_POST['one_1']+$_POST['one_2']+$_POST['two_1']+$_POST['two_2'])/4;
	elseif($_POST['three_2']==0)
			$_POST['aggregate']=($_POST['one_1']+$_POST['one_2']+$_POST['two_1']+$_POST['two_2']+$_POST['three_1'])/5;
	elseif($_POST['four_1']==0)
			$_POST['aggregate']=($_POST['one_1']+$_POST['one_2']+$_POST['two_1']+$_POST['two_2']+$_POST['three_1']+$_POST['three_2'])/6;
	elseif($_POST['four_2']==0)
			$_POST['aggregate']=($_POST['one_1']+$_POST['one_2']+$_POST['two_1']+$_POST['two_2']+$_POST['three_1']+$_POST['three_2']+$_POST['four_1'])/7;
	else
			$_POST['aggregate']=($_POST['one_1']+$_POST['one_2']+$_POST['two_1']+$_POST['two_2']+$_POST['three_1']+$_POST['three_2']+$_POST['four_1']+$_POST['four_2'])/8;
	$agg=$_POST['aggregate'];
	$sql = "UPDATE profiles SET name='$name', dob='$dob', sex='$sex', father_name='$father_name', address='$address', email='$email',  mobile='$mobile', aadhaar_id='$aadhaar_id', father_mobile='$father_mobile',  uname='$uname', pwd='$pwd', nationality='$nationality', caste='$caste', th10='$th10', sc2='$sc2', diploma='$diploma',  attendance='$attendance', one_1='$one_1', two_1='$two_1', three_1='$three_1', four_1='$four_1', one_2='$one_2', two_2='$two_2', three_2='$three_2', four_2='$four_2', aggregate='$agg', members='$members', hobbies='$hobbies',academics1='$academics1',curricular1='$curricular1',co_curricular1='$co_curricular1',extra_curricular1='$extra_curricular1'   
	WHERE roll_no='$roll_no'";
    $ress = mysqli_query($con,$sql) or die(mysqli_error($con));
    echo "<center><br><br><br><br><br><br> Data Registered </center>";
    mysqli_close($con);
}

// Full editable table displayed ...

function stu_table_criteria()
{
    $con =mysqli_connect("localhost","root","");
    mysqli_select_db($con,"info");
    $flag=0;
	$field_1=$_POST['field_1'];
    $result = mysqli_query($con,"SELECT * FROM profiles");
    echo "<table id = 'stutable'>
	<tr>
	<th> Roll no</td>
	<th> Name of student (As per SSC)</td>
	<th> DOB</td>
	<th> Father's name</td>
	<th> Address</td>
	<th> Mobile No.</td>
	<th> Parent's Mobile No.</td>
	</tr>
    <br>";

    while($row = mysqli_fetch_array($result))
    {
		if($row['aggregate']>$field_1)

            echo "<tr><td>" . $row['roll_no'] . "</td><td>" . $row['name'] . "</td><td>" . $row['dob'] . "</td><td>" . $row['father_name'] . "</td><td>" . $row['address'] . "</td><td>" . $row['mobile'] . "</td><td>" . $row['father_mobile'] . "</td><td><a href='details_admin.php?roll_no=".$row['roll_no']."'>View Full Details</a></td></tr>";
    }

    echo "</table>";

    mysqli_close($con);
}

// Function to upload photo ...

function upload()
{
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $regdno = basename($_FILES["fileToUpload"]["name"]);
    $con =mysql_connect("localhost","root","");
    $img = "image";
    mysql_select_db($img,$con);

    // Check if image file is a actual image or fake image

    if(isset($_POST["submit"]))
    {
        $sql = "INSERT INTO image(regdno,image) VALUES ('$regdno','$target_file');";
        $query = mysql_query($sql);

        //Photo processing job from here on....

        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
        echo "File is an image - <br><br> " . $check["mime"] . ".";
        $uploadOk = 1;
    	} else {
        echo "File is not an image.<br><br>";
            $uploadOk = 0;
        }
    }

    // Check if file already exists

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.<br><br>";
        $uploadOk = 0;
    }

    // Check file size

    if ($_FILES["fileToUpload"]["size"] > 50000) {
        echo "Sorry, your file is too large.<br><br>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.<br><br>";


    // if everything is ok, try to upload file

    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br>Please go back and fill the form. Thank you!<br>";
        } else {
            echo "Sorry, there was an error uploading your file.<br><br>";
        }
    }
}

// Function for email sending ...

function emailSend()
{
	$con = mysql_connect("localhost","root","");
	mysql_select_db("info") or die(mysql_error());
	if(isset($_POST["submit"]))
	{
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$emailRegd = $_POST['emailRegd'];
		$from = "FROM: bvcec@org for all";    // Additional details here if needed ...
		// $selectQuery = "Select email FROM info WHERE roll_no = $emailRegd";
		// mail($selectQuery,$subject,$message,$from) or die("There 1".mysql_error());
		mail($emailRegd,$subject,$message,$from) or die("Here 2".mysql_error());
	}
	mysql_close();
}


/*   Not a compulsory thing ....


function backlog()
{
        $con =mysqli_connect("localhost","root","");
        mysqli_select_db($con,"info");
        $flag=0;
        $result = mysqli_query($con,"SELECT * FROM backlog ORDER BY roll_no");
	if (isset($_POST['submit']))
        echo "<table id = 'cust'>
		<tr>
			<th> Regulation</th>
			<th> Branch</th>
			<th> Year</th>
			<th> Semester</th>
			<th> Registration Number</th>
			<th> Subject</th>
			<th> Status </th>
		</tr>
        <br>";

        while($row = mysqli_fetch_array($result))
        {
			if ( $row['name']=="admin")
			continue;
			echo "<tr><td>" . $row['roll_no'] . "</td><td>" . $row['name'] . "</td><td>" . $row['aggregate'] . "</td><td>" . $row['father_name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['mobile'] . "</td><td>" . $row['father_mobile'] . "</td><td style = 'background-color:darkgray;'><a href='details_admin.php?roll_no=".$row['roll_no']."''>View Full Details</a></td></tr>";
		}

      	echo "</table>";
        mysqli_close($con);
}*/
?>

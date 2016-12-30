

<html>
<head>

<style>
#cust {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
    margin:20px 0 0 0;
}

#cust td, #cust th {
    padding: 8px;
}

#cust tr:nth-child(even){background-color: #f2f2f2;}

#cust tr:hover {background-color: #ddd;}

#cust th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: burlywood;
    color: white;
}
h1
{
    font-size: 16px;
    line-height: 10px;
}
th,td
{
    font-size: 14px;
    text-align: left;
    max-width: 300px;
}
</style></head></html>

<?php
function st_table()
{

echo "<br><h1>TECHNECIAL STAFF</h1>";
        $con =mysqli_connect("localhost","id435190_bvcecweb99999999","bvcecweb99999999");
        mysqli_select_db($con,"id435190_info");
        $flag=0;
        $result = mysqli_query($con,"SELECT * FROM st");
        echo "<table id = 'cust' align = 'center' border = '1' cellspacing = '0' cellpadding = '0' width = '70'>
		<tr>
			<th>Sl. no</th>
			<th>Name of The Staff</th>

		</tr>
        <br>";

        while($row = mysqli_fetch_array($result))
        {
			
			echo "<tr><td style = 'color : black'>" . $row['no'] . "</td><td><a href='details_os.php?no=".$row['no']."'' style = 'color : dimgray'>". $row['nos'] . "</a></td></tr>";
		}

      	echo "</table>";
        mysqli_close($con);

echo "<br><br><br><br> NON-TECHNECIAL STAFF";

        $con =mysqli_connect("localhost","id435190_bvcecweb99999999","bvcecweb99999999");
        mysqli_select_db($con,"id435190_info");
        $flag=0;
        $result = mysqli_query($con,"SELECT * FROM nonst");
        echo "<table id = 'cust' align = 'center' border = '1' cellspacing = '0' cellpadding = '0' width = '700'>
			<th>Sl. no</th>
			<th>Name of The Staff</th>

		</tr>
        <br>";

        while($row = mysqli_fetch_array($result))
        {
			
			echo "<tr><td style = 'color : black'>" . $row['no'] . "</td><td><a href='details_nos.php?no=".$row['no']."'' style = 'color : dimgray'>". $row['nnos'] . "</a></td></tr>";
		}

      	echo "</table>";
        mysqli_close($con);
}

function details_admin()
{
    $con =mysqli_connect("localhost","id435190_bvcecweb99999999","bvcecweb99999999");
    mysqli_select_db($con,"id435190_info");
    $flag=0;
    $no=$_REQUEST['no'];
    $result = mysqli_query($con,"SELECT * FROM st");

    while($row = mysqli_fetch_array($result))
    {
        if($row['no']==$no)
        {



            echo "Welcome <label style='color:blue;'>".$row['nos']."</label>";
            echo "<br>";
            echo "<table id = 'cust' align = 'center'  cellspacing = '1px' cellpadding = '0' width = '700'>
            <tr><th>Employee ID.</th><td>".$row['no'] ."</td><td rowspan=4><img width='100px' height ='120px' src='cse/".$row['no'].".jpg'></td></tr>";
            echo "
            <tr><th>Name of Staff</th><td>".$row['nos'] ."</td></tr>";
            echo "
            <tr><th>Qualification</th><td>".$row['qua'] ."</td></tr>";
            echo "
            <tr><th>Designation</th><td>".$row['des'] ."</td></tr>";
            /*echo "
            <tr><th>Department</th><td>".$row['department'] ."</td></tr>";
            echo "
            <tr><th>Date of Birth</th><td>".$row['dateofbirth'] ."</td></tr>";
            echo "
            <tr><th>Date of Joining</th><td>".$row['dateofjoining'] ."</td></tr>";
            */
            echo "
            <tr><th>Specialisation</th><td>".$row['spe'] ."</td></tr>";
            /*echo "
            <tr><th>Experience</th><td>".$row['experience'] ."</td></tr>";

            echo "
            <tr><th>Subject Taught</th><td>".$row['subjecttaught'] ."</td></tr>";
            echo "
            <tr><th>No. of Publication</th><td>".$row['nopublications'] ."</td></tr>";
            echo "
            <tr><th>Books Authored</th><td>".$row['books_monogram'] ."</td></tr>";
            echo "
            <tr><th>Guest Lectures Delivered</th><td>".$row['guestlecture_resouceperson'] ."</td></tr>";
            echo "
            <tr><th>Email Id</th><td>".$row['emailid'] ."</td></tr>";
            echo "
            <tr><th>Mobile No.</th><td>".$row['mobileno'] ."</td></tr>";
            */
        
   
			
			$temp = $row['no'];

            echo "</table>";
            
        }

    }
}

function nondetails_admin()
{
    $con =mysqli_connect("localhost","id435190_bvcecweb99999999","bvcecweb99999999");
    mysqli_select_db($con,"id435190_info");
    $flag=0;
    $no=$_REQUEST['no'];
    $result = mysqli_query($con,"SELECT * FROM nonst");
echo "<table id = 'cust' align = 'center' border = '1' cellspacing = '0' cellpadding = '0' width = '700'>
			<th>Sl. no</th>
			<th>Name of Staff</th>

			<th>Photo</th>
			<th>Qualification</th>
			<th>Designation</th>
			<th>Specialisation</th>
		</tr>
        <br>";
    while($row = mysqli_fetch_array($result))
    {
        if($row['no']==$no)
        {
        
			echo "<br><tr><td>".$row['no'] ."</td>";
            
			echo "<td>".$row['nnos'] ."</td>";
            
			
                echo"<td></td>";
			echo "<td>".$row['nqua'] ."</td>";
            
			echo "<td>".$row['ndes'] ."</td>";
            
			echo "<td>".$row['nspe'] ."</td></tr>";
            
			
			$temp = $row['no'];

			//Beginning new table here...

			echo "</table>";
        }

    }
}



?>


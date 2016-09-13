<style>
body{ 
    background: url(background.png) no-repeat center center fixed;
    -webkit-background-size: cover;
    /* For WebKit*/
    -moz-background-size: cover;
    /* Mozilla*/
    -o-background-size: cover;
    /* Opera*/
    font: 400 0.875rem/1.5 "Open Sans", sans-serif;
    min-height: 100%;
    background-size: cover;
    font-weight: bold;
    font: 400 0.875rem/1.5 "Open Sans", sans-serif;
    margin: 0;
    min-height: 100%;
    font-weight: bold;
}
	</style>



<?php
include('connec.php');
$epr='';
$msg='';
if(isset($_GET['epr']))
$epr=$_GET['epr'];
if($epr=='save')
{
	$nos=$_POST['nos'];	
	$qua=$_POST['qua'];
	$des=$_POST['des'];
	$spe=$_POST['spe'];
	$ide=$_POST['ro'];
	
	
	
	$a_sql=mysql_query("INSERT INTO st VALUES('','$nos','$qua','$des','$spe')");
	if($a_sql)
	header("locaton:ustaff.php");
	else
		$msg='Error : '.mysql_error();
}
if($epr=='delete'){
	$ide=$_GET['ide'];
	$delete=mysql_query("DELETE FROM st where no=$ide");

	
}

if($epr=='saveup'){
		
	$nos=$_POST['nos'];	
	$qua=$_POST['qua'];
	$des=$_POST['des'];
	$spe=$_POST['spe'];
	$ide=$_POST['ro'];
	
	
	$a_sql=mysql_query("UPDATE st SET nos='$nos',qua='$qua',des='$des',spe='$spe' WHERE no='$ide'");
	
	
}


$sql=mysql_query("SELECT * FROM st");



?>
<html>
<head>

<style>
#cust {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 60%;
}

#cust td, #cust th {
    border: 1px solid #ddd;
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
</style>



<style>
.button {
  display: inline-block;
  padding: 7px 15px;
  font-size: 35px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: burlywood;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: firebrick}

.button:active {
  background-color: blue;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>



</head>
<body>






<?php

if($epr=='update'){

$ide=$_GET['ide'];
$row=mysql_query("SELECT * FROM st WHERE no='$ide'");
$st_row=mysql_fetch_array($row);
	?>
	
<h2 align="center" style="color: blue">UPDATE STAFF DETAILS</h2>
<form method="POST" action='ustaff.php?epr=saveup'>
<table align="center">

<tr>
<td>sl no:</td>
<td><input type='text' name='ro' value="<?PHP echo $st_row['no'] ?>"/></td>
</tr>


<tr>
<td>Name of Staff:</td>
<td><input type='text' name='nos' value="<?PHP echo $st_row['nos'] ?>"/></td>
</tr>



<tr>
<td>Qualification:</td>
<td><input type='text' name='qua' value="<?PHP echo $st_row['qua'] ?>"/></td>
</tr><tr>
<tr>
<td>Designation:</td>
<td><input type='text' name='des' value="<?PHP echo $st_row['des'] ?>"/></td>
</tr>

<tr>
<td>Specialisation</td>
<td><input type='text' name='spe' value="<?PHP echo $st_row['spe'] ?>"/></td>
</tr>

</table></div>
</br>
<tr>
<td></td>
<div align="center"><button class="button"><td><name='sb'></td>submit</button></div></br>
</br>
</br>
</br>
</br>
</br>

</tr>
</form>
	
<?php  }else{
?>



<?php } ?>





<h2 align="center" style="color: blue">WELCOME TO UPDATE STAFF DETAILS</h2>
<table id="cust" align="center" border="1" cellspacing="0" cellpadding="
0" width="700">
<thead>
<th>Name Of The Staff</th>
<th>Qualification</th>
<th>Designation</th>
<th>Specialisation</th>



<th>Action</th>
</thead>
<?php
$i=1;
while($row=mysql_fetch_array($sql)){
	echo"<tr>
	
	
	<td>".$row['nos']."</td>
	
	<td>".$row['qua']."</td>
	<td>".$row['des']."</td>
	
	<td>".$row['spe']."</td>
	
	
	<td align='center'>
	<a href='ustaff.php?epr=delete&ide=".$row['no']."'>DELETE</a>
	<a href='ustaff.php?epr=update&ide=".$row['no']."'>UPDATE</a>
	</td>
	
	</tr>";
}

?>



</table> <?php echo $msg; ?>

</br>
</br>
<form method="POST" action='admin.php'><center><button class="button"><name='stu'>Exit From Staff Details</button></form></br>

</br>


</body>
</html>



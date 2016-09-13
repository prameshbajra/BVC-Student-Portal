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
	$texto=$_POST['texto'];
	$textt=$_POST['textt'];
	$textth=$_POST['textth'];
	$textt=$_POST['textf'];
	$textth=$_POST['textfi'];
	
	
	
	$a_sql=mysql_query("INSERT INTO upfn VALUES('','$texto','$textt','$textth','$textf','$textfi')");
	if($a_sql)
	header("locaton:upf.php");
	else
		$msg='Error : '.mysql_error();
}
if($epr=='delete'){
	$ide=$_GET['ide'];
	$delete=mysql_query("DELETE FROM upfn where no=$ide");

	
}

if($epr=='saveup'){
		
	$texto=$_POST['texto'];	
	$textt=$_POST['textt'];
	$textth=$_POST['textth'];

	$textf=$_POST['textf'];
	$textfi=$_POST['textfi'];
	
	$ide=$_POST['ro'];
	
	
	$a_sql=mysql_query("UPDATE upfn SET texto='$texto',textt='$textt',textth='$textth',textf='$textf',textfi='$textfi' WHERE no='$ide'");
	
	
}


$sql=mysql_query("SELECT * FROM upfn");



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
$row=mysql_query("SELECT * FROM upfn WHERE no='$ide'");
$st_row=mysql_fetch_array($row);
	?>
	
<h2 align="center" style="color: blue">UPDATE FLASH NEWS</h2>
<form method="POST" action='upf.php?epr=saveup'>
<table align="center">

<tr>
<td>ID:</td>
<td><input type='text' name='ro' value="<?PHP echo $st_row['no'] ?>"/></td>
</tr>


<tr>
<td>1 line:</td>
<td><input type='text' name='texto' value="<?PHP echo $st_row['texto'] ?>"/></td>
</tr>



<tr>
<td>2 line:</td>
<td><input type='text' name='textt' value="<?PHP echo $st_row['textt'] ?>"/></td>
</tr><tr>
<tr>
<td>3 line:</td>
<td><input type='text' name='textth' value="<?PHP echo $st_row['textth'] ?>"/></td>
</tr>

<tr>
<td>4 line:</td>
<td><input type='text' name='textf' value="<?PHP echo $st_row['textf'] ?>"/></td>
</tr>
<tr>
<td>5 line:</td>
<td><input type='text' name='textfi' value="<?PHP echo $st_row['textfi'] ?>"/></td>
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





<h2 align="center" style="color: blue">WELCOME TO UPDATE FLASH NEWS PAGE</h2>
<table id="cust" align="center" border="1" cellspacing="0" cellpadding="
0" width="700">
<thead>
<th>1 line</th>
<th>2 line</th>
<th>3 line</th>
<th>4 line</th>
<th>5 line</th>



<th>Action</th>
</thead>
<?php
$i=1;
while($row=mysql_fetch_array($sql)){
	echo"<tr>
	
	
	<td>".$row['texto']."</td>
	
	<td>".$row['textt']."</td>
	<td>".$row['textth']."</td>
	
	<td>".$row['textf']."</td>
	<td>".$row['textfi']."</td>
	
	
	<td align='center'>
	<a href='upf.php?epr=delete&ide=".$row['no']."'>DELETE</a>
	<a href='upf.php?epr=update&ide=".$row['no']."'>UPDATE</a>
	</td>
	
	</tr>";
}

?>



</table> <?php echo $msg; ?>

</br>
</br>
<form method="POST" action='admin.php'><center><button class="button"><name='stu'>Exit From Udate Flash News Page</button></form></br>

</br>


</body>
</html>



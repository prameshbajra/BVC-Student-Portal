<?php
mysql_connect("localhost","id435190_bvcecweb99999999","") or die ("mysql connection failed");
mysql_select_db("ex") or die ("database selection failed"); 


ini_set('mysql.connect_timeout',300);
ini_set('default_socket_timeout',300);


if(isset($_POST['sumit']))
{
if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
{
echo"Please select an image.";
}
else
{
$image= addslashes($_FILES['image']['tmp_name']);
$name= addslashes($_FILES['image']['name']);
$image= file_get_contents($image);
$image= base64_encode($image);
saveimage($name,$image);
}
}
function saveimage($name,$image)
{
$con=mysql_connect("localhost","id435190_bvcecweb99999999","bvcecweb99999999");
mysql_select_db("ex",$con);
if($result)
{
echo"</br>Image uploaded.";
}
else
{
echo"</br>Image not uploaded please see wheather the given photo is in .jpg format";
}
}



$nameal = $_POST['nameal'];

$dob = $_POST['dob'];
$branch = $_POST['branch'];
$batch = $_POST['batch'];
$year = $_POST['year'];
$cpo = $_POST['cpo'];
$coww = $_POST['coww'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$aos = $_POST['aos'];
$username = $_POST['username'];
$password = $_POST['password'];





$sql = "insert into `al` values ('$No','$name','$image','$nameal',$dob,'$branch',$batch,$year,'$cpo','$coww','$email',$mobile,'$aos','$username','$password')";
if(mysql_query($sql)){
	
	echo"
		<script language='javascript'>;
		window.location.href='indoe.php';
		</script>
		";

}
else{
echo"<h1><center>Please enter all the columns (or) Enter the values correctly</center></h1>";
};


?>



<?php

ob_start();

// db properties
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','info');

// make a connection to mysql here
$conn = @mysql_connect (DBHOST, DBUSER, DBPASS);
$conn = @mysql_select_db (DBNAME);
if(!$conn){
	die( "Sorry! There seems to be a problem connecting to our database.");
}

//set timezone
date_default_timezone_set('Asia/Kolkata');

// define site path
define('DIR','http://localhost:8888/');


// define site title for top of the browser
define('SITETITLE','Send Emails');

?>

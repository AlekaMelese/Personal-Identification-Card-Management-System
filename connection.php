<?php
//$conn = @mysqli_connect("localhost", "root","");
//@mysqli_select_db("adigrat",$conn );


$dbhost= 'localhost';
$dbuser= 'root';
$dbpass= '';
$database= 'picms';
$bd= mysqli_connect($dbhost,$dbuser, $dbpass,$database);
if(!$bd)
{ 
die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully <br/>';
?>
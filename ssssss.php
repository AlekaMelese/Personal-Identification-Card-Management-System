<?php
$con = mysql_connect ("localhost", "root", "");
mysql_select_db ("adigrat", $con);
if(isset($_GET["search"])){
	$text=$_GET["text"];
	$sql=mysql_query("SELECT * FROM `resident` WHERE IdNo='$text'");
	echo mysql_error();
	while($row=mysql_fetch_array($sql)){
	echo"<table style='border:1'";
	echo"<tr>";
	echo"<th>IdNo</th>";
	echo"<th>FirstName</th>";
	echo"<th>LastName</th>";
	echo"<th>Sex</th>";
	echo"<th>Age</th>";
	echo"<th>Nationality</th>";
	echo"<th>PlaceOfBirth</th>";
	echo"<th>Region</th>";
	echo"<th>Zone</th>";
	echo"<th>Wereda</th>";
	echo"<th>Kebele</th>";
	echo"<th>dob</th>";
	echo"<th>HouseNo</th>";
	echo"<th>Job</th>";
	echo"<th>Date</th>";
	echo"</tr>";
	echo"<tr>";
	echo $IdNo=$row["IdNo"];
	echo $FirstName=$row["FirstName"];
	echo $LastName=$row["LastName"];
	echo $Sex=$row["Sex"];
	echo $Age=$row["Age"];
	echo $Nationality=$row["Nationality"];
	echo $PlaceOfBirth=$row["PlaceOfBirth"];
	echo $Region=$row["Region"];
	echo $Zone=$row["Zone"];
	echo $Wereda=$row["Wereda"];
	echo $Kebele=$row["Kebele"];
	echo $dob=$row["dob"];
	echo $HouseNo=$row["HouseNo"];
	echo $Job=$row["Job"];
	echo date("Y").'-'.date("m").'-'.date("d");
	echo"</tr>";
	echo"</table>";
		}}
?>
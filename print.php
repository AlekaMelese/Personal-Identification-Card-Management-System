<fieldset style="max-width:50%;margin:2% 0% 0% 20%;"><br>
<form action="print.php" method="GET">    
	<tr>
    <td height="38"><font color="black">Search Resident:</font>
        <input type="search" name="text"/>
		<input id="print_button" type="button">    </tr><br><br>	
</form></fieldset>
<fieldset style="max-width:25%;margin:5% 0% 0% 32%;">
<?php
if(isset($_GET["search"])){
$conn = mysql_connect("localhost", "root", "");
mysql_select_db( "adigrat",$conn );
	$text=$_GET["text"];
	$sql=mysql_query("SELECT * FROM `resident` WHERE FirstName='$text' ");
	echo mysql_error();
	if($row=mysql_fetch_array($sql)){
	echo "FirstName:&nbsp;&nbsp;&nbsp;&nbsp; ". " ".$FirstName=$row["FirstName"]; echo"<br>";
	echo "LastName:&nbsp;&nbsp;&nbsp;&nbsp; ". " ".$LastName=$row["LastName"]; echo"<br>";
	echo "Id No:&nbsp;&nbsp;&nbsp;&nbsp; ". " ".$IdNo=$row["IdNo"]; echo"<br>";
	echo "Sex:&nbsp;&nbsp;&nbsp;&nbsp; ". " ".$Sex=$row["Sex"]; echo"<br>";
	echo "Date of Birth:&nbsp;&nbsp;&nbsp;&nbsp; ". " ".$dob=$row["dob"]; echo"<br>";
	echo "Age:&nbsp;&nbsp;&nbsp;&nbsp; ". " ".$Age=$row["Age"]; echo"<br>";
	echo "Place of Birth:&nbsp;&nbsp;&nbsp;&nbsp; ". " ".$PlaceOfBirth=$row["PlaceOfBirth"]; echo"<br>";
	echo "Nationality:&nbsp;&nbsp;&nbsp;&nbsp; ". " ".$Nationality=$row["Nationality"]; echo"<br>";
	echo "Region:&nbsp;&nbsp;&nbsp;&nbsp; ". " ".$Region=$row["Region"]; echo"<br>";
	echo "Zone:&nbsp;&nbsp;&nbsp;&nbsp; ". " ".$Zone=$row["Zone"]; echo"<br>";
	echo "Wereda:&nbsp;&nbsp;&nbsp;&nbsp; ". " ".$Wereda=$row["Wereda"]; echo"<br>";
	echo "Kebele:&nbsp;&nbsp;&nbsp;&nbsp; ". " ".$Kebele=$row["Kebele"]; echo"<br>";
	echo "House No:&nbsp;&nbsp;&nbsp;&nbsp; ". " ".$HouseNo=$row["HouseNo"]; echo"<br>";
	echo "Job:&nbsp;&nbsp;&nbsp;&nbsp; ". " ".$Job=$row["Job"]; echo"<br>";
	echo "Checked:&nbsp;&nbsp;&nbsp;&nbsp; ". " ".$dor=$row["dor"]; echo"<br>";

	}
	else {
	echo "This Resident is NOT Registered!!<br>Or he/she is NOT in this Kebele!!";
		 }	
	}
?>
</fieldset>
<script type="text/javascript">
function print_hide(e) {
   document.getElementById('print_button').style.display = 'none';
   window.print();
}
</script>
<form>
<input id="print_button" type="button" onClick="print()">
</form>
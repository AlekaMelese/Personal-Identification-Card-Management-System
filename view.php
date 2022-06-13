<?php
include("connection.php");
$result = mysql_query("SELECT * FROM resident"); 
echo "<table border=3 cellpadding=3>"; 
echo "<tr>"; 
     echo "<th>IdNo:</th>";
     echo "<th>to:</th>";
	 echo "<th>fname:</th>";
     echo "<th>mname:</th>";
	 echo "<th>lname:</th>";
	 echo "<th>reason:</th>";     
	   "</tr>"; 
			while($test = mysql_fetch_array($result))
			{			
			echo "<tr>"; 
 echo "<td>".$test['IdNo'];  
 echo "<td>".$test['to'];
 echo "<td>".$test['fname'];  
 echo "<td>".$test['mname'];
 echo "<td>".$test['lname'];  
 echo "<td>".$test['reason'];  
"</tr>"; 
echo"</table>"; 
			?> 
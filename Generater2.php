<?php
$connection = mysql_connect("localhost","root","")
or die("no connection");
$db_select=mysql_select_db("test",$connection)
or die("no connection to db");
$query3 = "SELECT * FROM simple";
$result3 = mysql_query($query3);
$count = mysql_num_rows($result3);
if($count == 0)
{
$seq = 1;
$ref = 111;
$a = sprintf("%04d", $seq);
$emp_id = $ref.'-'.$a;
$query= "INSERT INTO simple (emp_id) VALUES ('$emp_id')";
$result=mysql_query($query)or die(mysql_error());
}
else
{
    $query2 = "SELECT * FROM simple ORDER BY id DESC LIMIT 1";
    $result2 = mysql_query($query2);
    $row = mysql_fetch_array($result2);
    $last_id = $row['emp_id'];
    $rest = substr("$last_id", -4);  
    $insert_id = "$rest" + 1;
    echo $ars = sprintf("%04d", $insert_id);
    $ref = 111;
    $emp_id = $ref.'-'.$ars;
    $query= "INSERT INTO simple (emp_id) VALUES ('$emp_id')";
    $result=mysql_query($query)or die(mysql_error());
}
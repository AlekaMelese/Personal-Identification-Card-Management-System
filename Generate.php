<?php

// function to generate random ID number
function createID() {
 $id=stripslashes(trim(@$_POST['id']));
  $ids=stripslashes(trim(@$_POST['ids']));
 for ($i = 1; $i <= 5; $i++) {
  $id .= rand(0,9);
 }
 return $id;
}
 
// MySQL connect info
mysql_connect('localhost','root','');
 mysql_select_db('adigrat');
$query = mysql_query("SELECT id FROM products");
 
// puts all known ID numbers into $ids array
while ($result = mysql_fetch_array($query)) {
 $ids[] = $result["id"];
 $query = mysql_query($query) or die($query."<br/><br/>".mysql_error());
}

 
// generates random ID number
$id = createID();
 
// while the new ID number is found in the $ids array, generate a new $id number
while (in_array($id,$ids)) {
 $id = createID();
}
 
// output ID number
echo $id;

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

<h2>View Records</h2>
<table  border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>IdNo</strong></th>
<th><strong>PaymentDate</strong></th>
<th><strong>Amount</strong></th>
<th><strong>Reason</strong></th>
<th><strong>Accountant</strong></th>
<th><strong>Edit</strong></th>

</tr>
</thead>
<tbody>
<?php
$count=1;
$conn = mysqli_connect("localhost", "root", "","picms");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
$sel_query="Select * from pay WHERE Status='NotRecived' ";
$result = mysqli_query($conn,$sel_query);
//while($row=mysqli_fetch_array($result)){	
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["IdNo"]; ?></td>
<td align="center"><?php echo $row["PaymentDate"]; ?></td>
<td align="center"><?php echo $row["Amount"]; ?></td>
<td align="center"><?php echo $row["Reason"]; ?></td>
<td align="center"><?php echo $row["Accountant"]; ?></td>
<td align="center">
<a href="receipt.php?id=<?php echo $row["IdNo"]; ?>">Edit</a>
</td>

</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>



<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$IdNo=$_REQUEST['IdNo'];

$update="UPDATE pay SET Status='Recived' WHERE IdNo='$IdNo' ";
mysqli_query($con, $update) or die(mysqli_error());

}else {
?>
<div>

<form action="receipt.php" method="GET">    
	<tr>
    <td height="38"><font color="black">IdNo:</font>
   <input type="hidden" name="new" value="1" />

        <input type="submit" class="btn btn-info" value="Print Receipt" name="Edit"></td>
		
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>

    </tr>	
</form>
<?php } ?>
</div>
</div>
</body>
</html>
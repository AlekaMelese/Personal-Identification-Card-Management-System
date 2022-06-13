<?php
session_start();
if(!isset($_SESSION['valid']))
		{
			header('Location: index.php');			
		}
?>
<!DOCTYPE html>
<head>
  <title>ID card giving</title>
  <meta name="description" content="AKMS" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>

</head>

<body>
<div>
  <div id="main">
<div id="header" style="background-image: url(images/header1.PNG);">
	  <div id="banner">
	    <div id="welcome" >
	  </div><!--close welcome-->
	    <div id="welcome_slogan">
	    </div><!--close welcome_slogan-->	
	  </div><!--close banner-->
    </div><!--close header-->
	<div id="menu_container">
	  <div id="menubar">
        <ul id="menu">
		  <li><a href="resident.php">Register</a></li>
          <li><a href="pay.php">ID Payment</a></li>
		  <li><a href="id.php">Give ID Card</a></li>	
          <li><a href="certificate.php">Certificate</a></li>
		  <li><a href="report.php">Report</a></li>

        </ul>
      </div><!--close menubar-->	
	</div><!--close menu_container-->
    
	<div id="site_content">		
	  	  <div class="sidebar_container"><br>
		    <li><a href="logout.php">Log Out</a></li>
		<img width="200" height="100" src="images/ad.jpg">
				
		<div class="sidebar">
          <div class="sidebar_item"><br><br>
             
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
			<a href="update resident.php"><b>Update Resident</a></h2><br><br><br>
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
            <a href="sss.php"><b>Search Resident</a></h2><br><br><br>   
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
		<div class="sidebar">
          <div class="sidebar_item">               
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->   		
        <div class="sidebar">
          <div class="sidebar_item"><br><br><br><br><br>
	
          </div><!--close sidebar_item-->
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	<br>
	<br><br>

<br>
<br>
<fieldset style="max-width:42%;margin:2% 0% 0% 15%;">
<legend align ="center"width="420" height="200">To Delete Resident, Search by Name or ID No</legend><br>
<form action="ddd.php" method="GET">    
	<tr>
    <td height="38"><font color="black">Search Resident:</font>
        <input type="search" name="text1"/>
        <input type="submit" class="btn btn-info" value="View" align="center" name="search"/></td>
    </tr><br><br>	
</form></fieldset><br><br>
<fieldset style="max-width:50%;margin:2% 0% 0% 2%;"><br>
<legend align="center">List of Registered Residents</legend>
<?php
if(isset($_GET["search"])){
$conn = mysql_connect("localhost", "root", "");
mysql_select_db( "picms",$conn );
	$text=$_GET["text1"];
	$sql=mysql_query("SELECT * FROM `resident` WHERE FirstName LIKE '$text%' OR LastName LIKE '$text%' OR IdNo LIKE '$text%'");
	echo mysql_error();
	echo"<table border='1' style='margin-left: 10px;'align='center'><tr style='background-color: silver;font-size: 15.5px;height: 30px;'><th>FName</th><th> LName</th><th>ID</th><th>Sex</th><th>DoB</th><th>Age</th><th>PoB</th><th>Nationality</th><th>Region</th><th>Zone</th><th>Wereda</th><th>Kebele</th><th>House No</th><th>Job</th><th>DoR</th><th>Photo</th></tr>";
	while($row=mysql_fetch_array($sql)){	
		 $Img2=$row["image_name"];
		 echo'<tr style="font-size: 13px;"><td>'.$row["FirstName"].'</td><td>'.$row["LastName"].'</td><td>'.$row["IdNo"].'</td><td>'.$row["Sex"].'</td><td>'.$row["dob"].'</td><td>'.$row["Age"].'</td><td>'.$row["PlaceOfBirth"].'</td><td>'.$row["Nationality"].'</td><td>'.$row["Region"].'</td><td>'.$row["Zone"].'</td><td>'.$row["Wereda"].'</td><td>'.$row["Kebele"].'</td><td>'.$row["HouseNo"].'</td><td>'.$row["Job"].'</td><td>'.$row["dor"].'</td>';
		 ?>
		 <td><div align="left"><img src="<?=$Img2?>" width="100" height="80px"/></div></td></tr>
		 <?php
	}
	$aa=mysql_num_rows($sql);
	if($aa>0){
	echo " The Search matches and fetches the following result";
	}
else{
	echo " The search did not match";
}	
	}	
	echo"</table>";	
?>
</fieldset>
<br>
<fieldset style="max-width:32%;margin:2% 0% 0% 20%;">
<legend>You are about to Delete this Resident</legend>
<form action="ddd.php" method="POST">
ID No:<input type="number" name="text2">	
<input type="submit" class="btn btn-danger" name="delete" value="Delete">
</form> 
</fieldset><br>
<fieldset style="max-width:32%;margin:2% 0% 0% 20%;"><br>
<?php
if(isset($_POST["delete"])){
$conn = mysql_connect("localhost", "root", "");
mysql_select_db( "picms",$conn );
	$text=$_POST["text2"];
	$x=mysql_query("SELECT * FROM `resident`WHERE IdNo='$text' ");
		while($data1=mysql_fetch_array($x)){
			$exist=$data1["IdNo"];
			if($exist){
					$sql2=mysql_query("DELETE FROM `resident` WHERE IdNo='$text' ");	
					echo  mysql_error();
					//$sql_chk=mysql_affected_rows($sql);
					
					if($sql2==true)
						{
						echo "You have Deleted from Resident!!";
						}
					else 
						{
						echo "Resident is not Deleted!!";
						}
				}
			else {
				echo $exist;
				}	
		}
	//mysql_close($conn);
	}
?>
</fieldset>
</body>
	  <div id="content">
        <div class="content_item">
	      </div>
		  <br style="clear:both"/>		  
		  <div class="content_container">
		  </div><!--close content_container-->
          <div class="content_container">
		  </div><!--close content_container-->			  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
 
  </div><!--close main-->
  
  <div id="footer_container">
    <div id="footer">
	  <p> &copy All Right Reserved</p>
    </div><!--close footer-->  
  </div><!--close footer_container-->  
  
</body>
</html>

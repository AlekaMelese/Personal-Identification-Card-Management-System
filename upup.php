
<!DOCTYPE html>
<html>
<head>
  <title>Updating page</title>
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
		                 
						 
						 
						 
						 
						 
						 
		<li><a href="sss.php"><b>Search Resident</a></li>    
		<li><a href="update resident.php.php"><b>Update Resident</a></li>
		 
        </ul>
      </div><!--close menubar-->	
	</div><!--close menu_container-->
    
	<div id="site_content">		
	  	  <div class="sidebar_container"><br>
		<img width="200" height="100" src="images/ad.jpg">
		<div class="sidebar">
          <div class="sidebar_item"><br><br>
         <li><a href="logout.php">Log Out</a></li>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
	
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
        
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
	   
	   <?php		
if(isset($_POST["update"])){
$conn = mysql_connect("localhost", "root", "");
mysql_select_db( "adigrat",$conn );
		$text=$_POST['text'];
		$sql=mysql_query("SELECT * FROM  resident WHERE  IdNo='$text'");
		while($row=mysql_fetch_array($sql)) {		
$w1=$row['FirstName'];		
$w2=$row['LastName'];		
$w3=$row['Sex'];
$w4=$row['Nationality'];		
$w5=$row['PlaceOfBirth'];		
$w6=$row['Region'];		
$w7=$row['Zone'];
$w8=$row['Wereda'];		
$w9=$row['Kebele'];		
$w10=$row['dob'];
$w11=$row['HouseNo'];		
$w12=$row['Job'];		
$w13=$row['image_name'];
}	  	
}
?>
<?php
if(isset($_POST["submit"])){
$conn = mysql_connect("localhost", "root", "");
mysql_select_db( "adigrat",$conn );
$text=$_POST['text'];
$w11=$_POST['FirstName'];		
$w21=$_POST['LastName'];		
$w31=$_POST['Sex'];
$w41=$_POST['Nationality'];		
$w51=$_POST['PlaceOfBirth'];		
$w61=$_POST['Region'];		
$w71=$_POST['Zone'];
$w81=$_POST['Wereda'];		
$w91=$_POST['Kebele'];		
$w101=$_POST['dob'];
$w111=$_POST['HouseNo'];		
$w121=$_POST['Job'];		
//$w13=$_FILES['image_name']['name'];
$ss=mysql_query("UPDATE resident SET FirstName='$w11',LastName='$w21',Sex='$w31',Nationality='$w41',PlaceOfBirth='$w51',Region='$w61',Zone='$w71',Wereda='$w81',
		Kebele='$w91',dob='$w101',HouseNo='$w111',Job='$w121' where IdNo='$text'");
if(!$ss){
	echo mysql_error();
}
else{
	echo"update successful";
}
}
?>	
			<form method="post" action="update resident.php">  Search Resident IdNo:<input type="text" name="text">	
		    <input type="submit" class="btn btn-info" name="update" value="Update"/>
		      <p>&nbsp;</p>
		        <table width="624" height="181" border="0">	
	  
                <tr><td height="24" class="style5"><div align="right">FirstName</div></td>                  
                <td><input type="text" name="FirstName"  value="<?=$w1?>"></td></tr>
				
                <tr><td height="24" class="style5"><div align="right">LastName</div></td>                  
                <td><input type="text" name="LastName"   value="<?=$w2?>" /></td></tr> 
				
				<tr><td>Sex:</td> 
				<td><select name="Sex" type="text" id="Sex">
				<option selected="" value="<?=$w3?>">Please select a Gender </option>	
				<option>Male</option>
				<option>Female</option></select>
				</td></tr>
				
				<tr><td height="24" class="style5"><div align="right">Nationality</div></td>                  
                <td><input type="text" name="Nationality"  value="<?=$w4?>"/></td></tr>  
				
				<tr><td height="24" class="style5"><div align="right">PlaceOfBirth</div></td>                  
                <td><input type="text" name="PlaceOfBirth"  value="<?=$w5?>"/></td></tr>   
				
						  <tr>
				<td> Region:</td>
				<td><select name="Region" type="text" id="Region">
				<option selected="" value="<?=$w6?>">Please select a region </option>
				<option>Addis Abeba City Admin</option>		  
				<option>Dire Dawa City Admin</option>		  
				<option>Tigray</option>		  
				<option>Afar</option>		  
				<option>Amhara</option>		  
				<option>Oromia</option>
				<option>Benshangul Gumuz</option>		  
				<option>Gambella</option>		  
				<option>Harari</option>		  
				<option>Somalia</option>
				<option>SNNPR</option></select></td></tr>	
				
				<tr><td height="24" class="style5"><div align="right">Zone</div></td>                  
                <td><input type="text" name="Zone"  value="<?=$w7?>"/></td></tr>    
				
				<tr><td height="24" class="style5"><div align="right">Wereda</div></td>                  
                <td><input type="text" name="Wereda"  value="<?=$w8?>"/></td></tr>    
				
				<tr><td height="24" class="style5"><div align="right">Kebele</div></td>                  
                <td><input type="text" name="Kebele"  value="<?=$w9?>"/></td></tr>
				
				<tr><td height="24" class="style5"><div align="right">Date of Birth</div></td>                  
                <td><input type="date" name="dob"  value="<?=$w10?>"/></td></tr>    
				
				<tr><td height="24" class="style5"><div align="right">House No</div></td>                  
                <td><input type="text" name="HouseNo"  value="<?=$w11?>"/></td></tr>    
				
				<tr><td height="24" class="style5"><div align="right">Job</div></td>                  
                <td><input type="text" name="Job"  value="<?=$w12?>"/></td></tr>    
				
				<tr><td height="24" class="style5"><div align="right">Photo</div></td>                  
                <td><input type="file" name="Photo"  value="<?=$w13?>"/></td></tr>
				
				<tr><td>
				<td><input align="left" type="submit" name="submit" value="Update" class="btn btn-success" onClick="Submit" align="left"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input align="right"type="reset" name="Clear" class="btn btn-danger" value="Reset" /></td>
				<td>	
				<span class="style5"> </span>                            
				</td></tr>     
		</table>
		  		  
	      <p>&nbsp;</p>
		  </fieldset>
          </form>
		  
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
	  <p>&copy All Right Reserved</p>
    </div><!--close footer-->  
  </div><!--close footer_container-->  
</body>
</html>	
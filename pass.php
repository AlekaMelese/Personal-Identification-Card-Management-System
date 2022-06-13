<?php




session_start();


$user = $_SESSION['username'];

if ($user)

{

//user is logged in

		if ($_POST['submit'])
		{
		//check fields
		
		$oldpassword = md5($_POST['oldpassword']);
		$newpassword = md5($_POST['newpassword']);
		$repeatnewpassword = md5($_POST['repeatnewpassword']);
		
		//check pass against db
		  $bd = @mysql_connect('localhost', 'root', '') or die("Could not connect database");
mysql_select_db('adigrat', $bd) or die("Could not select database");
		
		$queryget = mysql_query("SELECT password FROM login WHERE username='$user'") or die("Query didn't work");
		$row = mysql_fetch_assoc($queryget);
		
		$oldpassworddb = $row['password'];
		
			
		
		//check pass
		if ($oldpassword==$oldpassworddb)
		{
		
		
		
		//check twonew pass
		if ($newpassword==$repeatnewpassword)
		{
		//success
		//change pass in db
	
		 if (strlen($newpassword)>25||strlen($newpassword)<6)   <---------------Here is the code
		{
		 echo "Password must be betwwen 6 & 25";
		}

		else
		{
		
				$querychange = mysql_query("
				UPDATE login SET password='$newpassword' WHERE username='$user'
				");
				
				session_destroy();
				die("Your pass has benn changed.<a href='index.php'>Return</a> to the main page");
		
		
		
		
		
		}
		}
		else
				die("New Pass don't match");
				
	
		
		
		
		}
		else
			die("Old Pass doesn't match");
		
		
			
		
		
		
		}
		
		else{
		   die("You must be logged in to change your password");
		}	
		

}
?>
		
		<form action='changepassword.php' method='POST'>
			Old password:    <input type='text' name='oldpassword'><p>
			New password:	<input type='password' name='newpassword'><p><br>
			Repeat new password:	<input type='password' name='repeatnewpassword'><p>
			<input type='submit' name='submit' value='Change Password'>
		
		</form>
		
		




		



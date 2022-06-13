<?php
session_start();
$user = (isset($_POST['username']) ) ? $_POST['username'] : '';
if(isset($_POST['submit']) && $_POST['submit'] = "submit")
    {
	
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
   $bd = @mysql_connect('localhost', 'root', '') or die("Could not connect database");
mysql_select_db('adigrat', $bd) or die("Could not select database");
    
        $result = mysql_query("SELECT 'password' FROM 'login' WHERE username='$user'");

            if(!$result)
            {
                echo "The username entered does not exist!";
            }
            else
            if($password != mysql_result($result, 0))
            {
                echo "Entered an incorrect password";
            }

            if($newpassword == $confirmnewpassword)
            {
                $sql = mysql_query("UPDATE login SET password = '$newpassword' WHERE username = '$user'");      
            }

            if(!$sql)
            {
                echo "Congratulations, password successfully changed!";
            }
            else
            {
                echo "New password and confirm password must be the same!";
            }
			
        
}		
    ?>


    <form name="newprwd" action="" method="post">
    Username :<input type="text" name="mail" value=""><br>
    Password :<input type="password" name="password" value=""><br>
    New Password :<input type="password" name="newpassword" value=""><br>
    Confirm Password :<input type="password" name="confirmnewpassword" value=""><br>
    <input type="submit" name="submit" value="submit"><br>
    </form>
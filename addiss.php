
<head>

  <title>Registration</title>

  <style type="text/css" title="Amaya theme">


  </style>
</head>

<body>
<h4><span style="font-family: Arial,Helvetica,sans-serif">Name</span></h4>

<p style="font-family: Arial,Helvetica,sans-serif"> <input type="text"  name='Name'/></p>

<h4 style="font-family: Arial,Helvetica,sans-serif">Surname</h4>

<p style="font-family: Arial,Helvetica,sans-serif"> <input type="text" name='Surname'/></p>

<h4 style="font-family: Arial,Helvetica,sans-serif">Username</h4>

<p style="font-family: Arial,Helvetica,sans-serif"> <input type="text" name='Username' /></p>
<hr style="font-family: Arial,Helvetica,sans-serif" />

<h4 style="font-family: Arial,Helvetica,sans-serif">Email</h4>

<p style="font-family: Arial,Helvetica,sans-serif"> <input type="text" name='Email' /></p>

<h4 style="font-family: Arial,Helvetica,sans-serif">Confirm Email</h4>

<p style="font-family: Arial,Helvetica,sans-serif"> <input type="text" name='C_Email' /></p>
<hr style="font-family: Arial,Helvetica,sans-serif" />

<h4 style="font-family: Arial,Helvetica,sans-serif">Password</h4>

<p style="font-family: Arial,Helvetica,sans-serif"> <input type="password" name='password' /></p>

<h4 style="font-family: Arial,Helvetica,sans-serif">Confirm Password</h4>

<p style="font-family: Arial,Helvetica,sans-serif"> <input type="password" name='c_password'/></p>
<hr style="font-family: Arial,Helvetica,sans-serif" />

<h4 style="font-family: Arial,Helvetica,sans-serif">Security Question</h4>

<p style="font-family: Arial,Helvetica,sans-serif"> <input type="password" name='SecQ' /></p>

<h4 style="font-family: Arial,Helvetica,sans-serif">Security Answer</h4>

<p style="font-family: Arial,Helvetica,sans-serif"> <input type="password" name='SecA'/></p>
<hr style="font-family: Arial,Helvetica,sans-serif" />

<hr style="font-family: Arial,Helvetica,sans-serif" />


<p><span
style="font-family: Arial,Helvetica,sans-serif"><button>Submit</button></span></p>

</body>

</html>
<?php
$Name = $_POST['Name'];
$Surname = $_POST['Surname'];

$Username = $_POST['Username'];

$Email = $_POST['Email'];
$C_Email = $_POST['C_Email'];

$Password = $_POST['password'];
$C_Password = $_POST['c_password'];

$SecQ = $_POST['SecQ'];
$SecA = $_POST['SecA'];


$mysql_connect ('localhost', 'admin', 'storefile1234');
mysql_select_db ("storefile");

$check_username = mysql_query("SELECT FROM users WHERE username = '$Username'");
$check_email = mysql_query("SELECT FROM users WHERE email = '$Email'");


if ($Name == null || $Surname== null || $Username == null || $Password == null || $C_Password == null || $Email == null || $C_Email == null || $SecQ == null || $SecA == null ) {

    echo "Missing details. Please enter all fields.";


} else {

    if(mysql_num_rows($check_username) != 0 && mysql_num_rows($check_email) != 0)
            {
            echo "Username/Email already exists";
            }
            if  ($Email == $C_Email && $Password == $C_Password) {

                $query = "INSERT INTO users (Username, Name,Surname, Password, Email, SecQ, SecA) VALUES ('NULL', ".$Username."', ".$Name."', ".$Surname."', ".$Password."', ".$SecQ."', ".$SecA."', ".$Email.')"';

                mysql_query($query) or die ('Error registering.');

                echo "Greetings, ".$Name.", you have been registered. ";

    }  else {

        echo "Error registering your account. Please try again.";
}}
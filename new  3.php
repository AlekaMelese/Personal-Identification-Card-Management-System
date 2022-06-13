$old_password=$_POST['old_password'];
$new_password=$_POST['new_password'];
$con_password=$_POST['con_password'];
$chg_pwd=mysql_query("select * from users where id='1'");
$chg_pwd1=mysql_fetch_array($chg_pwd);
$data_pwd=$chg_pwd1['password'];
if($data_pwd==$old_password){
if($new_password==$con_password){
$update_pwd=mysql_query("update users set password='$new_password' where id='1'");
$change_pwd_error="Update Sucessfully !!!";
}
else{
$change_pwd_error="Your new and Retype Password is not match !!!";
}
}
else
{
$change_pwd_error="Your old password is wrong !!!";
}}
<?php
include_once('dbconnection.php');
include_once ('dbconfig.php');
class reg{
 	
    private $PaymentDate;
	private $Amount;  
	private $Reason;
	private $Accountant;
	private $Status;
	private $IdNo;
	public function Add($IdNo,$PaymentDate,$Amount,$Reason,$Accountant,$Status){
 	
 		$this->PaymentDate=$PaymentDate;
		$this->Amount=$Amount;
		$this->Reason=$Reason;
		$this->Accountant=$Accountant;
		$this->Status=$Status;
		$this->IdNo=$IdNo;
		$db=new connection();
 		$db->Detail(server,user,pass,database);
        $conn=$db->connect();
		
      $sql="INSERT INTO pay(IdNo,PaymentDate,Amount,Reason,Accountant,Status)values(
		'$this->IdNo','$this->PaymentDate','10','$this->Reason','$this->Accountant','Notpayed')";
        $conn->query($sql);
		if($sql)
{
	//echo"$FirstName $LastName is now Registered";
	echo " Registered";

}
else 
{
echo"Error".mysqli_error();
}
}
 	}
 
 ?>
 
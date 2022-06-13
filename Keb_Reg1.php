<?php
//session_start();
if(!isset($_SESSION['username']))
		{
			header('Location: index.php');			
		}


include_once('dbconnection.php');
include_once ('dbconfig.php');
class Resident_register{
 	private $FirstName;
	private $LastName;
	private $GrandFatherName;
	private $Sex;
	private $Age;
	private $Nationality;
	private $PlaceOfBirth;
	private $Region;
	private $Zone;
	private $Wereda;
	private $Kebele;
    private $dob;
    private $HouseNo;
    private $dor;
	private $RegisterdBy;
	private $image_name;
	private $Job;		
    private $PaymentDate;
	private $Amount;  
	private $Reason;
	private $Accountant;
	//private $Status;
	private $IdNo;

public function Add($FirstName,$LastName,$GrandFatherName,$Sex,$Age,$Nationality,$PlaceOfBirth,$Region,$Zone,$Wereda,$Kebele,$dob,$HouseNo,$dor,$Job,$image_name,$RegisterdBy,$Reason){
 		$this->FirstName=$FirstName;
 		$this->LastName=$LastName;
		$this->GrandFatherName=$GrandFatherName;
		$this->Age=$Age;
		$this->Sex=$Sex;
 		$this->Nationality=$Nationality;
		$this->PlaceOfBirth=$PlaceOfBirth;
 		$this->Region=$Region;
		$this->Zone=$Zone;
 		$this->Wereda=$Wereda;
		$this->Kebele=$Kebele;
 		$this->dob=$dob;
		$this->HouseNo=$HouseNo;
 		$this->dor=$dor;
		$this->Job=$Job;
		//$this->Status=$Status;
			
	    $this->RegisterdBy=$RegisterdBy;
		$this->Reason=$Reason;
		//$RegisterdBy = $_SESSION['username'];
	//	$RegisterdBy=implode($_SESSION['username']);
		$db=new connection();
 		$db->Detail(server,user,pass,database);
        $conn=$db->connect();
		$pic="photos/$image_name";
		if($FirstName=='' || $LastName=='' ||  $GrandFatherName=='' || $Nationality==''|| $PlaceOfBirth=='' || $Region=='' || $Zone=='' || $Wereda==''|| $Kebele=='' || $dob=='' || $Job==''){
	echo "<script>alert('Please Fill All the Forms!!')</script>";
	exit();	
}
//$username = ($_SESSION['username']);
//$RegisterdBy=($_SESSION['username']);
        $sql="INSERT INTO resident(FirstName,LastName,GrandFatherName,Sex,Age,Nationality,PlaceOfBirth,Region,Zone,Wereda,Kebele,dob,HouseNo,
		dor ,Job,image_name,RegisterdBy,Reason,Status)values
('$this->FirstName','$this->LastName','$this->GrandFatherName','$this->Sex','$this->Age','$this->Nationality','$this->PlaceOfBirth','$this->Region','$this->Zone','$this->Wereda','$this->Kebele','$this->dob','$this->HouseNo','$this->dor','$this->Job','$pic','$this->RegisterdBy','$this->Reason','NotRecived')"; 
  $conn->query($sql);
	 $aa="INSERT INTO pay(IdNo,PaymentDate,Amount,Reason,Accountant,Status)values(
		(SELECT IdNo FROM resident WHERE FirstName='$this->FirstName' and LastName='$this->LastName'),'$this->dor','30','$this->Reason','$this->RegisterdBy','Notpayed')";
      $conn->query($aa);
    
		//if (mysqli_query($conn, $sql)) ;
		if($sql){
	     echo"$FirstName $LastName is now Registered";
	}
else 
{
echo"Error".mysqli_error($conn);
}
}
/*public function cc($IdNo,$PaymentDate,$Amount,$Reason,$Accountant,$Status){
		
		$db=new connection();
 		$db->Detail(server,user,pass,database);
        $conn=$db->connect();
		 $aa="INSERT INTO pay(IdNo,PaymentDate,Amount,Reason,Accountant,Status)values(
		'1','1-1-2012','10','dd','hh','NotRecived')";
      $conn->query($aa);
		//if (mysqli_query($conn, $sql)) ;
		if(!$aa){
	echo"Error".mysqli_error();

}
}*/
 	}
 
 ?>
 
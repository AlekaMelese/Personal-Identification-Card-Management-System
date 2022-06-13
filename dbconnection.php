
<?php
class connection{
  private $server="";
  private $user="";
  private $pass="";
  private $db="";
  public $conn;

  public function Detail($server,$user,$pass,$db){
      $this->server=$server;
      $this->user=$user;
      $this->pass=$pass;
      $this->db=$db;
  }
  public function connect(){
      $this->conn=new mysqli($this->server,$this->user,$this->pass,$this->db);
      if(mysqli_connect_error()){
      	 echo mysqli_connect_error();
      	 exit();
      }
      else{
      	return $this->conn;
      }
  }
}
?>


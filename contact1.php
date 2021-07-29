<?php  

class Studentinfo{

     public $server='localhost';
     public $username='root';
     public $password='';
     public $dbname='web1pm_db';

    function getconnection(){
    	 $conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);
    	 return $conn;
    }
    function insert_data($arr){

    	$n=$arr['name'];
    	$e=$arr['email'];
    	$p=$arr['phone'];
        $c=$arr['country'];
        $g=$arr['gender'];

		$sql = "insert into contact(name,email,phone,country,gender)values('$n','$e','$p','$c','$g')";
        //echo $sql;die;
        $conn=$this->getconnection();

        if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
          }
          
          

		if($conn->query($sql)=== TRUE) {
		  $r= "New record created successfully";
		} else {
		  $r="Error: " . $sql . "<br>" . $conn->error;
		}

		return $r;
    }
}
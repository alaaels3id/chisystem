<?php 

/*
 *Login class 
 */

class Login
{
    private $username;
    private $password;
    private $cxn;

    function __construct($username, $password){
        //setData
        $this->setData($username, $password);
        
        //connectToDB
        $this->connectToDB();

        //getData
        $this->getData();
    }

    private function setData($username, $password){
        $this->username = $username;
        $this->password = $password;
    }
    
    private function connectToDB(){
        include 'database.php';
        $this->cxn = new Database('../models/info.php');
    }
    
    private function getData(){
        $un  = $this->username;
        $usp = $this->password;
        $conn = $this->cxn->Connect();
        
        $query = "SELECT * FROM `users` WHERE `username` = '$un' AND `password` = '$usp'";
        $sql   = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($sql) > 0) return TRUE;
        else throw new Exception("Error : Username or password is invalid!!");
    }
    private function Close(){
        $this->cxn->Close();
    }

}

?>
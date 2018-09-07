<?php 

/*
 *Login class 
 */

class AdminLogin
{
    private $adminname;
    private $adminpass;
    private $cxn;

    function __construct($adminname, $adminpass){
        //setData
        $this->setData($adminname, $adminpass);
        
        //connectToDB
        $this->connectToDB();

        //getData
        $this->getData();
    }

    private function setData($adminname, $adminpass){
        $this->adminname = $adminname;
        $this->adminpass = $adminpass;
    }
    
    private function connectToDB(){
        include '../models/database.php';
        $this->cxn = new Database('../models/info.php');
    }
    
    private function getData(){
        $un  = $this->adminname;
        $usp = $this->adminpass;
        $conn = $this->cxn->Connect();
        
        $query = "SELECT * FROM `admin` WHERE `adminname` = '$un' AND `adminpass` = '$usp'";
        $sql   = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($sql) > 0) return TRUE;
        else throw new Exception("Error : adminname or adminpass is invalid!!");
    }
    private function Close(){
        $this->cxn->Close();
    }

}

?>
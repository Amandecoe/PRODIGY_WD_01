<?php
include "../config/db.php";
include "../models/Project.php";

class Projectcontroller{
    private $con;
    public function __construct($con){
        $this->con = $con;
    }
    public function uploadfile(){
        
    }
}
?>

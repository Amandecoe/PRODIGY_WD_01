<?php
include "../config/db.php";
include "../controllers/Projectcontroller.php";

class Project{
    private $con;
    public function __construct($con){
        $this->con = $con;
    }
    
}
?>

<?php

include "../config/db.php";
include "../controllers/authenticationcontroller.php";
class User{
    private $con;
    public function __construct($con){
        $this->con = $con;
    }
    public function getuserbyid($id){
    $sql = "SELECT * FROM Student
                WHERE id='$id'";
    $result = mysqli_query($this->con,$sql);
    return mysqli_fetch_assoc($result); //returns the associated users with the query
    }
        }
?>

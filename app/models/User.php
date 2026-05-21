<?php

include "../config/db.php";
include "../controllers/Studentcontroller.php";
include "../controllers/LecturerController.php";
class User{
    private $con;
    public function __construct($con){
        $this->con = $con;
    }
    public function getstudentbyid($id){
    $sql = "SELECT * FROM Student
                WHERE id='$id'";
    $result = mysqli_query($this->con,$sql);
    return mysqli_fetch_assoc($result); //returns the associated users with the query
    }
    public function getlecturerbyid($id){
        $sql = "SELECT * FROM Lecturer
        WHERE id = '$id'";
        $result = mysqli_query($this->con, $sql);
        return mysqli_fetch_assoc($result);
    }
        }
?>

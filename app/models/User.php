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
    public function registerstudent($FullName, $Email, $Department, $Year, $Semester, $password, $StudentID){
        $sql = "INSERT INTO Student(Name,Email,Department,Year, Semester, password, Student_iD)
            VALUES('$FullName', '$Email', '$Department','$Year','$Semester','$password','$StudentID')";

            if($result=mysqli_query($this->con, $sql)){
                return mysqli_fetch_assoc($result);
            }else{
            echo mysqli_error($this->con);
            }
    }
    public function loginstudents($Email,$password){
        $sql = "SELECT * FROM STUDENT WHERE Email = '$Email'
            AND password = '$password'";
            if($result = mysqli_query($this->con, $sql)){
                if(mysqli_num_rows($result)>0){
                    $user = mysqli_fetch_assoc($result);
                    session_start();
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['role'] = 'student';
            }
            };

        }
    }
?>

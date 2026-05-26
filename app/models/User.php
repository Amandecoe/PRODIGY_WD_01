<?php

include "../config/db.php";
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

            $result=mysqli_query($this->con, $sql);
            if($result){
                return true;
            }
            return false;
}

    public function loginstudents($Email,$password){
        $sql = "SELECT * FROM STUDENT WHERE Email = '$Email'
            AND password = '$password'";
            $result = mysqli_query($this->con, $sql);
            if(!$result){
                return false;
                }

            if(mysqli_num_rows($result)>0){
                    $user = mysqli_fetch_assoc($result);
                    return $user;
            }
            return false;
        }
    public function RegisterLecturers($Fullname, $Email, $Department, $Password, $Course_code){
        $sql = "INSERT INTO Lecturer(Name, Email, Department, password,course_code)
            VALUES('$Fullname' , '$Email', '$Department', '$Password', '$Course_code')";
            $result = mysqli_query($this->con, $sql);
            if($result){
                return true;
            }
            return false;
    }
    public function Loginlecturers($Email,$password){
        $sql = "SELECT * FROM Lecturer WHERE Email = '$Email'
            AND password = '$password'";
            $result = mysqli_query($this->con, $sql);

            if(mysqli_num_rows($result)>0){
            $user = mysqli_fetch_assoc($result);
            return $user;
            }
            return false;
    }
    public function getStudentBySubmission($student_id){
    $sql = "SELECT * FROM Student
            WHERE id='$student_id'";
    $result = mysqli_query($this->con,$sql);
    return mysqli_fetch_assoc($result);
    }
    public function totalstudentsnumber(){
        $sql = "";
    }
}
?>

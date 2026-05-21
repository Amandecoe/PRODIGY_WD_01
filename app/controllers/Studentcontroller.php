<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include "../config/db.php";

class Users{
    private $con;
    public function __construct($con){
        $this->con = $con;
    }
    public function RegisterStudent(){
        if(isset($_POST['role']) && $_POST['role'] == 'student'){
            $FullName = $_POST['Fullname'];
            $Email = $_POST['email'];
            $Department = $_POST['Department'];
            $Year = $_POST['year'];
            $Semester = $_POST['Semester'];
            $password = $_POST['password'];
            $StudentID = $_POST['Student_Id'];

            $sql = "INSERT INTO Student(Name,Email,Department,Year, Semester, password, Student_iD)
            VALUES('$FullName', '$Email', '$Department','$Year','$Semester','$password','$StudentID')";

            if(mysqli_query($this->con, $sql)){
                header("Location: ./Usercontroller.php");
            }else{
            echo mysqli_error($this->con);
            }
        }
    }
    public function LoginStudent(){
        if(isset($_POST['role']) && $_POST['role'] == 'student'){
            $Email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM STUDENT WHERE Email = '$Email'
            AND password = '$password'";
            $result = mysqli_query($this->con, $sql);

            if(mysqli_num_rows($result)>0){
            $user = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['role'] = 'student';
                header("Location: ./Usercontroller.php");
                exit();
            }
            else{
                echo "Wrong Email or Password, Try Again";
            }
        }
    }

}
$user = new Users($con);
$user->RegisterStudent();
$user ->LoginStudent();
?>

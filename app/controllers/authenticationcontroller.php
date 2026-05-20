<?php
session_start();
include "../config/db.php";
$user = new User($con);
$user->Register($con);
$user ->Login($con);
class User{

    public function Register($con){
        include "../config/db.php";
        if (isset($_POST['Register'])) {
            $FullName = $_POST['Fullname'];
            $Email = $_POST['email'];
            $Department = $_POST['Department'];
            $Year = $_POST['year'];
            $Semester = $_POST['Semester'];
            $password = $_POST['password'];
            $StudentID = $_POST['Student_Id'];

            $sql = "INSERT INTO Student(Name,Email,Department,Year, Semester, password, Student_iD)
            VALUES('$FullName', '$Email', '$Department','$Year','$Semester','$password','$StudentID')";

            if(mysqli_query($con, $sql)){
                header("Location: ../views/Dashboard.php");
            }else{
            echo mysqli_error($con);
            }
        }
    }
    public function Login($con){
        include "../config/db.php";
        if(isset($_POST["Login"])){
            $Email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM STUDENT WHERE Email = '$Email'
            AND password = '$password'";
            $result = mysqli_query($con, $sql);

            if(mysqli_num_rows($result)>0){
                header("Location: ../views/Dashboard.php");
                exit();
            }
            else{
                echo "Wrong Email or Password, Try Again";
            }
        }
    }
}
?>

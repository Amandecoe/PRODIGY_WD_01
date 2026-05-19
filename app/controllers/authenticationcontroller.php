<?php
session_start();

class User{

    public function Register(){
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
            }else{
            echo mysqli_error($con);
            }
        }
    }
}
?>

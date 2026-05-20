<?php
session_start();
include "../config/db.php";

class Users{
    private $con;
    public function __construct($con){
        $this->con = $con;
    }
    public function Register(){
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

            if(mysqli_query($this->con, $sql)){
                header("Location: ./Usercontroller.php");
            }else{
            echo mysqli_error($this->con);
            }
        }
    }
    public function Login(){
        if(isset($_POST["Login"])){
            $Email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM STUDENT WHERE Email = '$Email'
            AND password = '$password'";
            $result = mysqli_query($this->con, $sql);

            if(mysqli_num_rows($result)>0){
            $user = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['id'] = $user['id'];
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
$user->Register();
$user ->Login();
?>

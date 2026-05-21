<?php
session_start();
include "../config/db.php";

class Users{
    private $con;
    public function __construct($con){
        $this->con = $con;
    }
    public function RegisterStudent(){
        if ($_POST['role'] == 'student') {
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
        if($_POST['role'] == 'student'){
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
    public function RegisterLecturer(){
        if($_POST['role']=='Lecturer'){
            $Fullname = $_POST['Fullname'];
            $Email = $_POST['email'];
            $Department = $_POST['Department'];
            $Course_code = $_POST['course_code'];
            $Password = $_POST['password'];
        }
        $sql = "INSERT INTO Lecturer(Name, Email, Department, password,course_code)
        VALUES('$Fullname' , '$Email', '$Department', '$Password', '$Course_code')";

        if(mysqli_query($this->con,$sql)){
            header("Location: ./UserController.php");
            exit();
        }
        else{
            echo "Wrong Email or Password, Try Again";
        }
    }
    public function LoginLecturer(){

    }
}
$user = new Users($con);
$user->RegisterStudent();
$user ->LoginStudent();
?>

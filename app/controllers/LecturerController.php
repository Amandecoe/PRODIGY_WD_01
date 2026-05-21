<?php
include "../config/db.php";
class Lecturer{

    private $con;
    public function __construct($con){
        $this->con = $con;
    }
    public function RegisterLecturer(){
        if(isset($_POST['Register'])){
            $Fullname = $_POST['Fullname'];
            $Email = $_POST['email'];
            $Department = $_POST['Department'];
            $Course_code = $_POST['course_code'];
            $Password = $_POST['password'];
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

    }
    public function LoginLecturer(){
        if(isset($_POST['Login'])){
            $Email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM Lecturer WHERE Email = '$Email'
            AND password = '$password'";
            $result = mysqli_query($this->con, $sql);

            if(mysqli_num_rows($result)>0){
            $user = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['role'] = 'lecturer';
                header("Location: ../controllers/UserController.php");
                exit();
            }
            else{
                echo "Wrong Email or Password, Try Again";
            }
        }
    }
}
$Lecturer = new Lecturer($con);
if(isset($_POST['Register'])){
    $Lecturer->RegisterLecturer();
}

if(isset($_POST['Login'])){
    $Lecturer->LoginLecturer();
}
?>

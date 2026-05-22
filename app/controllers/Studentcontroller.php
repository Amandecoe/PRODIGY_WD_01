<?php
include "../config/db.php";
include "../models/User.php";

class Users{
    private $con;
    private $model;
    public function __construct($con){
        $this->con = $con;
        $this->model = new User($con);
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
            $this->model->registerstudent($FullName, $Email, $Department, $Year, $Semester, $password, $StudentID);
            header("Location: ../views/login.php");
        }
    }
    public function LoginStudent(){
        if(isset($_POST['role']) && $_POST['role'] == 'student'){
            $Email = $_POST['email'];
            $password = $_POST['password'];
            $user=$this->model->loginstudents($Email, $password);

            if($user){
                    session_start();
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['role'] = 'student';
                    header("Location: ./Usercontroller.php");
                    exit();
                }
            else{
                header("Location: ../views/login.php?error=invalid");
                exit();
                }
            }
        }
    }
$user = new Users($con);
if(isset($_POST['Register'])){
    $user->RegisterStudent();
}

if(isset($_POST['Login'])){
    $user->LoginStudent();
}
?>

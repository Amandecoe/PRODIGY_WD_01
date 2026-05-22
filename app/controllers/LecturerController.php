<?php

include "../config/db.php";
include "../models/User.php";
class Lecturer{
    private $model;
    private $con;
    public function __construct($con){
        $this->con = $con;
        $this->model = new User($con);
    }
    public function RegisterLecturer(){
        if(isset($_POST['role']) && $_POST['role'] == 'lecturer'){
            $Fullname = $_POST['Fullname'];
            $Email = $_POST['email'];
            $Department = $_POST['Department'];
            $Course_code = $_POST['course_code'];
            $Password = $_POST['password'];
            $user = $this->model->RegisterLecturers($Fullname,$Email,$Department,$Password,$Course_code);
            if($user){
            header("Location: ../views/login.php");
            exit();
        }
        else{
            echo "Wrong Email or Password, Try Again";
        }
        }
        }
    public function LoginLecturer(){
        if(isset($_POST['role']) && $_POST['role'] == 'lecturer'){
            $Email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->model->Loginlecturers($Email,$password);
            if($user){
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

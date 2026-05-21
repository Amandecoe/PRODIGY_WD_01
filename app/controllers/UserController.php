<?php
//controller to get logged in user's information
include "../config/db.php";
include "../models/User.php";

class UserController{
    private $userModel;
    public function __construct($con){
        $this->userModel = new User($con); //instance for our class in User.php
    }
    public function getLoggedinStudent(){
        if(!isset($_SESSION['id'])){
            header("Location: ../views/login.php"); //if user is not logged in direct him to the login page
            exit();
        }
        $user_id = $_SESSION['id']; //id of the currently logged in user
        return $this->userModel->getstudentbyid($user_id); //use the function in User.php to get the user by his id (which we stored in $user_id just above)
    }
    public function getLoggedinLecturer(){
        if(!isset($_SESSION['id'])){
            header("Location: ../views/login.php");
        }
        $user_id = $_SESSION['id'];
        return $this->userModel->getlecturerbyid($user_id);
    }
}
$usercontroller = new UserController($con);
$user = $usercontroller->getLoggedinStudent();
$Lecturer = $usercontroller->getLoggedinLecturer();
include "../views/StudentDashboard.php";
?>

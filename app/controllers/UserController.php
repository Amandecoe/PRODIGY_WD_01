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
if(isset($_SESSION['role']) && $_SESSION['role'] == 'student'){
    $user = $usercontroller->getLoggedinStudent(); //if the logged in user is student get the student and pass it to dashboard
    include "../views/StudentDashboard.php";
    exit();
}

elseif(isset($_SESSION['role']) && $_SESSION['role'] == 'lecturer'){
    $Lecturer = $usercontroller->getLoggedinLecturer();
    include "../views/LecturerDashboard.php"; // if the logged in user is lecturer get the lecturer and pass it to dashboard
    exit();
}
else {
    die("SESSION ERROR: role not set or user not logged in");
}
?>

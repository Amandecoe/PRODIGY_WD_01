<?php
session_start();
include "../config/db.php";
require_once "../models/User.php";
include "../models/Project.php";

$userModel = new User($con);
$projectModel = new Project($con);

if(!isset($_SESSION['role'])){
    die("Not logged in");
}

if($_SESSION['role'] == 'lecturer'){

    $Lecturer = $userModel->getlecturerbyid($_SESSION['id']);
    $search = $_GET['search'] ?? "";
    $projects = $projectModel->displayprojectdetails($search);
    $total_students = $userModel->totalstudentsnumber();
    $total_submissions = $projectModel->displayprojectnumber();
    include "../views/LecturerDashboard.php";
    exit();
}

if($_SESSION['role'] == 'student'){
    $student_id = $_SESSION['id'];
    $Lecturer = $userModel->getlecturerbyassignment($_SESSION['id']);
    $Student = $userModel->getstudentbyid($_SESSION['id']);
    $project = $projectModel->displayassignedprojects($search); //this stores it as an array
    $grade = $projectModel->displaygrade($student_id);
    include "../views/StudentDashboard.php";
    exit();
}
?>

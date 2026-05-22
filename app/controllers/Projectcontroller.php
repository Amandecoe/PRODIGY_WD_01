<?php
include "../config/db.php";
include "../models/Project.php";
session_start();
class Projectcontroller{
    private $projectModel;

    public function __construct($con){
        $this->projectModel = new Project($con);
        }
    public function uploadfile(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $title = $_POST['project-title'];
            $student_id = $_SESSION['id'];
            $file_name = $_FILES['project-file']['name'];
            $tmp_name = $_FILES['project-file']['tmp_name'];
            $folder = "../uploads/".$file_name;
            $project_description = $_POST['project-description'];
            if(move_uploaded_file($tmp_name, $folder)){

                $this->projectModel->saveprojectdetails(
                    $title,
                    $folder,
                    $student_id,
                    $file_name,
                    $project_description,
                );

                header("Location: ../views/Dashboard.php");
                exit();

            } else {
                echo "File upload failed";
            }
        }
        }
    public function displayallproject(){
        if(isset($_SESSION['id'])){
            return $this->projectModel->displayprojectdetails();
        }
        return false;
    }

    }

$controller = new Projectcontroller($con);

if(isset($_SESSION['role'])){
    echo "No session";
    exit();
    }
    
    if($_SESSION['role'] == 'student'){
        $controller->uploadfile();
        include "../views/StudentDashboard.php";
        exit();
    }

    elseif($_SESSION['role'] == 'lecturer'){
        $projects = $controller->displayallproject();
        include "../views/LecturerDashboard.php";
        exit();
    }
else{
    echo "No session found";
}

?>

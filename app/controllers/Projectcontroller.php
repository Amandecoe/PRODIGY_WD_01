<?php
include "../config/db.php";
include "../models/Project.php";
echo "FILE LOADED";
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
            if(move_uploaded_file($tmp_name, $folder)){

                $this->projectModel->saveprojectdetails(
                    $title,
                    $folder,
                    $student_id,
                    $file_name,
                );

                header("Location: ../views/Dashboard.php");
                exit();

            } else {
                echo "File upload failed";
            }
        }
        }
    public function displayproject(){

    }
    }

$controller = new Projectcontroller($con);
$controller->uploadfile();
?>

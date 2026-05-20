<?php
include "../config/db.php";
include "../models/Project.php";
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);
class Projectcontroller{
    private $con;
    public function __construct($con){
        $this->con = $con;
    }
    public function uploadfile(){
        if(isset($_POST['Upload'])){
            $title = $_POST['project-title'];
            $student_id = $_SESSION['id'];
            $file_name = $_FILES['project-file']['name'];
            $tmp_name = $_FILES['project-file']['tmp_name'];
            $folder = "../uploads/".$file_name;
            move_uploaded_file($tmp_name, $folder);

            $this->con->saveprojectdetails(
                $title,
                $folder,
                $student_id,
                $file_name,
            );
            header("Location: ../views/Dashboard.php");
            exit();
        }
    }
}
$controller = new Projectcontroller($con);
$controller->uploadfile();
?>

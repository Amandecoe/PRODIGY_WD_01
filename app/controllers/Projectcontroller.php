<?php
include "../config/db.php";
include "../models/Project.php";

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
        }
    }
}
?>

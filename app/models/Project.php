<?php
include "../config/db.php";

class Project{
    private $con;
    public function __construct($con){
        $this->con = $con;
    }
    public function saveprojectdetails($title, $file_path, $student_id, $file_name){
        $sql = "INSERT INTO Submissions(project_title, file_path, Student_id, file_name)
        VALUES('$title','$file_path', '$student_id' , '$file_name')";
        mysqli_query($this->con, $sql);
    }
    public function displayprojectdetails(){
        
    }
}
?>

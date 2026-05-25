<?php
include "../config/db.php";

class Project{
    private $con;
    public function __construct($con){
        $this->con = $con;
    }
    public function saveprojectdetails($title, $file_path, $student_id, $file_name, $project_description){
        $sql = "INSERT INTO Submissions(project_title, file_path, Student_id, file_name, project_description)
        VALUES('$title','$file_path', '$student_id' , '$file_name','$project_description')";
        mysqli_query($this->con, $sql);
    }
    public function displayprojectdetails($search=""){
        if($search){
        $sql =
        "SELECT * FROM Submissions
        WHERE project_title
        LIKE '%$search%'";
        }
    else{
        $sql =
        "SELECT * FROM Submissions";
    }
    return mysqli_query($this->con,$sql);
    }
    public function displayprojectnumber(){
        $sql = "SELECT COUNT(*) AS total FROM Submissions";
        return mysqli_query($this->con, $sql);
    }
    public function totalprojectsbylec(){
        
    }
}
?>

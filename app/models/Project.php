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
        $sql = "SELECT COUNT(*) FROM Submissions";
        $result=mysqli_query($this->con, $sql);
        $num_rows = mysqli_fetch_row($result);
        return $num_rows[0];
    }

    public function assignprojects($lecturer_id,$description,$department,$year,$semester,$title){
        $sql="INSERT INTO projects(lecturer_id,description,target_dept,target_year,target_sem,project_title)
        VALUES('$lecturer_id','$description', '$department', '$year', '$semester','$title')";
        $result=mysqli_query($this->con, $sql);
        return $result;
    }

    public function uploadgrade($Grade, $feedback, $lecturer_id){
        $sql = "INSERT into Submissions(grade, feedback, graded_by)
        VALUES('$Grade', '$feedback', '$lecturer_id' )";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }
    public function displaygrade($student_id){
        $sql = "SELECT grade, feedback, graded_by, graded_at FROM Submissions
        WHERE Student_id = '$student_id'";
        return mysqli_query($this->con, $sql);
    }
}
?>

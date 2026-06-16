<?php
include "../config/db.php";
class Project{
    private $con;
    public function __construct($con){
        $this->con = $con;
    }
    public function saveprojectdetails($project_id, $title,$student_id, $file_path, $file_name, $project_description){
    $sql = "INSERT INTO Submissions
            (project_id, project_title,student_id, file_path, file_name, project_description)
            VALUES
            ('$project_id', '$title','$student_id', '$file_path', '$file_name', '$project_description')";
    return mysqli_query($this->con, $sql);
    }
    public function getStudentSubmissions($student_id){
    $sql = "SELECT * FROM Submissions WHERE student_id = '$student_id'";
    return mysqli_query($this->con, $sql);
}
    public function displayprojectdetails($search = ""){
    $sql = "SELECT s.*, p.project_title
            FROM Submissions s
            JOIN projects p ON s.project_id = p.id";
    if($search){
        $sql .= " WHERE p.project_title LIKE '%$search%'";
    }
    return mysqli_query($this->con, $sql);
}
    public function displayprojectnumber(){
        $sql = "SELECT COUNT(*) FROM Submissions ";
        $result=mysqli_query($this->con, $sql);
        $num_rows = mysqli_fetch_row($result) ;
        return $num_rows[0]+1;
    }

    public function assignprojects($lecturer_id,$description,$department,$year,$semester,$title){
        $sql="INSERT INTO projects(lecturer_id,description,target_dept,target_year,target_sem,project_title)
        VALUES('$lecturer_id','$description', '$department', '$year', '$semester','$title')";
        $result=mysqli_query($this->con, $sql);
        return $result;
    }

    public function uploadgrade($submission_id, $grade, $feedback, $lecturer_id){
    $sql = "UPDATE Submissions
            SET grade='$grade',
                feedback='$feedback',
                graded_by='$lecturer_id',
                graded_at=NOW()
            WHERE id='$submission_id'";
    return mysqli_query($this->con, $sql);
}
    public function displaygrade($student_id){
        $sql = "SELECT s.grade, s.feedback, s.graded_by, s.graded_at, p.project_title
        FROM Submissions s
        JOIN projects p ON s.project_id = p.id
        WHERE s.student_id = '$student_id'";
        return mysqli_query($this->con, $sql);
    }
    public function displayassignedprojects(){
        $sql = "SELECT * FROM projects";
        return mysqli_query($this->con, $sql);
    }
    public function displayassignedprojectsnumber(){
        $sql = "SELECT COUNT(*) FROM projects";
        $result=mysqli_query($this->con, $sql);
        $num_rows = mysqli_fetch_row($result);
        return $num_rows[0];
    }
}
?>

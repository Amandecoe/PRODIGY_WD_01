<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectsubmissionproject";

$con = mysqli_connect($servername, $username,$password, $dbname);

if(mysqli_connect_errno()){
    echo "Can not connect to Database!!";
    exit();
}
?>

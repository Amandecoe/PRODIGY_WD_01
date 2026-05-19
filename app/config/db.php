<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectsubmissionproject";

$connection = mysqli_connect($servername, $username,$password, $dbname);

if(mysqli_connect_errorno()){
    echo "Can not connect to Database!!";
    exit();
}
echo "Connection Success";
?>

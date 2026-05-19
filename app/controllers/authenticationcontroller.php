<?php
session_start();

include "../config/db.php";


        if (isset($_POST['Register'])) {
            $FullName = $_POST['Fullname'];
            $Email = $_POST['email'];
            $Department = $_POST['Department'];
            $Year = $_POST['year'];
            $Semester = $_POST['Semester'];
        }

        


?>

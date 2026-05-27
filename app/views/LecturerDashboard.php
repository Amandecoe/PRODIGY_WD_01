<html>
    <head>
        <link rel="stylesheet" href="../assets/css/dashboard.css"/>
    </head>
    <body>
        <div class="top-title">
            <div class = "title">
        <h1>Dashboard</h1>
        <p>Manage your Student's Projects and Grade them</p>
            </div>
            <div class="profile_info">
                <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="rgba(84, 82, 82, 0.34)"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm146.5-204.5Q340-521 340-580t40.5-99.5Q421-720 480-720t99.5 40.5Q620-639 620-580t-40.5 99.5Q539-440 480-440t-99.5-40.5ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm100-95.5q47-15.5 86-44.5-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160q53 0 100-15.5ZM523-537q17-17 17-43t-17-43q-17-17-43-17t-43 17q-17 17-17 43t17 43q17 17 43 17t43-17Zm-43-43Zm0 360Z"/></svg>
                <div class="info">
        <h3> <?php echo $Lecturer['Name']?></h3>
        <h5>Lecturer</h5>
        <p><?php echo $Lecturer['Email']?></p>
                </div>
            </div>
        </div>
        <div id="top-section">
            <div id="top-cards">
            <h3>Total Submissions</h3>
            <h1><?php echo $total_submissions;?></h1>
            </div>
            <div id="top-cards">
            <h3>Total Students</h3>
            <h1><?php echo $total_students;?></h1>
            </div>
        </div>
        <div class="Projects">
            <h2>Projects</h2>
            <div class="top-container">
        <div>
        <form class="search" method="GET">
        <input type="text" name="search" placeholder="Search projects...">
        <button class="submit" type="submit">Search</button>
        <a href="../controllers/DashboardController.php" class="clear-btn">Clear</a>
        </form>
        </div>
        <div id="assign-project">
            <a href="../views/assign_project.php" class="assign-btn">Assign Project +</a>
        </div>
        </div>
        <?php while($project = mysqli_fetch_assoc($projects) ) { ?>
        <div class="project-card">
        <h3>
            Project Title:
            <?php echo $project['project_title'];  ?>
        </h3>
        <p>
            Student:
            <?php
            $student =
            $userModel->getStudentBySubmission(
            $project['Student_id']
            );
            echo $student['Name'];
        ?>
        </p>
        <p>
            Uploaded File:
            <?php echo $project['file_path']; ?>
        </p>
        <div id="link">
        <a class="btn" href="/Proj_Sub/<?php echo $project['file_path']; ?>" download>
            Download
        </a>
        <a class="btn" href="">Grade</a>
        </div>
    </div>
<?php } ?>
</div>
    </body>
</html>

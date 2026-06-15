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
                <a type="button" class="logout-link"
                href='../controllers/LogoutController.php'">
                Logout
        </a>
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
        <a class="btn"
        href="/Proj_Sub/app/views/gradeprojects.php?submission_id=<?php echo $project['id']; ?>">
        Grade
        </a>
        </div>
    </div>
<?php } ?>
</div>
    </body>
</html>

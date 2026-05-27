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
                <svg xmlns="http://www.w3.org/2000/svg" height="55px" viewBox="0 -960 960 960" width="55px" fill="#545353"><path d="M249.33-252q53.67-36.67 108.84-58 55.16-21.33 121.83-21.33T601.83-310q55.17 21.33 108.84 58Q753-295.67 778.5-353.33 804-411 804-480q0-135-94.5-229.5T480-804q-135 0-229.5 94.5T156-480q0 69 25.5 126.67Q207-295.67 249.33-252Zm150-248.67q-32.66-32.66-32.66-80.66T399.33-662Q432-694.67 480-694.67T560.67-662q32.66 32.67 32.66 80.67t-32.66 80.66Q528-468 480-468t-80.67-32.67ZM480-132q-73 0-136.17-27-63.16-27-110.5-74.33Q186-280.67 159-343.83 132-407 132-480q0-73 27-136.17 27-63.16 74.33-110.5Q280.67-774 343.83-801 407-828 480-828q73 0 136.17 27 63.16 27 110.5 74.33Q774-679.33 801-616.17 828-553 828-480q0 73-27 136.17-27 63.16-74.33 110.5Q679.33-186 616.17-159 553-132 480-132Zm113.17-44.5q56.5-20.5 98.16-58.17-41.66-33.33-95.5-53Q542-307.33 480-307.33t-116.33 19.16q-54.34 19.17-94.34 53.5 41 37.67 97.5 58.17T480-156q56.67 0 113.17-20.5Zm-49.5-341.17q25.66-25.66 25.66-63.66T543.67-645Q518-670.67 480-670.67T416.33-645q-25.66 25.67-25.66 63.67t25.66 63.66Q442-492 480-492t63.67-25.67ZM480-581.33Zm0 349.66Z"/></svg>
                <div class="info">
        <h4> <?php echo $Lecturer['Name']?></h4>
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
        <a class="btn" href="../views/gradeprojects.php">Grade</a>
        </div>
    </div>
<?php } ?>
</div>
    </body>
</html>

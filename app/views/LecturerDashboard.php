<html>
    <head>
        <link rel="stylesheet" href="../assets/css/dashboard.css"/>
    </head>
    <body>
        <h1>Dashboard</h1>
        <h3>Welcome <?php echo $Lecturer['Name']?></h3>
        <div class="Projects">
            <h2>Projects</h2>
        <?php while($project = mysqli_fetch_assoc($projects) ) { ?>
        <div class="project-card">
        <h3>
            Project Title:
            <?php echo $project['project_title']; ?>
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
        <a class="btn" href="../<?php echo $project['file_path']; ?>" download>
            Download
        </a>
        <a class="btn" href="">Grade</a>
        </div>
    </div>
<?php } ?>
</div>
    </body>
</html>


<html>
    <body>
        <h1>Dashboard</h1>
        <p>Welcome <?php echo $Lecturer['Name']?></p>
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
            Student ID:
            <?php echo $project['Student_id']; ?>
        </p>
        <p>
            Project Description:
            <?php echo $project['project_description'] ?>
        </p>
        <p>
            Uploaded File:
            <?php echo $project['file_path']; ?>
        </p>
        <a href="../<?php echo $project['file_path']; ?>" download>
            Download
        </a>
        <a>Grade</a>
    </div>
<?php } ?>
</div>
    </body>
</html>

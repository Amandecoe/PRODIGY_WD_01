<html>
    <body>
        <h1>Dashboard</h1>
        <p>Welcome <?php echo $Lecturer['Name']?></p>
        <?php while($project = mysqli_fetch_assoc($projects)) { ?>
        <div class="project-card">
        <h3>
            Project Title:
            <?php echo $project['project_title']; ?>
        </h3>
        <p>
            Student ID:
            <?php echo $project['Student_id']; ?>
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
    </body>
</html>

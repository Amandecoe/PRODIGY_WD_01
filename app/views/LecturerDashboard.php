<html>
    <head>
        <link rel="stylesheet" href="../assets/css/dashboard.css"/>
    </head>
    <body>
        <div class="top-title">
        <h1>Dashboard</h1>
        <h3>Welcome <?php echo $Lecturer['Name']?></h3>
        </div>
        <div id = "assign-project">

        </div>
        <div class="Projects">
            <h2>Projects</h2>

        <form method="GET">
        <input type="text" name="search" placeholder="Search projects...">
        <button type="submit">Search</button>
        </form>
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

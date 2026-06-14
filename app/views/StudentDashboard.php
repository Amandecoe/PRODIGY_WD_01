<html>
    <head>
        <link rel="stylesheet" href="../assets/css/dashboard.css"/>
    </head>
    <body>
        <div class="top-title">
        <h1>Dashboard</h1>
        </div>
        <div id = "top-section">
        <div id = "top-cards">
        <h3>Total Projects</h3>
        <h1>10</h1>
        </div>
        </div>
        </div>
        <div id = "Projects">
            <h2 style="padding:30px;">Projects</h2>
            <div id="Submitted-proj">
            <div class="project-card">
            <div class="choice-button">
                <button id="Due">Due Projects</button>
                <button id="Submitted">Submitted Projects</button>
            </div>
                <h3>
                <?php   while($row = mysqli_fetch_assoc($project)){ ?>
                <div class="project-card">
                    <h3>
                        Project Title:
                        <?php echo $row['project_title']; ?>
                    </h3>
                    <p>
                        Lecturer:
                        <?php
                        echo $Lecturer['Name'];
                        ?>
                    </p>
                    <p>
                        Project Description:
                        <?php echo $row['description']; ?>
                    </p>
                    <button class="upload"><a  href="/Proj_Sub/app/views/submit_project.php">Upload Project</a></button>
                </div>
                <?php  }?>
                </h3>
                <p>
                </p>
            </div>
        </div>
        <div id = "Due-projects">
        </div>
        </div>
    </body>
    <script src="../assets/js/script.js"defer></script>
</html>

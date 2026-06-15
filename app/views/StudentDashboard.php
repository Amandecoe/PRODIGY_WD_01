<html>
    <head>
        <link rel="stylesheet" href="../assets/css/dashboard.css"/>
    </head>
    <body>
        <div class="top-title">
        <h1>Dashboard</h1>
        <a type="button" class="logout-link"
        href='../controllers/LogoutController.php'>
        Logout
        </a>
        </div>
        <p style="padding-left:30px; margin-bottom: 10px;">Welcome, Submit your Projects on time for accurate Marks</p>
        <div id = "top-section">
        <div id = "top-cards">
        <h3>Total Projects</h3>
        <h1><?php echo $num_proj;?></h1>
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
                    <a type="button" class="assign-btn" href="../views/submit_project.php">
                    Upload Project +
                    </a>
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


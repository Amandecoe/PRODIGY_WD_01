<html>
    <head>
        <link rel="stylesheet" href="../assets/css/dashboard.css"/>
    </head>
    <body>
        <h1>Dashboard</h1>
        <p>Welcome <?php echo $user['Name']?></p>
        <div id = "top-section">
        <div id = "top-cards">
        <h3>Total Projects</h3>
        </div>
        <div id = "top-cards">
        <h3>Average Grade</h3>
        </div>
        </div>
        <div id = "Projects">
            <div class="project-card">
                <h3>
                Lecturer:
                <?php ?>
                </h3>
                <p>
                
                </p>
            </div>
        </div>
        <a href="/Proj_Sub/app/views/submit_project.php">Upload Project</a>
    </body>
</html>

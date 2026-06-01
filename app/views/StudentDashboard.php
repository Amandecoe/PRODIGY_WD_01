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
        <h1>10</h1>
        </div>
        <div id = "top-cards">
        <h3>Average Grade</h3>
        <h1>A</h1>
        </div>
        </div>
        <div id = "Projects">
            <h2>Projects</h2>
            
            <div id="Submitted-proj">
            <div class="project-card">
                <h3>
                <?php   while($row = mysqli_fetch_assoc($project)){
                echo $row['project_title'];
                }?>
                </h3>
                <p>
                </p>
            </div>
        </div>
        <div id = "Due-projects">
        </div>
        </div>
        <a href="/Proj_Sub/app/views/submit_project.php">Upload Project</a>
    </body>
</html>

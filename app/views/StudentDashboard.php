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
        <?php while($row = mysqli_fetch_assoc($projects)) { ?>

    <div class="project-card">

        <h3>
            Project Title: <?php echo $row['project_title']; ?>
        </h3>

        <p>
            Lecturer: <?php echo $row['lecturer_name'] ?? 'N/A'; ?>
        </p>

        <p>
            Description: <?php echo $row['project_description']; ?>
        </p>

        <!-- STATUS LOGIC ONLY HERE -->
        <?php if(!empty($row['grade'])) { ?>

            <p style="color:green;">
                Grade: <?php echo $row['grade']; ?>
            </p>

        <?php } else { ?>

            <a class="assign-btn"
            href="../views/submit_project.php?project_id=<?php echo $row['project_id']; ?>">
                Upload Project +
            </a>
        <?php } ?>
    </div>
<?php } ?>
</div>
    <script src="../assets/js/script.js"defer></script>
</html>


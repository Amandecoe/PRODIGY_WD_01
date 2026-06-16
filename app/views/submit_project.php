<?php
$project_id = $_GET['project_id'] ?? '';
if(empty($project_id)){
    die("Project ID missing in URL");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/form.css">
    <title>Upload Project</title>
</head>
<body>
    <div class="form-container">
        <a href="../controllers/DashboardController.php" class="close-btn">
            &times;
        </a>
        <h2>Upload Project</h2>
        <form action="../controllers/Projectcontroller.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="project_id" value="<?php echo $project_id; ?>">
    <label>Project Title</label>
    <input type="text" name="project-title" required>
    <label>Description</label>
    <textarea name="project-description" required></textarea>
    <label>File</label>
    <input type="file" name="project-file" required>
    <button class="submit-btn" type="submit">Upload</button>
</form>
    </div>
</body>
</html>

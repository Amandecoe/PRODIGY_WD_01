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
        <form action="../controllers/Projectcontroller.php"method="post" enctype="multipart/form-data">

            <label for="title">Project Title</label>
            <input id="title"type="text" name="project-title" required>

            <label for="description">Project Description</label>
            <textarea id="description" name="project-description" rows="4" required></textarea>

            <label for="file">File</label>
            <input id="file" type="file" name="project-file" required>
            <button type="submit"
                    name="upload"
                    class="submit-btn">
                Upload
            </button>
        </form>
    </div>
</body>
</html>

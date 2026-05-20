<html>
    <body>
        <form action = "../controllers/Projectcontroller.php" method="post" enctype="multipart/form-data">
        <label>Project Title</label>
        <input type="text" name="project-title" required>
        <label>Project Description</label>
        <input type = "text" name="project-description" required>
        <label>File</label>
        <input type = "file" name="project-file">
        <button type="submit" name = "upload">Upload</button>
        </form>
    </body>
</html>

<html>
    <body>
        <div class="form-container">
        <link rel="stylesheet" href="../assets/css/form.css">
        <a href="../controllers/DashboardController.php" class="close-btn">
            &times;
        </a>
        <form action="../controllers/Projectcontroller.php" method="post" enctype="multipart/form-data">
        <label>Project Title</label>
        <input type="text" name="project_title" required>
        <label>Project Description</label>
        <input type="text" name="project_description" required>
        <label>Department</label>
            <select name="Department" required>
            <option value = "" >None</option>
            <option value = "ComputerScience">Computer Science</option>
            <option value = "Marketing_and_Management">Marketing and Management</option>
            <option value = "Accounting">Accounting</option>
            <option value = "Economics">Economics</option>
            </select>
        <label>Year</label>
        <input type = "text" placeholder = "2016" name = "year" inputmode="numeric" maxlength="4" required>
        <label>Semester</label>
        <select name = "Semester" required>
        <option value = "1">1</option>
        <option value = "2">2</option>
        <option value = "3">3</option>
        </select>
        <button type="submit" name = "assign" class="submit-btn">Assign Project</button>
        </form>
        </div>
    </body>
</html>

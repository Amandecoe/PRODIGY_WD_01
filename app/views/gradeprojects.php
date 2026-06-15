<?php
$submission_id = $_GET['submission_id'];
?>
<html>
    <body>
        <form method="post" action="../controllers/Projectcontroller.php">
            <input type="hidden" name="submission_id"
            value="<?php echo $submission_id; ?>">
            <label>Lecturer Name</label>
            <input type = "text" name="lecturer_name" required>
            <label>Grade</label>
            <input type = "text" name="grade">
            <label>Feedback</label>
            <textarea name="feedback" placeholder="Improve your ..."></textarea>
            <button type="submit" name="graded">Grade</button>
        </form>
    </body>
</html>

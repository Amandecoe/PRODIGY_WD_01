
<html>
    <head>
        <link rel="stylesheet" href="../assets/css/main.css"/>
    </head>
    <body>
        <div class="form-container">
            <h2>Welcome Back</h2>
            <p>Sign in into you account</p>
        <div class = "choice-button">
            <button onclick="choice()" id = "Student-choice">Student</button>
            <button onclick ="choice()" id="Lecturer-choice">Lecturer</button>
        </div>
        <div id = "Student">
            <form action = "../controllers/Studentcontroller.php" method = "post">
                <label>Email</label>
                <input type = "email" name = "email" placeholder = "AbebeBekele@gmail.com" required>
                <label>Password</label>
                <input type="password" name = "password" placeholder = "user123" required>
                <input type="hidden" name="role" value="student">
                <button id="final" type="submit" name = "Login"> Sign In</button>
            </form>
        </div>
        <div id = "Lecturer">
            <form action = "../controllers/LecturerController.php" method = "post">
                <label>Email</label>
                <input type = "email" name = "email" placeholder = "AbebeBekele@gmail.com" required>
                <label>Password</label>
                <input type="password" name = "password" placeholder = "abebe123" required>
                <input type="hidden" name="role" value="lecturer">
                <button id="final" type="submit" name = "Login">Sign In</button>
            </form>
        </div>
        </div>
    </body>
    <script src="../assets/js/script.js"defer></script>
</html>
<?php
if(isset($_GET['error'])){
    if($_GET['error'] == 'invalid'){
        echo "<p style='color:red;'>Wrong Email or Password, Try Again</p>";
    }
}
?>

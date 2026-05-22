
<html>
    <head>
        <link rel="stylesheet" href="../assets/css/main.css"/>
    </head>
    <body>
        <div class="form-container">
            <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#000000"><path d="M480-120 200-272v-240L40-600l440-240 440 240v320h-80v-276l-80 44v240L480-120Zm0-332 274-148-274-148-274 148 274 148Zm0 241 200-108v-151L480-360 280-470v151l200 108Zm0-241Zm0 90Zm0 0Z"/></svg>
            <h2>Welcome Back</h2>
            <p>Sign in into your account</p>
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
            <p id="link"><a href="./Sign_up.php">Create an Account?</a></p>
        </div>
        <div id = "Lecturer">
            <form action = "../controllers/LecturerController.php" method = "post">
                <label>Email</label>
                <input type = "email" name = "email" placeholder = "BirukAbebe@gmail.com" required>
                <label>Password</label>
                <input type="password" name = "password" placeholder = "abebe123" required>
                <input type="hidden" name="role" value="lecturer">
                <button id="final" type="submit" name = "Login">Sign In</button>
            </form>
            <p id="link"><a href="./Sign_up.php">Create an Account?</a></p>
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

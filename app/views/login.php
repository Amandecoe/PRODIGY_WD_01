<html>
    <body>
        <div class="form-container">
            <h3>Welcome Back</h3>
            <p>Sign in into you account</p>
        <div class = "choice-button">
            <button>Student</button>
            <button>Lecturer</button>
        </div>
        <div id = "Student">
            <form action = "../controllers/authenticationcontroller.php" method = "post">
                <label>Email</label>
                <input type = "email" name = "email" placeholder = "AbebeBekele@gmail.com" required>
                <label>Password</label>
                <input type="password" name = "password" placeholder = "user123" required>
                <input type="hidden" name="role" value="student">
                <button name = "Login"> Sign In</button>
            </form>
        </div>
        <div id = "Lecturer">
            <form action = "./controllers/authenticationcontroller.php" method = "post">
                <label>Email</label>
                <input type = "email" name = "email" placeholder = "AbebeBekele@gmail.com" required>
                <label>Password</label>
                <input type="password" name = "password" placeholder = "abebe123" required>
                <input type="hidden" name="role" value="lecturer">
                <button name = "Login">Sign In</button>
            </form>
        </div>
        </div>
    </body>
</html>

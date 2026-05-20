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
                <button name = "Login"> Sign Up</button>
            </form>
        </div>
        </div>
    </body>
</html>

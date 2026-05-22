<html>
    <head>
        <link rel="stylesheet" href="../assets/css/auth.css">
    </head>
    <body>
        <div class = "form-container">
        <h2>Create Account</h2>
        <div class = "choice-button">
            <button  onclick="choice()" id="Student-choice" >Student</button>
            <button  onclick="choice()" id = "Lecturer-choice">Lecturer</button>
        </div>
        <div id = "Student">
        <form action = "../controllers/Studentcontroller.php" method="post">
        <label>Full Name</label>
        <input type = "text" placeholder = "Abebe Bekele" name = "Fullname" required>
        <label>Email</label>
        <input type = "Email" placeholder = "AbebeBekele@gmail.com" name = "email" >
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
        <label>Student ID</label>
        <input type = "text" placeholder = "RCD2020" name = "Student_Id">
        <label>Password</label>
        <input type = "password" placeholder = "user123" name = "password" required>
        <input type="hidden" name="role" value="student">
        <button id="final" name = "Register">Sign Up</button>
        </form>
        <p id="link"><a href="./login.php">Already has an Account?</a></p>
        </div>

        <div id = "Lecturer">
        <form action="../controllers/LecturerController.php" method = "post">
            <label>Full Name</label>
            <input type="text" placeholder = "Abeke Bekele" name="Fullname" required>
            <label>Email</label>
            <input type="Email" placeholder="AbebeBekele@gmail.com" name="email" required>
            <label>Department</label>
            <select name="Department" required>
            <option value = "" >None</option>
            <option value = "ComputerScience">Computer Science</option>
            <option value = "Marketing_and_Management">Marketing and Management</option>
            <option value = "Accounting">Accounting</option>
            <option value = "Economics">Economics</option>
            </select>
            <label>Course Code</label>
            <input type = "text" placeholder="2039" name="course_code" required>
            <label>Password</label>
            <input type = "password" placeholder="abebe123" name="password">
            <input type="hidden" name="role" value="lecturer">
            <button id = "final" name="Register"> Sign Up</button>
        </form>
        <p id="link"><a href="./login.php">Already has an Account?</a></p>
        </div>

        </div>
    </body>
    <script src="../assets/js/script.js"defer></script>
</html>

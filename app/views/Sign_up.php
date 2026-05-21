
<html>
    <body>
        <div class = "form-container">
        <h3>Create Account</h3>
        <div class = "choice-button">
            <button>Student</button>
            <button>Lecturer</button>
        </div>
        <div id = "Student">
        <form action = "../controllers/authenticationcontroller.php" method="post">
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
        <button name = "Register">Sign Up</button>
        </form>
        </div>

        <div id = "Lecturer">
        <form>
            
        </form>
        </div>

        </div>
    </body>
</html>

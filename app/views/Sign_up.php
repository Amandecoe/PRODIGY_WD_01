<html>
    <body>
        <div class = "Signup-container">
        <h3>Create Account</h3>
        <div class = "choice-button">
            <button>Student</button>
            <button>Lecturer</button>
        </div>
        <div id = "Student">
        <form action="post">
        <label>Full Name</label>
        <input type = "text" placeholder = "Abebe Bekele" name = "Fullname"/>
        <label>Email</label>
        <input type = "Email" placeholder = "AbebeBekele@gmail.com" name = "email"/>
        <label>Department</label>
        <select name="Department" required>
        <option value = "" >None</option>
        <option value = "ComputerScience">Computer Science</option>
        <option value = "Marketing_and_Management">Marketing and Management</option>
        <option value = "Accounting">Accounting</option>
        <option value = "Economics">Economics</option>
        </select>
        <label>Year</label>
        <input type = "text" placeholder = "2016" name = "year" inputmode="numeric" maxlength="4"/>
        <label>Semester</label>
        <select name = "Semester" required>
        
        </select>
        </form>
        </div>
        </div>
    </body>
</html>

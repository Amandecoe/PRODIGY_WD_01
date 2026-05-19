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
        <label>Year</label>
        <input type = "text" placeholder = "2016" name = "year" inputmode="numeric" maxlength="4"/>
        <label>Department</label>
        <select name="Department" required>
        <option value = "" >Select Department</option>
        <option value = "">Computer Science</option>
        </select>
        </form>
        </div>
        </div>
    </body>
</html>

let student = document.getElementById("Student");
let lecturer = document.getElementById("Lecturer");
let studentchoicebutton = document.getElementById("Student-choice");
let lecturerchoicebutton = document.getElementById("Lecturer-choice");

student.style.display = "block";
lecturer.style.display = "none";

function choice(){
    studentchoicebutton.addEventListener("click", () => {
        student.style.display = "block";
        lecturer.style.display = "none";
    });

    lecturerchoicebutton.addEventListener("click", () => {
        lecturer.style.display = "block";
        student.style.display = "none";
    })};

let student = document.getElementById("Student");
let lecturer = document.getElementById("Lecturer");
let studentchoicebutton = document.getElementById("Student-choice");
let lecturerchoicebutton = document.getElementById("Lecturer-choice");

student.style.display = "inline"; //default when the pages load
lecturer.style.display = "none";

function choice(){
    studentchoicebutton.addEventListener("click", () => {
        student.style.display = "inline";
        lecturer.style.display = "none";
    });

    lecturerchoicebutton.addEventListener("click", () => {
        lecturer.style.display = "inline";
        student.style.display = "none";
    })};

    


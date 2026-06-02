window.addEventListener("DOMContentLoaded", () => {
let student = document.getElementById("Student");
let lecturer = document.getElementById("Lecturer");
let studentchoicebutton = document.getElementById("Student-choice");
let lecturerchoicebutton = document.getElementById("Lecturer-choice");
let Dueproject = document.getElementById("Due");
let Submitted = document.getElementById("Submitted");

student.style.display = "inline"; //default when the pages load
lecturer.style.display = "none";

studentchoicebutton.classList.add("active");
lecturerchoicebutton.classList.remove("active");

function choice(){
    studentchoicebutton.addEventListener("click", () => {
        student.style.display = "inline";
        lecturer.style.display = "none";

        studentchoicebutton.classList.add("active");
        lecturerchoicebutton.classList.remove("active");
    });

    lecturerchoicebutton.addEventListener("click", () => {
        lecturer.style.display = "inline";
        student.style.display = "none";
        lecturerchoicebutton.classList.add("active");
            studentchoicebutton.classList.remove("active");
    })};
function proj(){
    Dueproject.addEventListener("click", () => {
        Dueproject.classList.add("active");
        Dueproject.classList.remove("active");
    })

    Submitted.addEventListener("click", () =>{
        Submitted.classList.add("active");
        Submitted.classList.remove("active");
    })
}
choice();
});


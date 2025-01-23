import { navbar } from "./navbar.js";
navbar();

var x = document.getElementById("myInput");
x.addEventListener('click', function () {
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
});
var y = document.getElementById("myInput1");
y.addEventListener('click', function () {
    if (y.type === "password") {
        y.type = "text";
    } else {
        y.type = "password";
    }
});

const togglePassword = document.querySelector("#myInput");
const togglePassword1 = document.querySelector("#myInput1");
const password = document.querySelector("#password");
const password1= document.querySelector("#password1");

togglePassword.addEventListener("click", function () {
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    this.classList.toggle("bi-eye");
});

togglePassword1.addEventListener("click", function () {
    const type = password1.getAttribute("type") === "password" ? "text" : "password";
    password1.setAttribute("type", type);
    this.classList.toggle("bi-eye");
});

// prevent form submit
const form = document.querySelector("form");
form.addEventListener('submit', function (e) {
    e.preventDefault();
})


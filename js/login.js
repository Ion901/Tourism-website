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

const togglePassword = document.querySelector("#myInput");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
  // toggle the type attribute
  const type = password.getAttribute("type") === "password" ? "text" : "password";
  password.setAttribute("type", type);

  // toggle the icon
  this.classList.toggle("bi-eye");


});

// prevent form submit
const form = document.querySelector("form");
form.addEventListener('submit', function (e) {
  e.preventDefault();
})


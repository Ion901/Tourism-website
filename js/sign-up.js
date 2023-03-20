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

window.onscroll = function () {
    stickyI();
}

function stickyI() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 150) {
        document.querySelector(".sticked").classList.add('sticky');
        document.querySelector(".Layer_1").classList.add('Layer_2');
    } else {
        document.querySelector(".sticked").classList.remove('sticky');
        document.querySelector(".Layer_1").classList.remove('Layer_2');
    }

}
const clearInput = () => {
    const input = document.getElementsByTagName("input")[0];
    input.value = "";
}

const clearBtn = document.getElementById("clear-btn");
clearBtn.addEventListener("click", clearInput);

let b = document.querySelector('body');

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "right") {
        x.className += " responsive";
        b.style.overflow = 'hidden';
    } else {
        x.className = "right";
        b.style.overflow = 'visible';
        x.classList.remove('responsive');

    }
}
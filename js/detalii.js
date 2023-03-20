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

let button = document.querySelector('.rezer');
button.addEventListener('click', function () {
  window.open('../book/book.html', '_self');
});



if (localStorage.getItem('buton') == 'only') {
  let cont = document.querySelector('.cont');
  let main = document.querySelector('section');
  let circle = document.querySelector('.water');

  cont.style.display = 'inline-flex'
  cont.style.backgroundColor = "block"
  cont.style.boxShadow = 'inset 5px 2px 37px 12px #000000;'
  circle.style.display = 'block';
  main.style.display = 'none';

  setTimeout(() => {
    cont.removeAttribute('style');
    main.removeAttribute('style');
    circle.removeAttribute('style');
    main.style.transition = "500ms linear"

  }, 2500);
}
localStorage.removeItem('buton');

if (localStorage.getItem('cart') == 'try') {
  let cart_items = document.querySelector('.grid-template');
  let div = document.createElement('div');
  let para = document.createElement('p');
  let i = document.createElement('i');
  let span = document.createElement('span');
  span.innerHTML = "Coșul DVS."

  i.className = "fa-solid fa-cart-shopping";
  para.className = 'cart';
  para.appendChild(i);
  para.appendChild(span);
  div.appendChild(para);

  cart_items.insertAdjacentElement("beforeend", div);


}

let cart_container = document.querySelector('.cart-container');
var close = document.querySelector('.close');
var body = document.querySelector('body');
var action = document.querySelector('.action');
let cart = document.querySelector('.cart')
cart.addEventListener('click', function () {

  cart_container.classList.add('active');
  body.classList.add("hidden");
});



close.addEventListener('click', function () {
  cart_container.classList.remove('active');
  body.classList.remove('hidden');
});

let location1 = document.querySelector('.location');
console.log(location1);
location1.classList.add('hidden1');





















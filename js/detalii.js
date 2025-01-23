import { navbar } from "./navbar.js";
navbar();


var id = document.querySelector('.id')?.id || null;
localStorage.setItem('id_info',Number(id));

// let button = document.querySelector('.rezer');
// button.addEventListener('click', function () {
//   window.open('../book/book.html', '_self');
// });



// if (localStorage.getItem('buton') == 'only') {
//   let cont = document.querySelector('.cont');
//   let main = document.querySelector('section');
//   let circle = document.querySelector('.water');

//   cont.style.display = 'inline-flex'
//   cont.style.backgroundColor = "block"
//   cont.style.boxShadow = 'inset 5px 2px 37px 12px #000000;'
//   circle.style.display = 'block';
//   main.style.display = 'none';

//   setTimeout(() => {
//     cont.removeAttribute('style');
//     main.removeAttribute('style');
//     circle.removeAttribute('style');
//     main.style.transition = "500ms linear"

//   }, 2500);
// }
// localStorage.removeItem('buton');

// if (localStorage.getItem('cart') == 'try') {
//   let cart_items = document.querySelector('.grid-template');
//   let div = document.createElement('div');
//   let para = document.createElement('p');
//   let i = document.createElement('i');
//   let span = document.createElement('span');
//   span.innerHTML = "Coșul DVS."

//   i.className = "fa-solid fa-cart-shopping";
//   para.className = 'cart';
//   para.appendChild(i);
//   para.appendChild(span);
//   div.appendChild(para);

//   cart_items.insertAdjacentElement("beforeend", div);


// }

// let cart_container = document.querySelector('.cart-container');
// var close = document.querySelector('.close');
// var body = document.querySelector('body');
// var action = document.querySelector('.action');
// let cart = document.querySelector('.cart')
// cart.addEventListener('click', function () {

//   cart_container.classList.add('active');
//   body.classList.add("hidden");
// });

// close.addEventListener('click', function () {
//   cart_container.classList.remove('active');
//   body.classList.remove('hidden');
// });

// let location1 = document.querySelector('.location');
// console.log(location1);
// location1.classList.add('hidden1');
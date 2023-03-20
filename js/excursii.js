window.onscroll = function() {
    stickyI();
}

function stickyI() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 150) {
    document.querySelector(".sticked").classList.add('sticky');
    document.querySelector(".Layer_1").classList.add('Layer_2');
  } else{
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

 let prima = document.querySelector('.prima');
 prima.addEventListener('click', function(){
   window.open('../detalii/detalii.html','_self');
   localStorage.setItem('detalii','7');
 });
 let doi = document.querySelector('.doi');
 doi.addEventListener('click', function(){
  window.open('../detalii/detalii.html','_self');
  localStorage.setItem('detalii','8');
 });
 let trei = document.querySelector('.trei');
 trei.addEventListener('click', function(){
  window.open('../detalii/detalii.html','_self');
  localStorage.setItem('detalii','9');
 });
 let patru = document.querySelector('.patru');
 patru.addEventListener('click', function(){
  window.open('../detalii/detalii.html','_self');
  localStorage.setItem('detalii','10');
 });


 const search = () => {
  const searchBox = document.querySelector('.inp').value.toUpperCase();
  const storeItems = document.querySelector('.cnt');
  const product = document.querySelectorAll('.oferte');
  const pname = storeItems.querySelectorAll('.text');

  for (var i = 0; i < pname.length; i++) {
    let match = product[i].querySelectorAll('.text')[0];

    if (match) {
      let textValue = match.textContent || match.innerHTML
      if (textValue.toUpperCase().indexOf(searchBox) > -1) {
        product[i].style.display = "";
      } else {
        product[i].style.display = "none";
      }
    }
  }
}
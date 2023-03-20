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

let action = document.querySelector('#view1');
action.addEventListener('click', function(){
  let all = document.querySelector('.view_all');
  console.log();
let africa = document.querySelector('.africa');
let turcia = document.querySelector('.turcia');
all.style.display = 'none';
africa.style.display = 'flex';
turcia.style.display = 'flex';
});

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

let barcelona = document.querySelector('.barcelona');
barcelona.addEventListener('click', function(){
  window.open('detalii.php','_self');
  localStorage.setItem('detalii','11');
});

let madrid = document.querySelector('.madrid1');
madrid.addEventListener('click', function(){
  window.open('detalii.php','_self');
  localStorage.setItem('detalii','12');
});

let azur = document.querySelector('.azur1');
azur.addEventListener('click', function(){
  window.open('detalii.php','_self');
  localStorage.setItem('detalii','13');
});

let africa = document.querySelector('.africa1');
africa.addEventListener('click', function(){
  window.open('detalii.php','_self');
  localStorage.setItem('detalii','14');
});

let turcia = document.querySelector('.turcia1');
turcia.addEventListener('click', function(){
  window.open('detalii.php','_self');
  localStorage.setItem('detalii','15');
});

const search = () => {
  const searchBox = document.querySelector('.inp').value.toUpperCase();
  const storeItems = document.querySelector('.offer');
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
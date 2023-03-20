var modal = document.getElementById("myModal");
let img = document.getElementById("myImg1");
let img1 = document.getElementById("myImg2");
let img2 = document.getElementById("myImg3");
let img3 = document.getElementById("myImg4");
let img4 = document.getElementById("myImg5");
let img5 = document.getElementById("myImg6");
let img6 = document.getElementById("myImg7");
let img7 = document.getElementById("myImg8");
let img8 = document.getElementById("myImg9");
let body = document.querySelector('body');
let modalImg = document.getElementById("img01");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
    body.style.overflow = 'hidden';
}
img1.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    body.style.overflow = 'hidden';
  }
  img2.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    body.style.overflow = 'hidden';
  }
  img3.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    body.style.overflow = 'hidden';
  }
  img4.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    body.style.overflow = 'hidden';
  }
  img5.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    body.style.overflow = 'hidden';
  }
  img6.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    body.style.overflow = 'hidden';
  }
  img7.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    body.style.overflow = 'hidden';
  }
  img8.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    body.style.overflow = 'hidden';
  }


var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
  body.style.overflow = 'visible';
}

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

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
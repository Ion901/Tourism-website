export function navbar(){
  console.log(1);
  
    window.onscroll = function() {
        stickyI();
    }
    
    function stickyI() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 150) {
        document.querySelector(".sticked").classList.add('sticky');
        document.querySelector(".Layer_1").classList.add('Layer_2');
        document.querySelectorAll("path,polygon").forEach(e=>e.style.fill="white");
      } else{
        document.querySelector(".sticked").classList.remove('sticky');
        document.querySelector(".Layer_1").classList.remove('Layer_2');
        document.querySelectorAll("path,polygon").forEach(e=>e.style.fill="black");
      }
      
    }
    const clearInput = () => {
        const input = document.getElementsByTagName("input")[0];
        input.value = "";
      }
      
      const clearBtn = document.getElementById("clear-btn");
      clearBtn.addEventListener("click", clearInput);
      
      let b = document.querySelector('body');
      let body = document.querySelector("body");
      let burger = document.querySelector("#burger");
      
      
      body.addEventListener('click', function (e) {
        var x = document.getElementById("myTopnav");
        if(e.target === burger){
          
          if (x.className === "right") {
            x.className += " responsive";
            b.style.overflow = 'hidden';
          } else {
            x.className = "right";
            b.style.overflow = 'visible';
            x.classList.remove('responsive');
          }
        }
          else if((e.target !== burger) || e.target === burger){
            x.className = "right";
            b.style.overflow = 'visible';
            x.classList.remove('responsive');
          }
        });
}

import { navbar } from "./navbar.js";
navbar();

var responsiveSlider = function () {

  var slider = document.getElementById("i1");
  console.log(slider);
  var sliderWidth = slider.offsetWidth;
  var slideList = document.getElementById("slideWrap");
  var count = 1;
  var items = Number(slideList.querySelectorAll("li").length);
  var prev = document.getElementById("prev");
  var next = document.getElementById("next");

  window.addEventListener('resize', function () {
    sliderWidth = slider.offsetWidth;
  });

  var prevSlide = function () {
    if (count > 1) {
      count = count - 2;
      slideList.style.left = "-" + count * sliderWidth + "px";
      count++;
    }
    else if (count === 1) {
      count = items - 3;
      slideList.style.left = "-" + count * sliderWidth + "px";
      count++;
    }
  };

  var nextSlide = function () {
    if (count < items-2) {
      slideList.style.left = "-" + count * sliderWidth + "px";
      count++;
    }
    else if (count = items) {
      slideList.style.left = "0px";
      count = 1;
    }
  };

  next.addEventListener("click", function () {
    nextSlide();
  });

  prev.addEventListener("click", function () {
    prevSlide();
  });

  setInterval(function () {
    nextSlide()
  }, 4000);

};

window.onload = function () {
  responsiveSlider();

} 



// let londra = document.querySelector('.finder');
// londra.addEventListener('click', function(){
//   window.open('../detalii/detalii.html','_self');
//   localStorage.setItem('detalii','1');
// });
// let italia = document.querySelector('.finder1');
// italia.addEventListener('click', function(){
//   window.open('../detalii/detalii.html','_self');
//   localStorage.setItem('detalii','2');
// });

// let paris = document.querySelector('#paris');
// paris.addEventListener('click', function(){
//   window.open('../detalii/detalii.html','_self');
//   localStorage.setItem('detalii','3');
// });
// let cardamon = document.querySelector('#cardamon');
// cardamon.addEventListener('click', function(){
//   window.open('../detalii/detalii.html','_self');
//   localStorage.setItem('detalii','4');
// });
// let egipt = document.querySelector('#egipt');
// egipt.addEventListener('click', function(){
//   window.open('../detalii/detalii.html','_self');
//   localStorage.setItem('detalii','5');
// });
// let tokyo = document.querySelector('#tokyo');
// tokyo.addEventListener('click', function(){
//   window.open('../detalii/detalii.html','_self');
//   localStorage.setItem('detalii','6');
// });
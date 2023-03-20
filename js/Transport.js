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

		function initMap() {
			// The location of Uluru
			const uluru = { lat: 46.98540438147725, lng: 28.87041512636892};
			// The map, centered at Uluru
			const map = new google.maps.Map(document.getElementById("map"), {
			  zoom: 4,
			  center: uluru,
			});
			// The marker, positioned at Uluru
			const marker = new google.maps.Marker({
			  position: uluru,
			  map: map,
			});
		  }
		  
		  window.initMap = initMap;
		
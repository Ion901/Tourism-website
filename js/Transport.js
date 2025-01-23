import { navbar } from "./navbar.js";
navbar();

function initMap() {
  // The location of Uluru
  const uluru = { lat: 46.98540438147725, lng: 28.87041512636892 };
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

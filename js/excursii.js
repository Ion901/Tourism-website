import { navbar } from "./navbar.js";
navbar();


 
(()=>{
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
})();
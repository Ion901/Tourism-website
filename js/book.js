var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if(date < 10) {
  date = '0' + date;
}
if(month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
}



let book = document.querySelector('.offer');

book.addEventListener('click', function(){
  const form = document.querySelector("form");
  form.addEventListener('submit', function (e) {
    e.preventDefault();
      if(document.form.visitor_name.value === 0 ){
        alert('Introdu datele');
      }else{
        window.open('../detalii/detalii.html','_self');
        localStorage.setItem('buton','only');
        localStorage.setItem('cart','try');
        let adult = Number(document.querySelector('#adult').value);
        let copil = Number(document.querySelector('#child').value);
        let total = adult+copil;
        localStorage.setItem('Persoane',total);
        let checkin_date = document.querySelector('#checkin-date').value;
        let checkout_date = document.querySelector('#checkout-date').value;
        localStorage.setItem('checkin',checkin_date);
        localStorage.setItem('checkout',checkout_date);

      }
  })
   
});




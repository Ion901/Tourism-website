let container = document.querySelector('.container');
let responseMessage = document.querySelector('.back-message');
var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);
const infoText = document.querySelector(".danger");
let message = "";


if (date < 10) {
  date = '0' + date;
}
if (month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin_date");
var checkoutElem = document.querySelector("#checkout_date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
  checkoutElem.setAttribute("min", this.value);
}

function validateEmail(email) {
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailPattern.test(email);
}

function validatePhone(phone) {
  const phonePattern = /^(\+373|0)?(6\d{7}|2\d{6}|3\d{6})$/;
  return phonePattern.test(phone);
}


function validateName(name) {
  const patternName = /[A-Z\sa-z]{3,20}/;
  return patternName.test(name);
}

  
window.addEventListener('scroll', () => { // atunci cand se face scroll
  const scrollPosition = window.scrollY;
  container.style.setProperty('--start-top', `${scrollPosition}px`);
  });

  document.addEventListener('DOMContentLoaded', () => { // atunci cand se incarca pagina
    const scrollPosition = window.scrollY;
    container.style.setProperty('--start-top', `${scrollPosition}px`);
  });
  container.style.animation = 'none';

function responsePopUp(data) {
  if (data.status !== "") {
    responseMessage.textContent = data.message;
    container.style.animation = ''; 
    container.addEventListener('animationend',() => {// atunci cand se termina animatia
      container.style.animation = 'none';
    })
    if(data.status === "success") {
      container.style.backgroundColor = "green";
      window.open(`${document.referrer}`, '_self');//redirectioneaza la pagina anterioara pe care userul a vizitat-o
    } else {  
      container.style.backgroundColor = "red";
    }
  } else {
    container.style.display = "none";
  }
 
}



const form = document.querySelector("form");
form.addEventListener('submit', function (e) {
  e.preventDefault();

  if (
    validateName(document.form.visitor_name.value) &&
    validateEmail(document.form.visitor_email.value) &&
    validatePhone(document.form.visitor_phone.value) &&
    document.form.total_adults.value !== "" &&
    document.form.total_children.value !== "" &&
    document.form.checkin_date.valueOf !== "" &&
    document.form.room_preference.value !== ""
  ) {

    const id_info = Number(localStorage.getItem("id_info"));
    const name = document.form.visitor_name.value;
    const visitor_email = document.form.visitor_email.value;
    const phone = document.form.visitor_phone.value;
    const adult = Number(document.form.total_adults.value);
    const copil = Number(document.form.total_children.value);
    const checkin_date = document.form.checkin.value;
    const message = document.form.room_preference.value;
    const addOns = document.form.visitor_message.value;
    const user_id = Number(document.querySelector('input[name="user_id"]').value);
    

    let orderData = {
      name: name,
      mail: visitor_email,
      phone: phone,
      adult: adult,
      copil: copil,
      checkin_date: checkin_date,
      message: message,
      addOns: addOns,
      id_info: id_info,
      id_user: user_id
    };

    fetch('php/insert-orders.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',  // Send data as JSON
      },
      body: JSON.stringify(orderData)  // Convert the data to JSON format
    })
      .then(response => response.json())  // Assuming the server returns JSON response
      .then(data => {
        // Handle the response from the server (e.g., display a success message)
        responsePopUp(data);
        
      })
      .catch(error => {
        // Handle any errors that occur during the request
        // console.error('Error:', error);
        responsePopUp(data);
        // alert('There was an error submitting the order.');
      });


  } else {

    message = "Trebuie sa completezi complet formularul";
    infoText.textContent = message;
    infoText.style.color = "red";
    window.scrollTo({ top: 0, behavior: 'smooth' });

  }
})
var modal = document.getElementById("myModal");
let body = document.querySelector('body');
let modalImg = document.getElementById("img01");


document.querySelectorAll(".myImg").forEach(image => {
    image.onclick = () => {
        modal.style.display = "block";
        modalImg.src = image.src;
        body.style.overflow = 'hidden';
    }
})

var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
    body.style.overflow = 'visible';
}
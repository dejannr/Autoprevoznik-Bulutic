
const popup = document.querySelector('.phone-menu');

document.querySelector('#open').addEventListener('click', function() {

    popup.style.height = "100vh";

});

document.querySelector('#close').addEventListener('click', function() {

    popup.style.height = "0";

});

const popupClose = function() {

    popup.style.height = "0";

}
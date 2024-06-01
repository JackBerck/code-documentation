// const card = document.querySelector(".card");
// const close = document.querySelector(".close");

// close.addEventListener('click', function() {
//   card.style.display = 'none';
// });





// const close = document.querySelectorAll(".close");

// for (let i = 0; i < close.length; i++) {
//   close[i].addEventListener('click', function() {
//     close[i].parentElement.style.display = "none";
//     });
// }





// const close = document.querySelectorAll(".close");

// for (let i = 0; i < close.length; i++) {
//   close[i].addEventListener('click', function(e) {
//     e.target.parentElement.style.display = "none";
//     });
// }


// const close = document.querySelectorAll(".close");

// close.forEach(function(el) {
//   el.addEventListener('click', function(e) {
//     e.target.parentElement.style.display = "none";
//   });
// });






// preventDefault() => method yang mencegah aksi defaultnya, sehingga nantinya kita bisa mengganti aksi tersebut jika perlu atau jika ingin
// cara penggunaannya digunakan di akhir function seperti dibawah

const close = document.querySelectorAll(".close");

close.forEach(function(el) {
  el.addEventListener('click', function(e) {
    e.target.parentElement.parentElement.style.display = "none";
    e.preventDefault();
  });
});
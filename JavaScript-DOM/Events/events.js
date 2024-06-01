// event pada javascript mempresentasikan sebuah kejadian yang terjadi di dalam DOM
// kejadian tersebut dalam dilakukan oleh user/manual(mouse event, keyboard event,dll) atau dapat dilakukan secara otomatis oleh API/auto(animasi selesai dijalankan, halaman selesai diload, dll)

// ada beberapa cara untuk melakukan event atau cara mendengarkan event yaitu
// 1. event handler => cara membuat event handler yaitu panggillah sebuah keyword "on" lalu diikuti eventnya apa => on<event>
// cara menjalankan event handler
// 1. tangkap elemennya yang akan diberi event terlebih dahulu lalu buat function event yang akan dijalankan
const p3 = document.querySelector('.p3');
function ubahWarnaP3() {
  p3.style.backgroundColor = '#abfd34';
}


// a. inline html attribute (tidak disarankan)
// 2. setelah ditangkap lalu jalankan event pada file html dengan memberikan attribute on<event> = 'eventnyaAtauPerubahannya()', pada elemen yang akan dikasih eventnya


// b. element method
// 2. setelah ditangkap lalu lakukan 
// elementYangDitangkap.on<event> = functionnyaApaTanpaKurungBukaTutup;
function ubahWarnaP2() {
  p2.style.backgroundColor = '#abfd34';
}
const p2 = document.querySelector('.p2');
p2.onclick = ubahWarnaP2;



// 2. addEventListener()
// cara menjalankan addEventListener()
// 1. tangkap dulu element atau paragraf yang akan dijalankan eventnya
const p4 = document.querySelector('#b p');
// 2. lalu jalankan eventnya dengan cara
// elementYangDitangkap.addEventListener("<eventnya>", functionnyaMauApa())
// catatan! functionnya bisa terpisah dengan hal tersebut atau langsung di dalamnya menggunakan function expression/anonymous function
p4.addEventListener("click", function() {
  const liBaru = document.createElement("li");
  const textLiBaru = document.createTextNode('Ini Li baru bos!');
  const ul = document.querySelector('#b ul');
  liBaru.appendChild(textLiBaru);
  ul.appendChild(liBaru);
});





// perbedaan dari event handler dan addEventListener yaitu pada saat kita memberikan lebih dari satu event, jika event handler nantinya akan mengganti eventnya sehingga yang digunakan hanyalah event yang terakhir, sedangkan addEventListener akan menumpuk eventnya sehingga nantinya tergabung

// events juga memiliki banyak method(bisa cari gugel), beberapa diantaranya click, dblclick, mouseover, mouseup, keydown, keypress, keyup, input, change, dan lain lain
// DOM SELECTION berfungsi untuk menyeleksi atau melakukan pemilihan elemen

// DOM SELECTION memiliki beberapa cara atau metode antara lain
// getElementById()
// getElementsByClassName()
// getElementsByTagName()
// querySelectorAll()
// querySelector()



// DOM SELECTION METHOD

// 1. getElementById(), pemilihan elemen pada html berdasarkan id-nya

// 2. getElementsByTagName(), pemilihan elemen" pada html berdasarkan nama tag-nya

// 3. getElementsByClassName(), pemilihan elemen" pada html berdasarkan nama class-nya

// 4. querySelector(), pemilihan elemen pada html berdasarkan selector-nya, sama halnya dengan selector css

// 5. querySelectorAll(), pemilihan elemen" pada html berdasarkan selector-nya, sama halnya dengan selector css



// HASIL DARI DOM SELECTION

// 1. getElementById => element
// 2. getElementsByTagName => HTMLCollection
// 3. getElementsByClassName => HTMLCollection
// 4. querySelector => element
// 5. querySelectorAll => nodeList






// document.getElementById => element => bukan array
const judul = document.getElementById('judul');
judul.style.color = 'red';
judul.style.backgroundColor = '#232345'
// catatan! jika kita memberikan style/css pada javascript maka akan memberikan stylenya secara inline



// document.getElementsByTagName => HTMLCollection = array
// catatan jika HTMLCollection akan menghasilkan array sehingga harus dikasih urutan index-nya, jika ingin semuanya dikasih style maka harus melakukan looping
const p = document.getElementsByTagName('p');
p[3].style.backgroundColor = '#fdadfc';
for (let i = 0; i < p.length; i++) {
  p[i].style.color = 'green';
}

const h1 = document.getElementsByTagName('h1')[0];
h1.style.fontSize = '32px';



// document.getElementsByClassName => HTMLCollection = array
// catatan jika HTMLCollection akan menghasilkan array sehingga harus dikasih urutan index-nya, jika ingin semuanya dikasih style maka harus melakukan looping
const p1 = document.getElementsByClassName('p1')[0];
p1.innerHTML = 'WOW';
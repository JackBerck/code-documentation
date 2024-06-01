// DOK MANIPULATION dibagi menjadi 2 yaitu 
// manipulasi elemen, pemanipulasian elemen pada html(seperti menambahkan class, attribut, dan lain")
// manipulasi node, pemanipulasian node pada html(seperti menambahkan elemen, menghilangkan, dan lain")




// manipulasi elemen memiliki beberapa metode, berikut ini beberapa metodenya


// element.innerHTML => untuk merubah isi dari sebuah tag yang sudah kita seleksi
const judul = document.getElementById('judul');
judul.innerHTML = 'Wow';



// element.style.<property> => untuk merubah style atau css dari tag yang sudah kota seleksi
const p1 = document.getElementsByTagName('p')[0];
p1.style.backgroundColor = 'orange';
p1.style.color = 'salmon';



// element.setAttribute() => untuk memanipulasi attribute dari sebuah elemen yamg sudah kita seleksi

// element.setAttribute() => menambahkan attribute pada elemen
// element.setAttribute('namaAttribute', 'isiAttribute');
const p2 = document.getElementsByClassName('p2')[0];
p2.setAttribute('name', 'Zaki');

// element.getAttribute() => untuk mengetahui isi attribute dari sebuah elemen
// element.getAttribute('namaAttribute');
p2.getAttribute('class');

// element.removeAttribute() => untuk menghilangkan attribute dari sebuah element
// element.removeAttribute('namaAttribute');
const a = document.querySelector('#a a');
a.removeAttribute('href');



// element.classList => untuk memanipulasi class dari sebuah elemen yang sudah kita seleksi
// element.classList.add() => menambahkan class pada elemen
// element.classList.add('namaClass');
const p3 = document.getElementsByTagName('p')[2];
p3.classList.add('satu');
p3.classList.add('dua');
p3.classList.add('tiga');

// element.classList.remove() => menghilangkan class pada elemen
// element.classList.remove('namaClass');
p3.classList.remove('haa');

// element.classList.toggle() => menambahkan class jika belum ada class yang ingin dipanggil(class yang sama) jika sudah ada maka akan dihilangkan class-nya
// element.classList.toggle('namaClass');
p3.classList.toggle('wow');

// element.classList.item() => untuk mengetahui class tertentu pada sebuah elemen
// element.classList.item(urutanClassPadaElemen);
p3.classList.item(2);

// element.classList.contains() => untuk memeriksa apakah di elemen tersebut sudah terdapat class tertentu
// element.classList.contains('namaClass');
p3.classList.contains('empat');

// element.classList.replace() => menggantikan class yang sudah ada dengan kelas yang baru
// element.classList.replace('classLama', 'classBaru');
p3.classList.replace('tiga', 'enam');
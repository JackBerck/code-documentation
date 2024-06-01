// control flow atau alur kendali adalah pengontrolan alur atau flownya agar tidak harus lurus ke bawah karena nantinya kita mungkin saja tidak menginginkan suatu statement atau beberapa statement dieksekusi karena alesan tertentu
// untuk mengatur alur tersebutlah dibutuhkan pengulangan atau pengkondisian untuk mengatur alur


// 1. pengulangan, sebuah konsep untuk mengerjakan atau mengeksekusi statement yang sama lebih dari satu kali atau berulang, lalu setelah selesai melakukan pengulangan tersebut maka akan mengerjakan statement selanjutnya
// dalam pengulangan ini ada beberapa sintaks antara lain for, while, do while

// contoh
console.log('CONTOH PENGULANGAN!');
console.log('Bakalan ada Jerome nih 5 kali');
for (var i = 0; i < 5; i++) {
  console.log('Mantappu Jiwwa');
}
console.log('Mantabek kan');


// 2. pengkondisian, sebuah keadaan dimana program kita bisa memilih untuk mengeksekusi statement yang berbeda berdasarkan kondisi yang diberikan
// dalam pengkondisian ini ada beberapa sintaks antara lain if, if else, if else if else, else, switch

// contoh
alert('CONTOH PENGKONDISIAN!');
var angka = prompt('Masukkan angka');
if (angka % 2 == 0) {
  alert('Angka ' + angka + ' bilangan genap');
} else if(angka % 2 == 1) {
  alert('Angka ' + angka + ' bilangan ganjil');
} else {
  alert('Yang ente masukkan bukan angka!');
}


// tambahan! normal flow atau alur normal adalah pengerjaan statement secara normal, lebih tepatnya statement tersebut akan dieksekusi secara normal yaitu dari atas ke bawah atau dari kiri ke kanan
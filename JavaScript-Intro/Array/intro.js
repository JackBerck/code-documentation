// dalam wikipedia => array adalah susunan sistematis dari objek objek yang serupa
// dalam pemrograman => array adalah tipe data yang digunakan untuk mendeskripsikan kumpulan elemen(nilai atau variabel), yang tiap tiap elemennya memiliki index(index berawal dari 0)
// menurut pak sandhika => array adalah variabel yang lebih sakti karena bisa menampung banyak nilai(bebas bisa campur boleh string, integer, boolean)



// cara menggunakan array yaitu dengan cara memberikan kurung siku [] ke dalam suatu variabel, pisahkan setiap nilai menggunakan koma ,
// contoh :
let hariSekolah = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at'];



// kenapa harus menggunakan array?
// 1. mempermudah pengelolaan nilai/value/data(penelusuran dan pencarian)
// 2. efektivitas pemanajemenan memori



// karakteristik array:
// 1. variabel jamak yang mempunyai banyak elemen dan diacu dengan nama yang sama
// 2. kumpulan pasangan key dan nilai(key and value pair)
// 3. key adalah index pada array dengan tipe integer yang dimulai dari 0
// 4. array pada javascript bertipe Object
// 5. array pada javascript memiliki fungsi/method default length untuk menghitung jumlah elemen di dalamnya
// 6. elemen pada array boleh memiliki tipe data yang berbeda



// 1. contoh
let binatang = [];

// 2-3. contoh
binatang = ['Kucing', 'Kambing', 'Anjing', 'Koala', 'Tikus'];
console.log(binatang[3]);

// 4. contoh
console.log(typeof(binatang));

// 5. contoh
console.log(binatang.length);

// 6.contoh
let serah = ['Anu', 17, true];
function func() {
  console.log('yhahaha hayuuk');
}
let serahh = ['Anu', 17, true, func];



// tambahan!
let serahhh = ['Anu', 17, true, func, ['wagila', 'mantab', 12]];
// jika ingin menampilkan 12 caranya seperti berikut
console.log(serahhh[4][2]);
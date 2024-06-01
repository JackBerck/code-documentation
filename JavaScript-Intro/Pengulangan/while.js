// while merupakan keyword yang digunakan untuk pengulangan

// jika ingin menggunakan while tinggal panggil aja keywordnya yaitu while

// sintaks while seperti berikut
// while(kondisi) {
//   aksi
// }
// atau yang lebih mendalamnya
// var nilaiAwal
// while(kondisi terminasi) {
//   aksi

// increment(penambahan)/decrement(pengurangan)
// }

// *cara bacanya: setiap kondisi di dalam while bersifat true, maka jalankan aksi di dalamnya





// catatan! jangan lakukan sintaks di bawah karena nantinya akan menjadi infinite loop atau aksinya tidak dijalankan
// while(true / false) {
//   console.log('mantabek');
// }



// sehingga diberi 2 cara agar pengulangannya dapat dijalankan dan diberhentikan oleh user
// 1. dihentikan dan dijalankan oleh user, jadi user nantinya memiliki kendali penuh dalam menjalankan pengulangan. contoh:

// contoh:
// let ulang = true;
// while(ulang) {
//   console.log('hai!');
//   ulang = confirm('mau lagi?');
// }


// 2. diberhentikan dan dijalankan oleh program itu sendiri, jadi programnya sendiri yang akan menentukan loopingnya mau berapa kali. aturan menggunakannya yaitu:

// nilai awal
// while(kondisi terminasi) {
//   aksi
  
//   increment/decrement
// }

// contoh:
// let nilaiAwal = 0;
// while(nilaiAwal < 10) {
//   console.log('heeeerrrrrrooooooo');
//   nilaiAwal++;
// }




// let nilaiAwal = 1;
// while(nilaiAwal <= 10) {
//   console.log('nilai nya ini ' + nilaiAwal);
//   nilaiAwal++;
// }





// latihan juragan angkot
let jmlAngkot = 10;
let noAngkot = 1;

while(noAngkot <= jmlAngkot) {
  console.log('Angkot no.' + noAngkot + ' beroperasi dengan baik');
  noAngkot++;
}
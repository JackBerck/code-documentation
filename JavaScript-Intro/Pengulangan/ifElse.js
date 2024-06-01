// if merupakan keyword yang digunakan untuk melakukan pengkondisian yang jika kondisinya true akan melakukan suatu aksi yang berada di dalam kondisi aksi true tersebut(misalkan aksi A) dan jikalau false maka akan melakukan suatu aksi lain atau keluar dari block if tersebut(misalkan aksi B)

// jika ingin menggunakan if tinggal panggil aja keywordnya yaitu if

// sintaks dasar if seperti berikut
// if (kondisi) {
//   aksi
// }

// contoh yang if :
let angka = 2;
if (angka === 2) {
  console.log('Angkanya angka 2');
}


// else merupakan keyword yang digunakan untuk melakukan pengkondisian sama seperti if akan tetapi berbanding terbalik. kalau if menjalankan aksi jika kondisinya true sedangkan else menjalankan aksi jika kondisinya false(atau keluar dari blok if)

// dan jika ingin menggunakan else tinggal panggil aja keywordnya yaitu else

// sintaks dasar else seperti berikut
// if (kondisi) {
  // aksi
// } // else {
//   aksi
// }

// contoh yang if dan else:
let inputUmur = prompt('Masukkan umur anda');
if (inputUmur <= 17) {
  console.log(inputUmur + ' tahun merupakan masa masa kecil yang menyenangkan pastinya');
} else {
  console.log(inputUmur + ' tahun merupakan masa masa remaja');
}


// else if merupakan keyword yang digunakan untuk melakukan pengkondisian yang memiliki beberapa aksi dan kondisi(bisa menggunakan banyak else if untuk melakukan aksi lain, tidak seperti if dan else yang hanya memiliki satu aksi)

// dan jika ingin menggunakan else if tinggal panggil aja keywordnya yaitu else if

// sintaks dasar if seperti berikut
// if (kondisi1) {
//   aksi1
// } else if (kondisi2) {
//   aksi2
// } else {
//   aksiTerakhir
// }

// contoh yang if dan else:
let inputAngka = prompt('Masukkan angka');
if (inputAngka % 2 == 0) {
  console.log(inputAngka + ' merupakan angka genap');
} else if (inputAngka % 2 == 1) {
  console.log(inputAngka + ' merupakan angka ganjil');
} else {
  console.log(inputAngka + ' bukan angka!');
}
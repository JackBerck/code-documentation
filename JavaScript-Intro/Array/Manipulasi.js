// 1. menambah elemen pada array

// contoh:
let arr = [];
arr[0] = 'Jono';
arr[1] = 'Budi';
arr[2] = 'Dedi';
arr[6] = 'Nuro';

// jika ingin menambahkan elemen pada array kita harus hafal indexnya dan juga jumlah pada isi arraynya
// lalu buat variabel dan panggil arraynya lalu isi sesuai index elemen yang mau ditambahkan
// catatan! jika ada index yang kelewatan maka javascript akan membuatkan nilai default yang berisi undefined(contoh seperti di atas)



// 2. menghapus elemen pada array

// contoh
let binatang = ['Kucing', 'Kambing', 'Anjing', 'Koala', 'Tikus'];
binatang[2] = undefined;

// jika ingin menghapus elemen pada array kita harus hafal index element yang mau dihapus
// seleksi elemen yang mau dihapus tersebut seperti di atas, lalu isi nilainya dengan undefined



// 3. menampilkan seluruh isi pada array(looping)

// contoh :
// 1. menggunakan for
let hariSekolah = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at'];
for (var i = 0; i < hariSekolah.length; i++) {
  console.log(hariSekolah[i]);
}
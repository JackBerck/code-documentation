// 1. join() => merubah atau menggabungkan seluruh isi array menjadi string dan menampilkannya secara default rapi menggunakan koma ',' diantara nilai nilainya, jika setiap nilai tidak ingin dipisahkan menggunakan koma maka boleh menggantinya dengan karakter lain di dalam kurung join
// contoh :
let hariSekolah = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at'];
console.log(hariSekolah.join(' - '));



// 2. push, pop, shift, dan unshift => ke-4 element ini digunakan untuk menghapus atau menambahkan element array

// a. push => menambahkan element(isi/nilai) array di akhir array-nya (mendorong atau memasukkan nilai atau element baru di akhir array-nya)
hariSekolah.push('Dah Gitu Aja');
hariSekolah.push('opo ho o', 'ho o');
console.log(hariSekolah.join(' - '));

// b. pop => menghapus atau menghilangkan element(isi/nilai) array di akhir array-nya atau intinya element terakhir array pecah atau hilang atau dihapus atau pecah (pop artinya meletus, diambil dari sound effect)
hariSekolah.pop();
hariSekolah.pop();
hariSekolah.pop();
console.log(hariSekolah.join(' - '));

// c. unshift => menambahkan element(isi/nilai) array di awal array-nya (menggeser nilai atau element baru di ke dalam atau awal array-nya)
hariSekolah.unshift('antara lain');
hariSekolah.unshift('Hari-hari sekolah');
console.log(hariSekolah.join(' - '));

// d. shift => menghapus atau menghilangkan element(isi/nilai) array di awal array-nya atau intinya element awal array pecah atau hilang atau dihapus atau pecah (menggeser nilai atau element array yang pertama ke luar array-nya)
hariSekolah.shift();
hariSekolah.shift();
console.log(hariSekolah.join(' - '));



// 3. splice dan slice => 

// a. splice => menyambungkan atau menyisipkan sebuah elemen di tengah tengah array
// splice(indexAwal, mauBerapaNilaiYangInginDihapus, elemenBaru1, elemenBaru2 ....)
hariSekolah.splice(0, 2, 'Senin Upacara', 'Selasa or penak');
console.log(hariSekolah.join(' - '));

// b. slice => digunakan untuk mengambil beberapa bagian pada array untuk menjadi array yang baru(slice)
// slice(indexAwal, indexAkhir)
// catatan! slice menghasilkan array baru, jika ingin menggunakan slice nilai yang akan di slice harus ditampung ke dalam suatu variabel
let hariSekolahBeta = hariSekolah.slice(0, 2,);
console.log(hariSekolahBeta.join(' - '));



// 4. forEach dan map => kedua method tersebut digunakan untuk melakukan looping pada array, kita bisa melakukan sesuatu pada elemen elemen yang ada di dalam array-nya secara otomatis

// a. forEach => untuk setiap elemen pada array(elemen array dari index 0 sampai yang terakhir) yang akan di looping maka lakukan fungsi atau sesuatu hal yang ada di dalam kurung atau parameter
// forEach(function)
hariSekolah.forEach(function(e) {
  console.log(e);
});
binatang = ['Kucing', 'Kambing', 'Anjing', 'Koala', 'Tikus'];
binatang.forEach(function(e, i) {
  console.log('Hewan ke-' + (i+1) + ' adalah ' + e)
});

// b. map => sama seperti forEach akan tetapi lebih baik karna map mengembalikan array sedangkan forEach tidak (karna mengembalikannya array lebih baik ditampung ke suatu variabel)
// map()
let angka = [4, 5, 2, 6, 8, 12, 18, 4, 4, 6];
let angkaAaa = angka.map(function(e) {
  return e * 2;
});
console.log(angkaAaa.join(' - '));



// 5. sort => untuk mengurutkan isi(elemen) array-nya
console.log(angka.sort().join(' - '));
// catatan! sort hanya mengurutkan angka atau huruf pertama saja, jika ingin mengurutkannya secara benar maka lakukan hal seperti berikut
console.log(angka.sort(function(a, b) {
  return a - b;
}).join(' - '));



// 6. filter dan find => kedua method tersebut digunakan untuk mencari elemen pada array, akan tetapi ada perbedaannya

// a. filter => bisa mengembalikan banyak nilai, lebih tepatnya digunakan untuk mencari elemen atau isi array dan mengembalikannya dalam bentuk array
let angkaB = angka.filter(function(x) {
  return x > 7;
});
console.log(angkaB.join(' - '));

// b. find => hanya bisa mengembalikan satu nilai saja yaitu nilai pertama yang didapatkan dari pencarian elemen
let angkaC = angka.find(function(e) {
  return e > 5;
});
console.log(angkaC);
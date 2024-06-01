// function adalah kunci utama pada javascript yang membuat javascript sangat powerfull(Douglas Crockford)

// karakteristik function, yaitu :
// a. merupakan struktur dasar pembentuk dari javascript (fundamental bulding object)
// b. sebuah sub-program/sub-routine yang dapat dipanggil dibagian lain pada program
// c. disebut juga sebagai prosedur (kumpulan statement untuk melakukan tugas atau mengkalkulasi suatu nilai)
// d. untuk dapat menggunakannya, kita harus membuat terlebih dahulu functionnya lalu memanggilnya
// e. termasuk ke dalam First-Class Object

// kenapa harus menggunakan function?
// a. Reusability (DRY/Dont Repeat Yourself)
// b. Dekomposisi/Abstraksi
// c. Modularitas

// kategori function, yaitu :
// a. Built-in function, function yang sudah dibuatkan/disediakan oleh javascript dan tinggal memakai atau memanggilnya saja. contoh: prompt(), slice(), random(), dan sebagainya
// b. User-Defined Function, function yang kita buat sendiri menggunakan keyword function dan memiliki nama(optional boleh ada boleh tidak) serta memiliki parameter/argument/bahan baku, parameter ini disimpan di dalam () boleh ada boleh tidak, jika ada boleh lebih dari satu(dipisahkan dengan ,), dan isi functionnya(function body) dibungkus menggunakan {}, dan yang terakhir dapat mengembalikan nilai(return value) atau tidak



// Membuat User-Defined Function

// metode-metode membuat function
// 1. function declaration
function aTambahB(a, b) {
  var total = 0;
  total = a + b;
  
  return console.log(total);
}
aTambahB(1, 2);
// 2. function expression
var cTambahD = function(c, d) {
  var total = 0;
  total = c + d;
  
  return console.log(total);
}
cTambahD(2, 3);

// struktur pembuat function

// function namaFunction(parameter) {
//   function body
//   return value
// }





// tambahan!
// a. return kegunaannya untuk memberitahu interpreter bahwa kita telah menyelesaikan tugas dan itulah hasilnya, return juga dapat digunakan untuk memberhentikan function
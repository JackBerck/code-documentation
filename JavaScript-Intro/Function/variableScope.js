// variabel scope adalah bagaimana sebuah variabel dapat diakses dalam program

// dalam bahasa pemrograman ada 2 macam scope, yaitu block scope(C, Java, dan lain lain) dan function scope(Javascript dan lain lain)

// 1. block scope (ditulis dalam {}), variabel yang ditulis di dalam block scope {} hanya bisa diakses di block scopenya saja, tidak bisa diakses di luar block scope atau scope lain

// 2. function scope, variabel apapun yang dibuat di dalam sebuah function (apapun variabel function di {}) hanya berlaku didalam function yang dibuat itu saja



// global scope atau window scope (scope atau ruang lingkup yang dapat digunakan dimanapun program kita)
var a = 1;

// function scope (di dalam function kita bisa mengakses variabel global sedangkan di luar function kita tidak bisa mengakses variabel global)
function tes() {
  var b = 2;
  console.log(a);
}

tes();
console.log(b);



// tambahan!
function tesTes() {
  // name conflict (dimana kita mempunyai dua buah variabel yang namanya sama akan tetapi scopenya berbeda, sehingga tidak saling menimpa nilai atau variabelnya)
  var a = 3;
  console.log(a);
}

console.log(a);

// catatan!
// jika di dalam functionnya hanya terdapat assignment variabel saja (misal a = 1) tidak ada pendeklarasiannya (misal var, let, dan const) maka variabel tersebut akat mencari pendeklarasiannya ke scope functionnya terlebih dahulu jika ada maka gunakan/timpa jika tidak ada maka mencari keluarnya lagi dan begitu seterusnya sampai mencapai global scope, dan jika masih tidak ada maka javascriptnya akan secara otomatis mendeklarasikan variabel tersebut
// jika ingin tetap hanya melakukan assignment di dalam function dan menginginkan javascriptnya secara otomatis mendeklarasikan variabel tersebut maka di awal barisnya tuliskan
// 'use strict';
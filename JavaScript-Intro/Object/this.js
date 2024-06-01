// cara cara membuat object
// 1. object literal (object biasa)
// 2. function declaration (function yang berisi object manual)
// 3. constructor function (function yang berisi object otomatis/keyword new)

// syarat mahir menggunakan this yaitu paham dan mahir membuat object dengan berbagai cara

// jika kita membuat dan memanggil function dengan cara yang berbeda maka nantinya kita akan berada dicontext dari functionnya juga berbeda pula

// berikut kilas balik membuat object dengan berbagai cara

// 1. function declaration
function hallo() {
  console.log('Hallo !');
}
hallo();


// 2. object literal
let obj = {}
obj.hai = function () {
  console.log('Hai !');
}
obj.hai();



// 3. constructor
function Holla() {
  console.log('Holla !');
}
new Holla();



// this adalah sebuah keyword spesial yang secara otomatis itu didefinisikan pada setiap function

// jadi setiap kita membuat function atau object pasti ada sebuah variabel this yang sudah didefinisikan secara otomati akan tetapi transparant

// context context dari object

// 1. this deklarasi window
console.log(this);
// jika kita menuliskan this seperti di atas, maka secara default isi dari keyword atau variabel this adalah window atau scope global. jadi jika kita membuat sesuatu di scope global maka akan menjadi object dari window atau this

// 2. this deklarasi function declaration
function hallo() {
  console.log(this);
  console.log('Hallo !');
}
hallo();
// ketika kita bikin function declaration, this adalah atau mengembalikan object global atau window atau global scope atau sama dengan this deklarasi window

// 3. this deklarasi object literal
let objj = {name : 'zack', no : 24}
obj.hai = function () {
  console.log(this);
  console.log('Hai !');
}
obj.hai();
// ketika kita bikin object literal, this adalah atau mengembalikan object yang bersangkutan atau object itu sendiri

// 4. this deklarasi constructor function
function Holla() {
  this.name = 'zack';
  this.no = 24;
  console.log(this);
  console.log('Holla !');
}
var obj1 = new Holla();
var obj2 = new Holla();
// ketika kita bikin constructor function, this adalah atau mengembalikan object yang baru dibuat atau obejct dati pemanggilan keyword new bukan dari dirinya sendiri
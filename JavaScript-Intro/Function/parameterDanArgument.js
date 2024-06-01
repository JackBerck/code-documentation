// parameter adalah variabel yang ditulis di dalam kurung pada saat function dibuat, digunakan untuk menampung nilai yang dikirimkan pada saat function itu dipanggil

// argument adalah nilai yang dikirimkan ke parameter saat function dipanggil

// intinya argument mengirimkan nilai ke parameter lalu parameter menerima nilai dari argument

// function tambah(parameter) {
//   body
// }
// tambah(argument)



function perkalian(a, b) {
  return console.log(a * b);
}
var a = 5;
var b = 10;
var hasil = perkalian(a, b);



// bagaimana jika parameter dan argumentnya tidak sesuai?
// a. jika parameter lebih sedikit dari argumentnya, maka argument kelebihannya akan diabaikan, akan tetapi nilai argumentnya sudah otomatis tertampung di arguments
// b. jika parameternya lebih banyak dari argument, maka parameter kelebihannya akan diisi dengan nilai undefined

// catatan : arguments adalah variabel semu(variabel yang tidak terlihat dan sudah dibuat secara otomatis) yang bertipe array yang berisi nilai yang dikirimkan pada saat function itu dipanggil

// misal :

function iya() {
  return console.log(arguments);
}
iya(1, 2, false, 'ha a');
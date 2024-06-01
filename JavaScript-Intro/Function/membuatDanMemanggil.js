// cara kerja function
// kita memasukkan bahan/material/argument ke dalam function(input) > function akan melakukan sesuatu terhadap bahan/material/argument tadi(function) > menghasilkan sesuatu(output)

// function yang baik adalah function yang hanya mengerjakan satu hal saja secara spesifik

// karakteristik function
// a. blok kode yang dibuat untuk melakukan tugas yang spesifik
// b. dapat dipanggil berulang kali
// c. memudahkan penelesuran
// d. reusability

// cara menggunakan function yaitu buat dahulu functionnya lalu panggil

// buat function
// function functionName(argument) {
//   body function
//   return value
// }

// panggil function
// functionName(parameter)



function kubus2(a, b) {
  let kubusA = a * a * a;
  let kubusB = b * b * b;
  
  let total = kubusA + kubusB;
  return total;
}

alert(kubus2(5,8));
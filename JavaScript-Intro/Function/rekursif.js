// rekursif atau recursion adalah sebuah fungsi yang memanggil dirinya sendiri, dan rekursif itu harus berakhir (tidak terus berulang ulang/Infinity) dan memiliki sebuah nilai

// function res() {
//   return res();
// }

// console.log(res());

// atau

// function tes(n) {
//   console.log(n);
//   return tes(n--);
// }

// tes(9);

// jangan lakukan seperti yang di atas


// jika kita ingin menghentikannya maka lakukan base case, base case adalah kondisi akhir dari rekursif yang menghasilkan nilai

function tes(n) {
  if (n == 0) {
    return;
  }
  console.log(n);
  return tes(n - 1);
}

tes(10);



// contoh lain atau contoh klasik yang digunakan dalam rekursif ini adalah faktorial
// seperti 5! = 5*4*3*2*1

function faktorial(n) {
  if (n == 0) {
    return 1;
  }
  // console.log(n);
  return n * faktorial(n - 1);
}



// semua looping bisa dibuat rekursif akan tetapi tidak bisa sebaliknya

// implementasi rekursif
// a. menggantikan looping
// b. fibonacci
// c. pencarian dan penelusuran pada struktur data list dan tree
// d. bahasa pemrograman yang tidak memiliki pengulangan yaitu haskel, erlang, prolog, dan lain lain
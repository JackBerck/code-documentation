// refactoring adalah sebuah proses mengubah kode agar menjadi lebih 'baik' tanpa mengubah fungsionalitasnya

// kenapa harus refactoring
// a. readability
// b. dry(dont repeat yourself)
// c. testability
// d. performance
// e. maintainability


// dari ini

// function kubus2(a, b) {
//   let kubusA = a * a * a;
//   let kubusB = b * b * b;
  
//   let total = kubusA + kubusB;
//   return total;
// }

// alert(kubus2(5,8));

// ke ini

function kubus2(a, b) {
  return a * a * a + b * b * b;
}

alert(kubus2(5,8));
// let a = '';
let a = '';

// for (let i = 0; i < 10; i++) {
//   a += '*'
// }


// for (let i = 0; i < 10; i++) {
//   for (let j = 0; j < i; j++) {
//     a += '*'
//   }
//   a += '\n'
// }


for (let i = 10; i >= 0; i--) {
  for (let j = 0; j <= i; j++) {
    a += '*';
  }
  a += '\n';
}

console.log(a);
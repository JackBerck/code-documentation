let noAngkot = 1;
let angkotBeroperasi = 6;
let jmlAngkot = 10;

for (noAngkot; noAngkot <= jmlAngkot; noAngkot++) {
  if (noAngkot <= angkotBeroperasi) {
    console.log('Angkot no.' + noAngkot + ' beroperasi dengan baik');
  } else {
    console.log('Angkot no.' + noAngkot + ' sedang tidak beroperasi');
  }
}
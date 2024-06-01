let noAngkot = 1;
let angkotBeroperasi = 6;
let jmlAngkot = 10;
let angkotLembur = 8;

for (noAngkot; noAngkot <= jmlAngkot; noAngkot++) {
  if (noAngkot <= angkotBeroperasi) {
    console.log('Angkot no.' + noAngkot + ' beroperasi dengan baik');
  } else if (noAngkot == angkotLembur) {
    console.log('Angkot no.' + noAngkot + ' sedang lembur');
  } else {
    console.log('Angkot no.' + noAngkot + ' sedang tidak beroperasi');
  }
}
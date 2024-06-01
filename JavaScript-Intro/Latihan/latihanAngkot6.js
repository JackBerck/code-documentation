let noAngkot = 1;
let angkotBeroperasi = 6;
let jmlAngkot = 10;
let angkot5Lembur = 5;
let angkot8Lembur = 8;
let angkot10Lembur = 10;

for (noAngkot; noAngkot <= jmlAngkot; noAngkot++) {
  if (noAngkot <= angkotBeroperasi && noAngkot != angkot5Lembur) {
    console.log('Angkot no.' + noAngkot + ' beroperasi dengan baik');
  } else if (noAngkot == angkot8Lembur || noAngkot == angkot10Lembur || noAngkot == angkot5Lembur) {
    console.log('Angkot no.' + noAngkot + ' sedang lembur');
  } else {
    console.log('Angkot no.' + noAngkot + ' sedang tidak beroperasi');
  }
}
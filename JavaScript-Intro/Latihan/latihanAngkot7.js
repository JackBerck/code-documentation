// rules :
// 1. jika angkot kosong, penumpang naik di kursi pertama
// 2. penumpang berikutnya duduk di kursi selanjutnya secara berurutan
// 3. jika ada kursi kosong karna ada penumpang yang turun, penumpang yg naik berikutnya duduk di kursi kosong terlebih dahulu
// 4. asumsi kursi tidak akanpenuh dan akan bertambah terus menerus jika ada penumpang yang naik
// 5. nama penumpang tidak boleh sama




// let penumpang = ['ha a', undefined, 'hihu'];
let penumpang = [];

let tambahPenumpang = function (namaPenumpang, penumpang) {
  if (penumpang.length == 0) {
    penumpang.push(namaPenumpang);
    return penumpang;
  } else {
    for (var i = 0; i < penumpang.length; i++) {
      if (penumpang[i] == undefined) {
        penumpang[i] = namaPenumpang;
        return penumpang;
      } else if (i == penumpang.length - 1) {
        penumpang.push(namaPenumpang);
        return penumpang;
      } else if (penumpang[i] == tambahPenumpang) {
        console.log(`${tambahPenumpang} sudah berada di dalam angkot.`)
        return penumpang;
      }
    }
  }
}

let hapusPenumpang = function (namaPenumpang ,penumpang) {
  if (penumpang.length == 0) {
    console.log('Angkot masih kosong.');
    return penumpang;
  } else {
    for (var i = 0; i < penumpang.length; i++) {
      if (penumpang[i] == tambahPenumpang) {
        penumpang[i] = undefined;
        return penumpang;
      } else if (i == penumpang.length - 1) {
        console.log(`${tambahPenumpang} tidak ada di dalam angkot.`)
        return penumpang;
      }
    }
  }
}


// console.log(tambahPenumpang('yuha', penumpang));
// console.log(tambahPenumpang('jsj', penumpang));
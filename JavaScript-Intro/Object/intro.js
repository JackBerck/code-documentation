// object adalah kumpulan nilai yang memiliki nama bukan index
// object juga merupakan array akan tetapi lebih sakti
// jika ingin menggunakan object, gunakanlah kurung kurawal {} lalu masukkan ke dalam sebuah variabel lalu isi key dan valuenya sesuai apa yang anda butuhkan bisa string, boolean, integer, dan lain-lain
// contoh
// salah satu cara penulisan
let mahasiswa = {
  nama : 'Zaki Dzulfikar',
  lulus : true,
  IPS : [3.6, 3.8, 3.3, 3.5],
  IPK : function () {
    let total = 0;
    let ipsnilai = this.IPS;
    for (var i = 0; i < ipsnilai.length; i++) {
      total += ipsnilai[i];
    }
    return total / ipsnilai.length;
  }
}
// salah satu cara pemanggilan
console.log(mahasiswa.IPK());



// anatomi atau istilah istilah pada object
let orang = {
  say : 'whilelo',
  num : 12,
  bool : false,
  func : function() {
    return console.log(`say '${this.say}' and num '${this.num}' also bool '${this.bool}'`);
  }
}
// 1. setiap variabel pada object(yang valuenya string, number, dan lain lain asalkan tidak function) disebut juga dengan property, dan disetiap penambahan property dipisahkan dengan koma ,
// 2. setiap function pada object disebut juga dengan method



// tambahan!
// jika ingin menambahkan suatu variabel melalui console maka lakukan seperti berikut
// objectnya.namaVariabel = isinya

// jika ingin memanggil suatu object dalam console maupun diluar console, maka lakukan seperti berikut
// objectnya.namaVariabelYangAkanDipanggil
// atau
// objectnya['namaVariabelYangAkanDipanggil']



// latihan
let mhs = {
  nama : 'Derck Ze',
  umur : 16,
  lulus : undefined,
  nilai : [90, 98, 80, 87, 88],
  alamat : {
    jalan : 'Jln. Ahmad Yani no. 100',
    kab : 'Batang',
    prov : 'Jawa Timur'
  },
  nilaiTotal : function () {
    let total = 0;
    let nilaiMapel = this.nilai;
    for (var i = 0; i < nilaiMapel.length; i++) {
      total += nilaiMapel[i];
    }
    return nilaiTot = total / nilaiMapel.length;
  }
}
console.log(mhs.nilaiTotal());
console.log(mhs.nilai[1]);
console.log(mhs['alamat'].prov);
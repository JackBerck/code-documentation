// cara cara membuat Object

// 1. Object Literal
let mhs1 = {
  nama : "Zaki Dzulfikar",
  nrp : "8163818",
  jurusan : "MIPA"
}

let mhs2 = {
  nama : "Zeno Ye",
  nrp : "8167388",
  jurusan : "IPS"
}
// kelemahan: jika ingin membuat object lain, akan tetapi propertynya sama hanya valuenya yang bberbeda tetap harus dilakukan penulisan ulang



// 2. Function Declaration
function buatObj(nama, nrp, jurusan) {
  let mhs = {};
  mhs.nama = nama;
  mhs.nrp = nrp;
  mhs.jurusan = jurusan;
  return mhs;
}
// cara cara membuat
// 1. buat function seperti biasa lalu diparameternya diisi dengan property property yang kita inginkan
// 2. setelah itu di dalam functionnya kita deklarasikan sebuah object kosong terlebih dahulu
// 3. lalu objectnya kita isi property propertynya menggunakan argument argument yang sudah kita tulis di dalam parameter functionnya
// 4. dan yang terakhir kita return objectnya

// cara mengisi objectnya
// 1. kita bikin variabel lalu isikan function tadi, lalu di dalam parameternya isikan data mahasiswanya sesuai dengan argument pada parameter

// kelebihan: sedikit lebih ringkas karna kita menyediakan wadah atau functionnya terlebih dahulu lalu kita bisa panggil atau buat berulang ulang



// Constructor Function
// Constructor Function ini mirip Function Declaration, lebih tepatnya ini function akan tetapi khusus buat object. dan disarankan untuk menamai function ini diawali dengan huruf besar, untuk menandai bahwa kita mau membuat Constructor Function
function Mahasiswa(nama, nrp, jurusan) {
  // let this = {};
  this.nama = nama;
  this.nrp = nrp;
  this.jurusan = jurusan;
  // return this;
}
// penulisan di dalam Constructor Function tidak ada variabel dan return, langsung menggunakan keyword this saja
// ibaratnya sudah dibuatkan variabel this serta sudah di return kan
let mhs3 = new Mahasiswa('Rifka', '173629', 'Tata Busana');
// dan untuk pemanggilannya menggunakan keyword new
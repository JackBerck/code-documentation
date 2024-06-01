// // membuat object dalam javascript dibagi menjadi 4 cara yaitu, 
// // 1. object literal atau object 
// // 2. function declaration
// // 3. constructor function dengan menggunakan keyword new
// // 4. Object.create

// // 1. object literal
// // problemnya adalah kurang efektif jika menggunakan object yang banyak karena membuat object berkali kali
// let mahasiswa1 = {
//    nama: "Zaki Dzulfikar",
//    energi: 10,
//    makan: function(porsi) {
//     return this.energi += porsi;
//     console.log(`Selamat datang ${this.nama} selamat makan`);
//    }
// }

// let mahasiswa2 = {
//    nama: "Jack Berck",
//    energi: 10,
//    makan: function(porsi) {
//     return this.energi += porsi;
//     console.log(`Selamat datang ${this.nama} selamat makan`);
//    }
// }



// // 2. function declaration tidak perlu menduplikat objectnya tinggal bikin template satu aja tinggal nanti dipakai pakai berulang kali
// // walaupun sudah bikin template dan tidak bikin berulang ulang namun problemnya adalah tetap kurang efektif karena di belakang layar objectnya tetap disimpan di dalam memori duplikasi
// // namun ada triknya untuk mengatasi hal tersebut seperti contoh berikut
// const methodMahasiswa = {
//     makan: function(porsi) {
//         this.energi += porsi;
//         console.log(`Selemat datang ${this.nama} selamat makan`);
//     },
//     main: jam = function(jam) {
//         this.energi -= jam;
//         console.log(`Halo ${this.nama} telah bermain selama ${this.jam}`);
//     },
//     // namun akan terdapat beberapa problem seperti berikut
//     tidur: jam = function(jam) {
//         this.energi += jam;
//         console.log(`Halo ${this.nama} selamat tidur`);
//     }
//     // kalau ada method baru harus didaftarin ke function declaration, jadi harus kerja 2 kali mengelola 2 object sehingga harus ingat
//     // namun ada cara otomatisnya agar method yang dibuat di object lain langsung singkron ke function declaration, yaitu dengan mengguakan Object.create()
// }


// function Mahasiswaa(nama, energi) {
//     // dengan menggunakan prototype kita bisa membuat hal ini lebih efektif lagi
//     // yaitu dengan cara merubah function ini menjadi constructor function
//     let mahasiswa = Object.create(methodMahasiswa);

//     // namun sebagai catatan walaupun masih menggunakan Object.create sudah tidak benar benar kerja 2 kali harus melakukan sinkronisasi manual pada 2 object, namun cara tersebut tetap mengharuskan membuat 2 object, yaitu object utama yang function declaration dan object parentnya, sehingga diperlukan lagi cara yang lebih bagus yaitu dengan menggunakan prototype
//     mahasiswa.nama = nama;
//     mahasiswa.energi = energi;

//     return mahasiswa;
// }




// let zaki = Mahasiswaa("Zaki", 10);


// // 3. constructor function, tanpa memerlukan deklarasi object dan diganti dengan keyword this dan menghilangkan return namun menggunakan keyword new
// function Mahasiswa(nama, energi) {
//     this.nama = nama;
//     this.energi = energi;
//     this.makan = function(porsi) {
//         this.energi += porsi;
//         console(`Selemat datang ${this.nama} selamat makan`);
//     }
//     this.jam = function(jam) {
//         this.energi -= jam;
//         console.log(`Halo ${this.nama} telah bermain selama ${this.jam}`);
//     }
// }

// let jack = new Mahasiswa("Jack", 10);


function Mahasiswa(nama, energi) {
    // dengan menggunakan prototype kita bisa membuat hal ini lebih efektif lagi
    // yaitu dengan cara merubah function ini menjadi constructor function
    // let mahasiswa = Object.create(methodMahasiswa);

    // namun sebenernya this tidak hanya membuat object kosong seperti ini
    // let this = {};
    // sebenarnya js nya secara default membuat let this = Object.create() dengan di dalam kurung atau parentnya terdapat object mahasiswa.prototype
    // let this = Object.create(mahasiswa.prototype);

    this.nama = nama;
    this.energi = energi;
    // terus bagaimana cara mengelola methodnya yang lain
    
    return this;
}

// jadi cukup simpel dengan menggunakan sintaks seperti berikut
// jadi tidak memerlukan object baru
Mahasiswa.prototype.makan = function(porsi) {
    this.energi += porsi;
    return `Hallo ${this.nama} selamat makan`;
}

Mahasiswa.prototype.main = function(jam) {
    this.energi -= jam;
    return `Hallo ${this.nama} selamat bermain`;
}

Mahasiswa.prototype.tidur = function(jam) {
    this.energi = jam * 2;
    return `Hallo ${this.nama} selamat tidur`;
}

let mahasiswa1 = new Mahasiswa('Zaki', 20);


// dengan memahami prototype, bisa paham tentang type data apapun di js karena js apapun yang ada di dalamnya adalah berupa object, seperti contoh
// let array = [];
// itu sebenarnya di dalam js ditulis sebagai berikut
// let array = new Array();
// function Array() {
//     let this = Object.create(Array.prototype);
// }
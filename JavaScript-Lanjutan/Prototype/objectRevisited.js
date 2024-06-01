// membuat object dalam javascript dibagi menjadi 4 cara yaitu, 
// 1. object literal atau object 
// 2. function declaration
// 3. constructor function dengan menggunakan keyword new
// 4. Object.create

// 1. object literal
let mahasiswa1 = {
   nama: "Zaki Dzulfikar",
   energi: 10,
   makan: function(porsi) {
    return this.energi += porsi;
    console.log(`Selamat datang ${this.nama} selamat makan`);
   }
}

let mahasiswa2 = {
   nama: "Jack Berck",
   energi: 10,
   makan: function(porsi) {
    return this.energi += porsi;
    console.log(`Selamat datang ${this.nama} selamat makan`);
   }
}



// 2. function declaration tidak perlu menduplikat objectnya tinggal bikin template satu aja tinggal nanti dipakai pakai berulang kali
function Mahasiswaa(nama, energi) {
    let mahasiswa = {};
    mahasiswa.nama = nama;
    mahasiswa.energi = energi;

    mahasiswa.makan = function(porsi) {
        this.energi += porsi;
        console.log(`Selemat datang ${this.nama} selamat makan`);
    }

    mahasiswa.jam = function(jam) {
        this.energi -= jam;
        console.log(`Halo ${this.nama} telah bermain selama ${this.jam}`);
    }

    return mahasiswa;
}

let zaki = Mahasiswaa("Zaki", 10);


// 3. constructor function, tanpa memerlukan deklarasi object dan diganti dengan keyword this dan menghilangkan return namun menggunakan keyword new
function Mahasiswa(nama, energi) {
    this.nama = nama;
    this.energi = energi;
    this.makan = function(porsi) {
        this.energi += porsi;
        console(`Selemat datang ${this.nama} selamat makan`);
    }
    this.jam = function(jam) {
        this.energi -= jam;
        console.log(`Halo ${this.nama} telah bermain selama ${this.jam}`);
    }
}

let jack = new Mahasiswa("Jack", 10);
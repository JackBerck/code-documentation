function Angkot(sopir, tujuan, penumpang, kas) {
  this.sopir = sopir;
  this.tujuan = tujuan;
  this.penumpang = penumpang;
  this.kas = kas;
  this.penumpangNaik = function (namaPenumpang) {
    this.penumpang.push(namaPenumpang);
    return this.penumpang;
  }
  this.penumpangTurun = function (namaPenumpang, bayar) {
    if (this.penumpang == 0) {
      alert('Angkot masih kosong!');
      return false;
    }
    for (var i = 0; i < this.penumpang.length; i++) {
      if (this.penumpang[i] == namaPenumpang) {
        this.penumpang[i] = undefined;
        this.kas += bayar;
        return this.penumpang;
      } else {
        alert(`${namaPenumpang} tidak ada di dalam angkot`);
        return this.penumpang;
      }
    }
  }
}

let angkot1 = new Angkot('Bagas', ['Tersono', 'Limpung'], [], 0);
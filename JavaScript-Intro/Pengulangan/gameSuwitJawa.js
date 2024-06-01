let ask = true;
while (ask) {
  let player = prompt('Pilih pilihan berikut:\nGajah\nSemut\nOrang');
  let comp = Math.random();
  if (comp <= 0.33) {
    comp = 'Gajah';
  } else if (comp > 0.33 && comp <= 0.67) {
    comp = 'Semut';
  } else {
    comp = 'Orang';
  }
  
  if (player == comp) {
    hasil = (player + ' lawan ' + comp + ' hasilnya seri');
  } else if (player == 'Gajah') {
    hasil = (comp == 'Semut') ? 'Anda Kalah!' : 'Anda Menang!';
  } else if (player == 'Semut') {
    hasil = (comp == 'Orang') ? 'Anda Kalah!' : 'Anda Menang!';
  } else if (player == 'Orang') {
    hasil = (comp == 'Gajah') ? 'Anda Kalah!' : 'Anda Menang!';
  } else {
    hasil = 'Anda menginputkan pilihan yang tidak benar!'
  }
  
  alert('Anda memilih ' + player + ' dan komputer memilih ' + comp + '. Maka ' + hasil);
  ask = confirm('Mau Lagi?');
}

alert('Terima Kasih Telah Bermain :)');
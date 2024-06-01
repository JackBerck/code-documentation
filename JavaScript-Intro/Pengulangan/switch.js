// switch ini penggunaannya sama seperti if dan else, akan tetapi switch hanya memiliki satu kondisi nanti switch akan mengecek nilai hasil dari kondisinya

// jika ingin menggunakan switch tinggal panggil aja keywordnya yaitu switch

// switch (ekspresi) {
//   case 'nilai 1':
//     aksi 1
//     break;
//   case 'nilai 2':
//     aksi 2
//     break;
//   case 'nilai n':
//     aksi n
//     break;
//   default:
//     aksi default
// }

// atau dalam bahasa sendiri
// switch (ekspresi) {
//   case 'nilai atau kasus atau hasil ekspresi 1':
//     aksi 1
//     break;
//   case 'nilai atau kasus atau hasil ekspresi 2':
//     aksi 2
//     break;
//   case 'nilai atau kasus atau hasil ekspresi n':
//     aksi n
//     break;
//   default:
//     aksi default
// }


// catatan!
// break untuk mengeluarkan pengkondisian dari batasnya setelah sudah terseleksi aksinya





let angka = prompt('Masukkan angka :');

switch (angka) {
  case '1':
    console.log('Angka yang anda masukkan adalah 1');
    break;
  case '2':
    console.log('Angka yang anda masukkan adalah 2');
    break;
  case '3':
    console.log('Angka yang anda masukkan adalah 3');
    break;
  default:
    console.log('Angka yang anda masukkan tidak benar!');
}





let pilihan = prompt('Manakah di bawah ini yang merupakan hewan herbivora: \n a. Kadal, Kerbau, dan Harimau \n b. Anjing, Kucing, dan Hiu \n c. Kerbau, Kelinci, dan Marmut \n d. Elang, Kambing, dan Babi');

switch (pilihan) {
  case 'a':
  case 'b':
  case 'd':
    alert('Jawaban anda salah');
    break;
  case 'c':
    alert('Jawaban anda benar');
    break;
  default:
    alert('Anda memasukkan jawaban yang tidak sesuai dengan pilihan!');
}
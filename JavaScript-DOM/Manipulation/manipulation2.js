// DOM MANIPULATION dibagi menjadi 2 yaitu 
// manipulasi elemen, pemanipulasian elemen pada html(seperti menambahkan class, attribut, dan lain")
// manipulasi node, pemanipulasian node pada html(seperti menambahkan elemen, menghilangkan, dan lain")

// MANIPULASI NODE memungkinkan kita untuk memanipulasi node atau menambahkan mengganti atau menghapus elemen baru pada DOM




// manipulasi node memiliki beberapa metode, berikut ini beberapa metodenya


// document.createElement() => untuk membuat element pada html
// document.createElement('namaElement');
const pBaru = document.createElement('p');


// document.createTextNode() => untuk membuat text atau isi yang akan dimasukkan pada elemen yang sudah dibuat
// document.createTextNode('isiText');
const textBaru = document.createTextNode('Paragraf Baru');


// node.appendChild() => penyimpanan text pada elemen akan tetapi menyimpannya nantinya akan di akhir child dari parent(menggabungkan antara document.createElement dengan document.createTextNode, atau memasukkan text yang sudah dibuat ke dalam elemen yang sudah dibuat juga)
// namaVariabelElemenBaru.appendChild(namaVariabelTextBaru);

// cara"nya 
// 1. tangkap elemen dan teksnya
// 2. lalu gabungkan elemen dan teksnya yang sudah ditangkap tadi
pBaru.appendChild(textBaru);
const sectionA = document.getElementById('a');
sectionA.appendChild(pBaru);


// node.insertBefore() => penyimpanan text pada elemen akan tetapi letak menyimpannya tidak pasti di akhir, letaknya nanti akan disesuaikan oleh kita sendiri mau dimana (menggabungkan antara document.createElement dengan document.createTextNode, atau memasukkan text yang sudah dibuat ke dalam elemen yang sudah dibuat juga)
// namaVariabelElemenParentYangAkanMenjadiWadah.insertBefore(namaVariabelTextDanElemenBaru, namaVariabelElemenSetelahnya);

// cara"nya
// 1. tangkap elemen dan teksnya lalu gabungkan
const liBaru = document.createElement('li');
const textLiBaru = document.createTextNode('Teks Li Baru');
liBaru.appendChild(textLiBaru);
// 2. tangkap element parentnya dan elemen setelahnya(child setelahnga dari parentnya)
const ul = document.querySelector("#b ul");
const li2 = ul.querySelector('li:nth-child(2)');
// 3. lalu letakkan dan gabungkan
ul.insertBefore(liBaru, li2);


// parentNode.removeChild() => untuk menghilangkan atau menghapus elemen yang berada disuatu parent
// parrentNodenyaAtauElemennya.removeChild(elemenYangMauDihilangkan);

// cara"nya 
// 1. tangkap elemen parentnya dan elemen yang mau dihilangkan
const link = document.getElementsByTagName('a')[0];
// 2. lalu gabungkan elemen parentnya dan elemen yang mau dihilangkan yang sudah ditangkap tadi
sectionA.removeChild(link);


// parentNode.replaceChild() => untuk menggantikan elemen yang berada disuatu parent dengan elemen yang lain atau yang baru
// parrentNodenyaAtauElemennya.replaceChild(elemenYangMauDiterapkanAtauNodeBaru,elemenYangMauDigantiAtauNodeYangMauDigantikan);

// cara"nya 
// 1. tangkap elemen parentnya dan elemen yang mau diganti
const sectionB = document.getElementById('b');
const pB = sectionB.querySelector('p');
// 2. buat elemen baru dan teks baru lalu gabungkan menggunakan appendChild
const h2Baru = document.createElement('h2');
const h2TextBaru = document.createTextNode('H2 Baru');
h2Baru.appendChild(h2TextBaru);
// 3. lalu lalukan penggabungkan atau penggantian elemen
sectionB.replaceChild(h2Baru, pB);
// document.querySelector => element => bukan array
const p = document.querySelector('#b p');
p.style.backgroundColor = 'orange';
p.style.fontSize = '17px';

const li2 = document.querySelector('#b ul li:nth-child(2)');
li2.style.color = '#fefdff'
li2.style.backgroundColor = '#324533'
// catatan! jika kita memberikan style/css pada javascript maka akan memberikan stylenya secara inline



// document.querySelectorAll => nodeList => array
// catatan jika HTMLCollection akan menghasilkan array sehingga harus dikasih urutan index-nya, jika ingin semuanya dikasih style maka harus melakukan looping
const semuaP = document.querySelectorAll('p');
for (let i = 0; i < semuaP.length; i++) {
  semuaP[i].style.textDecoration = 'line-through';
  semuaP[i].style.fontStyle = 'oblique';
}


// CARA PENGGUNAAN DALAM MERUBAH NODE ROOT
// caranya node rootnya yang ingin dipilih dibuat terlebih dahulu lalu dijadikan node root yang nantinya ingin di ambil
const sectionB = document.getElementById('b');
const pHa = sectionB.querySelector('p');
pHa.innerHTML = 'pHa';
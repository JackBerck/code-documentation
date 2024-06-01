// popup box atau dialog box adalah sebuah window kecil dibrowser kita yang dapat kita munculkan sebagai alat interaksi yang digunakan agar user dapat berdialog dengan halaman web

// popup box dibagi menjadi 3 macam, yaitu alert, prompt, dan confirm

// 2. prompt, prompt fungsinya hampir sama seperti alert yaitu memunculkan popup kecil window akan tetapi di-prompt ini memiliki text box untuk kita bisa memasukkan sebuah input-an, lalu mengembalikan nilai apapun yang kita tuliskan dalam input-annya

// cara penulisannya yaitu :
//     prompt('Masukkan Nama Anda :')
// tuliskan prompt() lalu di dalam tanda kurung atau parameter tersebut kita dapat mengisikan pesan yang ingin ditampilkan

// prompt juga dapat digunakan berulang kali atau lebih dari sekali dalam satu page website

var name = prompt('Masukkan Nama :'),
    birth = prompt ('Masukkan Tanggal Lahir :')
    age = prompt('Masukkan Umur :'),
console.log('Nama anda ' + name + ' tanggal lahir anda ' + birth + ' yang berarti umur anda adalah ' + age + ' tahun');
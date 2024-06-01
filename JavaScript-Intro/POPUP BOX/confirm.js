// popup box atau dialog box adalah sebuah window kecil dibrowser kita yang dapat kita munculkan sebagai alat interaksi yang digunakan agar user dapat berdialog dengan halaman web

// popup box dibagi menjadi 3 macam, yaitu alert, prompt, dan confirm

// 3. confirm, confirm fungsinya hampir sama seperti alert dan prompt yaitu memunculkan popup kecil window akan tetapi di-confirm ini digunakan untuk meminta konfirmasi dari user. dan kita sebagai developer yang nantinya akan menentukan apa yang terjadi jika user menekan tombol ok atau cancel
// dalam confirm tersebut kan memiliki tombol ok dan cancel, tombol ok akan menghasilkan nilai true sedangkan tombol cancel akan menghasilkan nilai false

// cara penulisannya yaitu :
//     confirm('Apakah anda ingin mencoba lagi?')
// tuliskan confirm() lalu di dalam tanda kurung atau parameter tersebut kita dapat mengisikan pesan yang ingin ditampilkan

// confirm juga dapat digunakan berulang kali atau lebih dari sekali dalam satu page website

{confirm('Jadi sama aku nggak?') ? console.log('Aaaaaa makasih :)') : console.log('Kamu jahat :(')}
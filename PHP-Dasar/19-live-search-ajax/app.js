const keyword = document.querySelector("#keyword");
const cariButton = document.querySelector("#cari-button");
const container = document.querySelector("#container");

keyword.addEventListener("keyup", function () {
  // membuat objek ajax menggunakan XMLHttpRequest
  // XMLHttpRequest adalah objek yang digunakan untuk melakukan komunikasi dengan server melalui javascript untuk mengirim atau menerima data dari server tanpa harus merefresh halaman web
  const xhr = new XMLHttpRequest();

  // cek kesiapan ajax
  // onreadystatechange adalah properti yang berisi fungsi yang akan dijalankan setiap kali terjadi perubahan pada objek XMLHttpRequest
  // readyState adalah properti yang berisi status dari objek XMLHttpRequest
  // status adalah properti yang berisi status dari permintaan yang dikirim oleh objek XMLHttpRequest
  // responseText adalah properti yang berisi teks yang dikembalikan oleh server sebagai respons dari permintaan yang dikirim oleh objek XMLHttpRequest
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  // eksekusi ajax
  // open adalah method yang digunakan untuk mengatur jenis permintaan dan URL yang akan dikirim
  // send adalah method yang digunakan untuk mengirim permintaan ke server
  xhr.open("GET", "mahasiswa.php?keyword=" + keyword.value, true);
  xhr.send();
});

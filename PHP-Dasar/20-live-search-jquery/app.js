// tanda $ adalah jQuery yang menandakan bahwa kita akan menggunakan jQuery
// document.ready() adalah method yang digunakan untuk mengeksekusi kode ketika dokumen sudah siap
$(document).ready(function () {
  $("#cari-button").hide();
  // menampilkan loading ketika halaman pertama kali diakses
  $("#container").html("<h1>Loading...</h1>");
  // event ketika keyword ditulis
  $("#keyword").on("keyup", function () {
    // ambil isi dari keyword
    const keyword = $(this).val();
    $("#loading").show();
    // ajax menggunakan jQuery
    $.get("mahasiswa.php?keyword=" + keyword, function (data) {
      $("#container").html(data);
      $("#loading").hide();
    });
  });
});

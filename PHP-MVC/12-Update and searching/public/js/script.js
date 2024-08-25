$(function () {
  const baseURL = window.location.href.substring(
    0,
    window.location.href.indexOf("/public/")
  );

  $(".tambah-data").on("click", function () {
    $("#formModalLabel").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $(".modal-body form").attr("action", baseURL + "/public/mahasiswa/tambah/");
    $("#nama").val("");
    $("#nrp").val("");
    $("#email").val("");
    $("#jurusan").val("");
    $("#id").val("");
  });

  $(".tampil-modal-ubah").on("click", function () {
    $("#formModalLabel").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".form-mahasiswa").attr(
      "action",
      baseURL + "/public/mahasiswa/ubah_data/"
    );

    const id = $(this).data("id");

    $.ajax({
      url: baseURL + "/public/mahasiswa/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        console.log(data);
        $("#id").val(data.id);
        $("#nama").val(data.nama);
        $("#nrp").val(data.nrp);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
      },
    });
  });
});

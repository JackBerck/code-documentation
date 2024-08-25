<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tambah-data" data-toggle="modal" data-target="#formModal">
                Tambah data mahasiswa
            </button>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASE_URL ?>/mahasiswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari mahasiswa..." aria-label="Cari mahasiswa..." aria-describedby="basic-addon2" name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <!-- Modal -->
            <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModalLabel">Tambah data mahasiswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= BASE_URL ?>mahasiswa/tambah" method="post" class="form-mahasiswa">
                            <div class="modal-body">
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label for="nama">Nama lengkap</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama Anda...">
                                </div>
                                <div class="form-group">
                                    <label for="nrp">NRP</label>
                                    <input type="text" class="form-control" name="nrp" id="nrp" placeholder="Masukkan NRP Anda...">
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <select class="form-control" id="jurusan" name="jurusan">
                                        <option value="Teknik Informatika">Teknik Informatika</option>
                                        <option value="Teknik Industri">Teknik Industri</option>
                                        <option value="Teknik Geologi">Teknik Geologi</option>
                                        <option value="Teknik Sipil">Teknik Sipil</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email Anda...">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Tambah data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <h3>Daftar mahasiswa</h3>
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <ul class="list-group">
                    <li class="list-group-item"><?= $mhs['nama']; ?>
                        <a href="<?= BASE_URL ?>mahasiswa/hapus/<?= $mhs["id"] ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
                        <a href="<?= BASE_URL ?>mahasiswa/ubah_data/<?= $mhs["id"] ?>" class="badge badge-success float-right ml-2 tampil-modal-ubah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id'] ?>">Ubah</a>
                        <a href="<?= BASE_URL ?>mahasiswa/detail/<?= $mhs["id"] ?>" class="badge badge-primary float-right">Detail</a>
                    </li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
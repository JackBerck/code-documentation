<div class="container">
    <div class="row mt-5">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Detail Mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nrp']; ?></h6>
                    <p class="card-text"><?= $data['mhs']['email']; ?></p>
                    <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
                    <a href="<?= BASE_URL; ?>mahasiswa" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
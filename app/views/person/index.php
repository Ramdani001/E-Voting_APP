<div class="container mt-3">

    <div class="row">
        <div class="col-md-6">
            <?php Flash::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah User
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <form action="<?= BASEURL; ?>/person/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari User.." name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
        </div>
        </form>
    </div>


    <div class="row">
        <div class="col-md-6">
            <h3>Daftar User</h3>
            <ul class="list-group">
                <?php foreach ($data['users'] as $user) : ?>
                    <li class="list-group-item">
                        <?= $user['nama']; ?>
                        <a href="<?= BASEURL; ?>/person/detail/<?= $user['id_person']; ?>" class="badge text-bg-primary float-right ml-1">detail</a>
                        <a href="<?= BASEURL; ?>/person/ubah/<?= $user['id_person']; ?>" class="badge text-bg-success float-right ml-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id_person="<?= $user['id_person']; ?>">ubah</a>
                        <a href="<?= BASEURL; ?>/person/hapus/<?= $user['id_person']; ?>" class="badge text-bg-danger float-right ml-1" onclick="return confirm('Yakin?');">hapus</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModalLabel">Tambah Data User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/person/tambah" method="post">
                    <input type="hidden" name="id_person" id="id_person">
                    <input type="hidden" name="id_img" id="id_img">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="alamat" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" id="no_hp" name="no_hp">
                    </div>
                    <div class="mb-3">
                        <label for="tipe" class="form-label">Tipe</label>
                        <select class="form-select" name="tipe" id="tipe" aria-label="Default select example">
                            <option selected>Pilih Tipe User</option>
                            <option value="pemilih">Pemilih</option>
                            <option value="petugas">Petugas</option>
                            <option value="kandidat">Kandidat</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="visi" class="form-label">Visi</label>
                        <input type="text" class="form-control" id="visi" name="visi">
                    </div>
                    <div class="mb-3">
                        <label for="misi" class="form-label">Misi</label>
                        <input type="text" class="form-control" id="misi" name="misi">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
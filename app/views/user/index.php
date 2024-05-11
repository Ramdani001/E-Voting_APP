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
            <form action="<?= BASEURL; ?>/user/cari" method="post">
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
                        <?= $user['email']; ?>
                        <a href="<?= BASEURL; ?>/user/detail/<?= $user['id_user']; ?>" class="badge text-bg-primary float-right ml-1">detail</a>
                        <a href="<?= BASEURL; ?>/user/ubah/<?= $user['id_user']; ?>" class="badge text-bg-success float-right ml-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id_user="<?= $user['id_user']; ?>">ubah</a>
                        <a href="<?= BASEURL; ?>/user/hapus/<?= $user['id_user']; ?>" class="badge text-bg-danger float-right ml-1" onclick="return confirm('Yakin?');">hapus</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModalLabel">Tambah Data User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/user/tambah" method="post">
                    <input type="hidden" name="id_user" id="id_user">
                    <input type="hidden" name="id_person" id="id_person">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">status</label>
                        <input type="number" class="form-control" id="status" name="status" value="1" readonly>
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
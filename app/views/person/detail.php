<div class="container mr-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['users']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['users']['no_hp']; ?></h6>
            <p class="card-text"><?= $data['users']['alamat']; ?></p>
            <p class="card-text"><?= $data['users']['visi']; ?></p>
            <p class="card-text"><?= $data['users']['misi']; ?></p>
            <a href="<?= BASEURL; ?>/person" class="card-link">Kembali</a>
        </div>
    </div>

</div>
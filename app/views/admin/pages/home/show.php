<?php
$query_profil = mysqli_query($koneksi, "SELECT * FROM user WHERE email ='".$_SESSION['email']."'");
$data_profil = mysqli_fetch_array($query_profil);
?>

<div class="row">
    <div class="col-md-12">
        <h3>Selamat Datang <!--<?php echo "$data_profil[nama] $data_profil[nama]"; ?>--></h3>
        <h6 style="padding-bottom:1rem;">Semua sistem berjalan dengan lancar.</h6>
    </div>
</div>

<div class="row">
<div class="col-lg-6 col-sm-6">
    <div class="card gradient-4">
        <div class="card-body">
            <h3 class="card-title text-white">Jumlah Pengguna Akun</h3>
            <div class="d-inline-block">
                <h2 class="text-white">
                    <?php
                    $qry = mysqli_query($koneksi,"SELECT COUNT(id_user) as jumlah from user");
                    $data = mysqli_fetch_array($qry);
                    echo $data['jumlah'];
                    ?>
                </h2>
                <p class="text-white mb-0">Akun</p>
            </div>
            <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
        </div>
    </div>
</div>
<div class="col-lg-6 col-sm-6">
    <div class="card gradient-3">
        <div class="card-body">
            <h3 class="card-title text-white">Jumlah Kandidat</h3>
            <div class="d-inline-block">
                <h2 class="text-white">
                    <?php
                    $qry = mysqli_query($koneksi,"SELECT COUNT(id_kandidat) as jumlah from kandidat");
                    $data = mysqli_fetch_array($qry);
                    echo $data['jumlah'];
                    ?>
                </h2>
                <p class="text-white mb-0">Orang</p>
            </div>
            <span class="float-right display-5 opacity-5"><i class="fa fa-user-plus"></i></span>
        </div>
    </div>
</div>
</div>

<div class="row">
    <!-- Bar Chart -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Hasil Pemilihan</h4>
                <canvas id="barChart" width="500" height="250"></canvas>
            </div>
        </div>
    </div>

</div>
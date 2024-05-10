<?php
$query_profil = mysqli_query($koneksi, "SELECT * FROM user WHERE email ='".$_SESSION['email']."'");
$data_profil = mysqli_fetch_array($query_profil);
?>

<div class="col">
    <h3>Selamat Datang <!--<?php echo "$data_profil[nama] $data_profil[nama]"; ?>--></h3>
</div>


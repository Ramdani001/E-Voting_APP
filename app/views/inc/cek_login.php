<?php
@session_start();
include('config.php');

if(isset($_POST['masuk'])) {
    $user = mysqli_real_escape_string($koneksi, $_POST['email']);
    $pass = $_POST['password']; // No need for mysqli_real_escape_string for passwords, use prepared statements instead.
    
    // Using prepared statement to prevent SQL injection
    $queryuser = mysqli_prepare($koneksi, "SELECT * FROM user WHERE email=? AND password=?");
    mysqli_stmt_bind_param($queryuser, "ss", $user, $pass);
    mysqli_stmt_execute($queryuser);
    mysqli_stmt_store_result($queryuser);
    $hasil = mysqli_stmt_num_rows($queryuser);
    mysqli_stmt_fetch($queryuser);

    if ($hasil == 1) {
        $_SESSION['email'] = $user;
        
        // Selecting tipe field from person table based on status
        $querytipeuser = mysqli_query($koneksi, "SELECT user.email, person.tipe FROM user INNER JOIN person ON user.email = person.tipe");
        $caritipeuser = mysqli_fetch_array($querytipeuser);
        
        if ($caritipeuser['tipe'] == "ADMIN") {
            $_SESSION['log'] = "Logged";
            header("location:admin/index.php");
            exit; // Add exit after header to stop further execution
        } else if ($caritipeuser['tipe'] == "MEMBER") {
            $_SESSION['log'] = "Logged";
            header("location:member/index.php");
            exit; // Add exit after header to stop further execution
        } else {
            $_SESSION['log'] = "Logged";
            header("location:officer/index.php");
            exit; // Add exit after header to stop further execution
        }
    } else {
        echo("<div class='alert alert-danger'>
                <center>
                    <strong>LOGIN GAGAL</strong>
                    <br>
                    Periksa Nama Pengguna dan Kata Sandi!
                </center>
            </div>");
    }
}
?>

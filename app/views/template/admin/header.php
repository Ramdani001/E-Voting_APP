<?php
@session_start();
if (@$_SESSION['email']) {
    if (@!$_SESSION['tipe'] == "ADMIN") {
        header("location:");
    }
}
include("../inc/config.php");

//$query_profil = mysqli_query($koneksi, "SELECT * FROM tb_admin_detail WHERE username ='".$_SESSION['username']."'");
//$data_profil = mysqli_fetch_array($query_profil);

@$page  = $_GET['page_admin'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin - Website E-Voting</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
<?php

include("tersambung.php");

if(isset($_POST['tambah'])){

    $nama = $_POST['NAMA_CUSTOMER'];
    $kode = $_POST['KODE_CUSTOMER'];
    $handpone = $_POST['NO_HANDPHONE'];

    // buat query
    $sql = "INSERT INTO customer (NAMA_CUSTOMER, KODE_CUSTOMER, NO_HANDPHONE) VALUE ('$nama', '$kode', '$handpone')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
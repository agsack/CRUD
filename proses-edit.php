<?php

include("tersambung.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $kode = $_POST['KODE_CUSTOMER'];
    $nama = $_POST['NAMA_CUSTOMER'];
    $handpone = $_POST['NO_HANDPHONE'];

    $sql = "UPDATE customer SET KODE_CUSTOMER='$kode', NAMA_CUSTOMER='$nama', NO_HANDPHONE='$handpone' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
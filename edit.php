<?php

include("tersambung.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM customer WHERE id=$id";
$query = mysqli_query($db, $sql);
$id = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Edit Customer</title>
</head>

<body>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $id['id'] ?>" />

            <p>
                <label for="nama">Nama Customer: </label>
                <input type="text" name="NAMA_CUSTOMER" placeholder="Nama Customer"
                    value="<?php echo $id['NAMA_CUSTOMER'] ?>" />
            </p>
            <p>
                <label for="kode">Kode Customer: </label>
                <input type="text" name="KODE_CUSTOMER" placeholder="Kode Customer" value="<?php echo $id['KODE_CUSTOMER'] ?>" />
            </p>
            <p>
                <label for="handpone">No Handphone: </label>
                <input type="text" name="NO_HANDPONE" placeholder="No Handphone" value="<?php echo $id['NO_HANDPONE'] ?>" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>

        </fieldset>


    </form>

</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Tambah Customer</title>
</head>

<body>
    <header>
        <h3>Menambahkan Customer Baru</h3>
    </header>

    <form action="proses-add.php" method="POST">

        <fieldset>

            <p>
                <label for="kode">Kode Customer: </label>
                <input type="text" name="KODE_CUSTOMER" placeholder="Masukan Kode Customer" />
            </p>
            <p>
                <label for="nama">Nama Customer: </label>
                 <input type="text" name="NAMA_CUSTOMER" placeholder="Masukan Nama Customer" />
            </p>
            <p>
                <label for="handpone">No Handphone: </label>
                <input type="text" name="NO_HANDPHONE" placeholder="Masukan No Handphone" />
            </p>
            <p>
                <input type="submit" value="Tambahkan Customer" name="tambah" />
            </p>

        </fieldset>

    </form>

</body>

</html>
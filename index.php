<?php include("tersambung.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>CRUD SCUTO CIKARANG</title>
</head>

<body>

    <nav>
        <a href="add.php">[+] Tambah Baru</a>
        <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
            if($_GET['status'] == 'sukses'){
                echo "Penambahan Customer Baru Berhasil!";
            } else {
                echo "Penambahan Gagal!";
            }
        ?>
        </p>
        <?php endif; ?>
        Hasilnya:
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>Kode Customer</th>
                <th>Nama Customer</th>
                <th>No Handphone </th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>

            <?php
        $sql = "SELECT * FROM customer";
        $query = mysqli_query($db, $sql);

        while($id = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$id['KODE_CUSTOMER']."</td>";
            echo "<td>".$id['NAMA_CUSTOMER']."</td>";
            echo "<td>".$id['NO_HANDPONE']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$id['id']."'>Edit</a> | ";
            echo "<a href='delete.php?id=".$id['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>

</html>
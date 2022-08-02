<?php

// cek session (jika tidak menggunakan login hapus ini)
include 'cek_session.php';


include 'koneksi.php';

$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>

<body>
    <h1>Data Barang</h1>
    <h2>
        <?php echo $_SESSION['username']; ?>
    </h2>
    <p><a href="tambah.php">Tambah Barang</a></p>
    <p><a href="cetak.php">Cetak Barang</a></p>
    <p style="text-align:right ;">
        <a href="logout.php">Logout</a>
    </p>

    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>Nama Mahasiswa</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Telpon</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["nama"] ?></td>
                <td><?php echo $row["npm"] ?></td>
                <td><?php echo $row["kelas"] ?></td>
                <td><?php echo $row["telpon"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row["id"] ?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $row["id"] ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>
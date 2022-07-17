<?php
$conn = mysqli_connect("localhost", "root", "", "praktikum");

if (isset($_POST["submit"])) {

    $nama = $_POST["nama"];
    $npm = $_POST["npm"];
    $kelas = $_POST["kelas"];
    $telpon = $_POST["telpon"];
    $email = $_POST["email"];

    $query = "INSERT INTO mahasiswa VALUES(NULL, '$nama', '$npm', '$kelas', '$telpon', '$email')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>

<body>
    <h1>Tambah Data Barang</h1>
    <form action="" method="POST">
        Nama Mahasiswa : <input type="text" name="nama"><br>
        NPM : <input type="text" name="npm"><br>
        Kelas :
        <select name="kategori">
            <option value="1A">1A</option>
            <option value="1B">1B</option>
        </select><br>
        Telpon : <input type="text" name="telpon"><br>
        Email : <input type="text" name="email"><br>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>

</html>
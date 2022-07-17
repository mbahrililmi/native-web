<?php
$conn = mysqli_connect("localhost", "root", "", "praktikum");

$id = $_GET["id"];

$querya = "SELECT * FROM mahasiswa WHERE id = $id";
$resulta = mysqli_query($conn, $querya);
$rowa = mysqli_fetch_assoc($resulta);

if (isset($_POST["submit"])) {

    $nama = $_POST["nama"];
    $npm = $_POST["npm"];
    $kelas = $_POST["kelas"];
    $telpon = $_POST["telpon"];
    $email = $_POST["email"];

    $query = "UPDATE mahasiswa SET nama = '$nama', npm = '$npm', kelas = '$kelas', telpon = '$telpon', email = '$email' WHERE id = $id";
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
    <h1>Edit Data Barang</h1>
    <form action="" method="POST">
        Nama Mahasiswa : <input type="text" name="nama" value="<?php echo $rowa["nama"] ?>"><br>
        NPM : <input type="text" name="npm" value="<?php echo $rowa["npm"] ?>"><br>
        Kelas :
        <select name="kelas">
            <option value="1A" <?php if ($rowa["kelas"] == '1A') {
                                        echo "SELECTED";
                                    } ?>>1A</option>
            <option value="1B" <?php if ($rowa["kelas"] == '1B') {
                                            echo "SELECTED";
                                        } ?>>1B</option>
        </select><br>
        Telpon : <input type="text" name="telpon" value="<?php echo $rowa["telpon"] ?>"><br>
        Email : <input type="text" name="email" value="<?php echo $rowa["email"] ?>"><br>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>

</html>
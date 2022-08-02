<?php
include 'koneksi.php';

$id = $_GET["id"];

$query = "DELETE FROM mahasiswa WHERE id = $id";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: index.php");
}

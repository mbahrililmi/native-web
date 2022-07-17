<?php
$conn = mysqli_connect("localhost", "root", "", "praktikum");

$id = $_GET["id"];

$query = "DELETE FROM mahasiswa WHERE id = $id";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: index.php");
}

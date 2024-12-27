<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM jadwal_periksa WHERE id=$_GET['id']");
    header("Location: jadwal.php");
}
?>
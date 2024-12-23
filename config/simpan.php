<?php
include "connection.php";

if (isset($_POST['simpan'])) {
    $penerima = $conn->real_escape_string($_POST['penerima']);
    $judul = $conn->real_escape_string($_POST['judul']);
    $pesan = $conn->real_escape_string($_POST['pesan']);

    $sql = "INSERT INTO pesan (penerima, judul, pesan) VALUES ('$penerima', '$judul', '$pesan')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Pesan berhasil disimpan!'); window.location.href = '../tampilkanData.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "')</script>";
    }
}

$conn->close();

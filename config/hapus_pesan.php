<?php
include "connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (is_numeric($id)) {
        $sql = "DELETE FROM pesan WHERE id = ?";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("i", $id);

            // Menjalankan query
            if ($stmt->execute()) {
                echo "<script>
                        alert('Pesan berhasil dihapus');
                        window.location.href = '../index.php';
                      </script>";
                exit;
            } else {
                echo "<script>alert('Error: Tidak dapat menghapus pesan.');</script>";
            }

            $stmt->close();
        } else {
            echo "<script>alert('Error: Gagal menyiapkan query.');</script>";
        }
    } else {
        echo "<script>alert('ID tidak valid.');</script>";
    }
} else {
    echo "<script>alert('ID tidak ditemukan.');</script>";
}

$conn->close();

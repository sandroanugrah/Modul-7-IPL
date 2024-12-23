<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modul 7</title>
    <link rel="stylesheet" href="assets/css/style2.css" type="text/css" />
</head>

<body>
    <div class="container">
        <h1>Daftar Pesan</h1>
        <table>
            <thead>
                <tr>
                    <th>Penerima</th>
                    <th>Judul Pesan</th>
                    <th>Tanggal Pembuatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                include "config/connection.php";
                $sql = "SELECT * FROM pesan";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                    <td>" . $row["penerima"] . "</td>
                    <td>" . $row["judul"] . "</td>
                    <td>" . $row["tanggal_pembuatan"] . "</td>
                    <td>
                        <a href='config/hapus_pesan.php?id=" . $row["id"] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus pesan ini?\")'>Hapus</a>
                    </td>
                  </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data pesan</td></tr>";
                }
                ?>
            </tbody>

        </table>
    </div>
</body>

</html>
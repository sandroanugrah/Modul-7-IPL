<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Modul 7</title>
  <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
</head>

<body>
  <form action="config/simpan.php" method="post" class="formulir-pesan">
    <div class="form-control">
      <input
        type="text"
        id="penerima"
        class="input-penerima"
        name="penerima"
        required />
      <label for="penerima">Masukkan Penerima</label>
    </div>

    <div class="form-control">
      <input
        type="text"
        id="judul"
        class="input-judul"
        name="judul"
        required />
      <label for="judul">Masukkan Judul Pesan</label>
    </div>

    <div class="form-control">
      <textarea
        id="pesan"
        class="textarea-pesan"
        name="pesan"
        required></textarea>
      <label for="pesan">Masukkan Pesan</label>
    </div>

    <button type="submit" class="btn-simpan" name="simpan"> Simpan </button>
  </form>

  <script src="assets/js/script.js"></script>
</body>

</html>
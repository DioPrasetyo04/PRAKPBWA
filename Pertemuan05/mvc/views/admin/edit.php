<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/edit.css">
</head>
<body>
    <div class="form-container">
        <form action="<?= BASEURL; ?>index.php?url=admin/store" method="POST">
            <h2>Edit Barang</h2>
            <label for="nama">Nama:</label><br>
            <input type="text" name="nama" id="nama" required><br><br>

            <label for="stok">Stok:</label><br>
            <input type="number" name="stok" id="stok" required><br><br>

            <label for="harga">Harga:</label><br>
            <input type="number" name="harga" id="harga" required><br><br>

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>

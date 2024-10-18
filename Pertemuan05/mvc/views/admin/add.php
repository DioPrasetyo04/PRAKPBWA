<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Barang</title>
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/admin_add_barang.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Barang</h2>
        <form action="<?= BASEURL; ?>index.php?url=admin/store" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>
            
            <label for="stok">Stok:</label>
            <input type="number" name="stok" id="stok" required>
            
            <label for="harga">Harga:</label>
            <input type="number" name="harga" id="harga" required>
            
            <button type="submit" class="submit-btn">Simpan</button>
        </form>
    </div>
</body>
</html>
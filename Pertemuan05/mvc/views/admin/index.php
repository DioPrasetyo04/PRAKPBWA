<h2>Halaman Admin</h2>
<div class="navbar">
    <a href="<?= BASEURL; ?>index.php?url=admin/add" class="btn btn-add">Tambah Barang</a>
    <a href="<?= BASEURL; ?>index.php?url=login/logout" class="btn btn-logout">Logout</a>
</div>

<link rel="stylesheet" href="<?= BASEURL; ?>/assets/table.css">
<table class="styled-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($data['items'] as $item): ?>
        <tr>
            <td><?= $item['id']; ?></td>
            <td><?= $item['nama']; ?></td>
            <td><?= $item['stok']; ?></td>
            <td><?= $item['harga']; ?></td>
            <td>
                <a href="<?= BASEURL; ?>index.php?url=admin/edit/<?= $item['id']; ?>" class="btn btn-edit">Edit</a>
                <a href="<?= BASEURL; ?>index.php?url=admin/delete/<?= $item['id']; ?>" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

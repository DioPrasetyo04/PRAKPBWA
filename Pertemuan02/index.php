<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Wedding: Mas Guntur dan Mbak Alia</title> <!-- membuat title pada page halaman html -->
    <style>
        body {
        text-align: center; /*membuat seluruh elemen gambar atau text menjadi center page */
        font-family: Arial, sans-serif; /* mengubah tipe tulisan text menjadi tipe arial dan sans-serif pada halaman page */ 
        background-color: #f0f0f0; /* mengubah warna background page menjadi putih */
        }
        img {
            max-width: 300px; /*Mengubah ukuran lebar gambar menjadi maximal 300px*/
            height: auto; /* Mengubah ukuran tinggi gambar menjadi auto sesuai dengan lebar gambar */
            margin-top: 20px; /* Menggeser gambar ke bawah sebesar 20px */
        }
        h1 {
            font-size: 2.5rem; /* Mengubah ukuran text heading 1 menjadi 2.5 em */
            color: #333; /* Mengubah warna text heading 1 */
            margin-top: 20px; /* Menggeser isi tag h1 kebawah sebesar 20px */
        }
        .links {
            margin-top: 30px; /* menggeser isi tag anchor pada class links ke bawah sebesar 30px  */
        }
        a {
            display: inline-block; /* Membuat isi tag anchor agar saat ditampilkan dapat mengatur lebar dan tinggi antar elemen sesuai */
            margin: 10px; /* Mengatur dan memberikan jarak 10 piksel antar elemen dan isi tag anchor dari semua sisi baik atas, bawah, kiri, dan kanan  */
            padding: 10px 20px; /* Menambahkan ruang antar teks dengan border sebesar 10px atas bawah dan 20px kiri dan kanan */
            background-color: #3498db; /* Menetapkan warna latar belakang biru pada isi tag anchor */
            color: #fff; /* menetapkan warna teks menjadi putih */
            text-decoration: none; /*menghilangkan garis bawah pada isi tag anchor */
            border-radius: 5px; /* Membuat border pada tag anchor menjadi sedikit melengkung sebesar 5px */
        }
        a:hover {
            background-color: #2980b9; /* membuat background color bewarna biru gelap ketika kursor bergerak diatas tag anchor */
        }
    </style>
</head>
<body>
    <h1>The Wedding</h1> <!-- membuat tampilan teks menjadi heading 1 seperti judul -->
    <h2>Mas Guntur dan Mbak Alia</h2> <!-- membuat tampilan teks menjadi heading 2 seperti subjudul -->
    <img src="../images_pert02/image_Wedding.webp" alt="Mempelai"> <!-- Menampilkan gambar pada folder tempat penyimpanan gambar -->
    <h2>Getting Married</h2> <!-- membuat tampilan teks menjadi heading 2 seperti subjudul -->

    <div class="links"> <!-- mengelompokkan tag anchor berdasarkan class links -->
        <a href="../Pertemuan02/isibukutamu.php">Isi Buku Tamu</a> <!-- membuat tulisan Isi Buku Tamu menjadi link yang dapat ditekan merujuk kepada suatu halaman/page -->
        <a href="../Pertemuan02/lihatbukutamu.php">Lihat Buku Tamu</a> <!-- membuat tulisan Isi Buku Tamu menjadi link yang dapat ditekan merujuk kepada suatu halaman/page -->
    </div>
</body>
</html>
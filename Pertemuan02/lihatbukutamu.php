<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Buku Tamu</title> <!-- membuat title pada page halaman html -->
    <style>
        body {
        font-family: Arial, sans-serif; /* mengubah tipe tulisan text menjadi tipe arial dan sans-serif pada halaman page */ 
        background-color: #f0f0f0; /* Mengubah warna latar belakang page menjadi abu-abu muda */ 
        text-align: center; /* Mengubah seluruh isi pada boddy agar rata tengah */ 
        }
        h2 {
            color: #333; /* Mengatur Warna teks sub judul h2 menjadi abu-abu tua */ 
            margin-top: 20px; /* Memberikan jarak 20px ke atas isi tag heading 2 */ 
        }
        table {
            width: 80%; margin-top: 20px; /* Mengatir lebar tabel menjadi 80% dari lebar halaman atau parrentnya */ 
            margin: 20px auto; margin-top: 20px; /* Memberikan margin atas bawah sebesar 20px, dan mengatur tabel ke tengah pada halaman web */ 
            border-collapse: collapse; margin-top: 20px; /* Menggabungkan batas sel yang berdekatan */ 
            background-color: #fff; margin-top: 20px; /* Memberikan warna latar belakang putih pada tabel */ 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Memberikan bayangan halus di sekeliling tabel*/ 
            margin-top: 20px; /* memberikan jarak pada atas tabel sebesar 20px  */
        }
        table, th, td {
            border: 1px solid #ddd; /* Menambahkan ketebalan garis border pada table dan isi table sebesar 1px dengan tipe garis solid dan warna abu-abu muda*/ 
        }
        th, td {
            padding: 12px; /* Memberikan padding 12px pada semua isi table */ 
            text-align: left; /* Mengatur isi teks tabel didalam sel agar rata kiri */ 
        }
        th {
            background-color: #3498db; /* Mengatur warna latar belakang biru pada judul kolom atau pada sel header */ 
            color: white; /* Mengatur warna teks header menjadi warna putih */ 
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; /* Memberikan warna latar belakang abu-abu muda pada baris dengan urutan genap dalam table untuk menciptakan efek zebra-striping */ 
        }
        p {
            font-size: 14px; /* Mengatur ukuran font pada paragraf menjadi 14px */ 
            line-height: 1.5; /* Mengatur jarak antar baris menjadi 1.5 kalu ukuran font */ 
            margin-top: 20px; /* Memberikan jaraj 20px diatas paragraf */ 
        }
        .last-entry {
            font-weight: bold; /* membuat teks menjadi tebal */ 
            color: #3498db; /* Mengubah warna teks menjadi biru */ 
        }
        a {
            display: inline-block; /* Mengatur letak isi tag anchor pada margin yang sesuai */ 
            margin-top: 20px; /* Memberikan jarak ke atas sebesar20px */ 
            text-decoration: none; /* Menghilangkan garis bawah pada isi dalam tag anchor */ 
            color: #3498db; /* Mengubah warna teks menjadi biru */ 
        }
    </style>
</head>
<body>
    <h2>Daftar Buku Tamu</h2> <!-- Judul halaman web -->
    
    <!-- Embed kode PHP didalam HTML -->
    <?php
    //Memeriksa apakah file bukutamu.txt ada, jika ada tampilkan isi file kedalam array $data, mengabaikan baris baru
    if (file_exists("bukutamu.txt")){
        $data = file("bukutamu.txt", FILE_IGNORE_NEW_LINES);

        //memeriksa apakah $data tidak kosong. jika ada data maka buat tabel dengan header kolom 
        if(!empty($data)){
            echo "<table>";
            echo"<tr><th>Nama</th><th>Email</th><th>Komentar</th><th>Gender</th></tr>";

         // Loop melalui setiap baris data dan buat tabel
        foreach ($data as $line) {
            $guest = explode(" | ", $line);  // Memisahkan data berdasarkan " | "
            echo "<tr>"; //membuat tabel baru untuk setiap entri buku tamu
            //menampilkan setiap bagian informasi dalam sel tabel terpisah
            foreach ($guest as $info) {
                echo "<td>$info</td>";
            }
            //membuat tabel baris baru untuk setiap data entri buku tamu
            echo "</tr>";
        }
        //menutup tabel jika ada data
        echo "</table>";
    } else { //menampilka pesan jika tidak ada data atau file
        echo "<p>Belum ada data buku tamu.</p>";
    }
} else {//menampilka pesan jika tidak ada data atau file
    echo "<p>Belum ada data buku tamu.</p>";
}

// Tampilkan nama pengunjung terakhir yang tersimpan di cookies
if (isset($_COOKIE['nama'])) {
    echo "<p class='last-entry'>Terakhir diisi oleh: " . $_COOKIE['nama'] . "</p>";
}
?>
<!--Akhir kode PHP-->
<a href="index.php">Kembali ke halaman utama</a> <!-- Menyediakan link untuk kembali ke halaman utama -->
</body>
</html>
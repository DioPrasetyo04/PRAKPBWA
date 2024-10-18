<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Buku Tamu</title> <!-- membuat title pada page halaman html -->
    <style>
        body{
            font-family: Arial, sans-serif; /* mengubah tipe tulisan text menjadi tipe arial dan sans-serif pada halaman page */ 
            background-color: #f0f0f0; /* Mengubah warna latar belakang page menjadi abu-abu muda */ 
            text-align: center; /* Mengubah seluruh isi pada boddy agar rata tengah */ 
        }
        h2{
            color: #333; /* Mengatur Warna teks sub judul h2 menjadi abu-abu tua */ 
            margin-top: 20px; /* Memberikan jarak 20px ke atas isi tag heading 2 */ 
        }
        form{
            display: inline-block; /* Membuat isi elemen tag from agar saat ditampilkan dapat mengatur lebar dan tinggi antar elemen sesuai */
            background-color: #fff; /* Memberikan latar belakang putih pada form */
            padding: 20px; /* memberikan jarak ruang antara elemen-elemen dalam form dengan isi form */ 
            border-radius: 8px; /* Membuat tampilan sudut form menjadi melengkung */ 
            box-shadow: 0 4px 8px rgba(0,0, 0, 0.1); /* Menampilkan sedikir bayangan halus di sekeliling form */ 
            text-align: left; /* Mengatur teks dan elemen teks didalam form menjadi rata kiri */ 
            width: 100%; /* Mengatur form lebar menjadi tetap 100% ketika page atau layar di minimize */ 
            max-width: 600px; /* Membuat dan mengatur lebar form menjadi ukuran 600px */ 
        }
        label{
            display: block; /* Membuat setiap label input berada pada baris baru, memberikan jarak antara label dengan tag heading 2 */ 
            margin-bottom: 8px; /* Memberikan jarak 8px dibawah pada setiap label input */
            font-weight: bold; /* Membuat teks label menjadi tebal */
        }
        
        input[type="text"],
        input[type="email"],

        textarea {
            width: calc(100% - 20px); /* Menambahkan ruang agar tidak bertabrakan dengan tepi */
            padding: 8px; /* Memberikan ruang sebesar 8px saat text di input agar tidak bertabrakan dengan area text*/
            margin-bottom: 15px; /* Memberikan jarak 15 px dibawah setiap pada text area */
            border-radius: 4px; /* Membuat sudut input sedikit melengkung. */ 
            border: 1px solid #ccc; /* Memberikan garis tepi abu-abu muda dengan ketebalan 1px dan tipe garis solid */ 
        }
        textarea {
            height: 100px; /* Mengatur tinggi text area menjadi 100px */ 
        }
        input[type="radio"] {
            margin-right: 10px; /* Memberikan jarak 10px disebelah kanan setiap input radio */ 
        }
        .gender-label {
            margin-bottom: 8px; /* Memberikan jarak ke bawah sebesar 8px untuk label gender */ 
        }
        .gender-options {
            margin-bottom: 15px; /* Memberikan jarak ke bawah sebesar 8px untuk opsi gender */ 
        }
        button {
            background-color: #3498db; /* Mengatur warna latar belakang tombol menjadi biru */ 
            color: #fff; /* Mengatur warna tulisan teks tombol menjadi putih  */
            padding: 10px 20px; /* Mengatur jarak isi teks dengan border sebesar 10px untuk atas bawah dan 20 px untuk kiri dan kanan */ 
            border: none; /* tipe border tidak ada */ 
            border-radius: 5px; /* Membuat lengkungan sedikit diujung border sebesar 5px */ 
            cursor: pointer; /* Mengubah kursor menjadi bentuk tangan saat diatas tombol */ 
            display: block; /* Membuat penempatan label pada baris baru pada halaman */ 
            width: 100%; /* Mengatur dan membuat lebar tombol tetap 100% ketika page berubah */ 
            max-width: 150px; /* Mengatur lebar tombol sebesar 150px */ 
            margin: 0 auto; /* Membuar jarak antara tombol dengan form sebesar 0 untuk atas bawah dan auto pada kiri dan kanan */
        }
        button:hover {
            background-color: #2980b9; /* Membuat backgorund color pada tombol berubah menjadi biru gelap ketika kursor berada diatas tombol */ 
        }
        a {
            display: inline-block; /* Mengatur letak isi tag anchor pada margin yang sesuai */ 
            margin-top: 20px; /* Memberikan jarak 20px diatas link anchor agar tidak bertabrakan dengan form */ 
            text-decoration: none; /* Menghilankan garis bawah pada link anchor */ 
            color: #3498db; /* Mengatur warna teks link menjadi biru */ 
        }
    </style>
</head>
<body>
    <h2>Isi Buku Tamu</h2> <!-- Membuat judul halaman yang menunjukkan tujuan form -->
    <form action="proses.php" method="POST"> <!-- action = Menunjukkan bahwa ketika form di submit maka data akan dikirim ke file dengan nama proses.php untuk diproses lebih lanjut, method post = data form akan dikirim menggunakan metode HTTP dengan method post dimana data pengguna tidak akan terlihat pada alamat domain -->
    <label for="nama">Nama:</label> <!--label untuk field nama -->
    <input type="text" id="nama" name="nama" value="<?php echo isset($_COOKIE['nama'])? $_COOKIE['nama'] :'';?>" required> <!-- Input field untuk nama dengan tipe text menggunakan php untuk mengisi nilai default dari cookie jika tersedia dan required berfungsi untuk field harus diisi sebelum form bisa di submit -->

    <label for="email">Email:</label> <!--label untuk field email -->
    <input type="email" id="email" name="email" required> <!-- Memastikan input menggunakan format email yang valid dengan menggunakan @ dan ekstension yang lengkap, dan required berfungsi field harus diisi sebelum form dikirimkan -->

    <label for="komentar">Komentar:</label> <!--label untuk field komentar -->
    <textarea name="komentar" id="komentar" required></textarea> <!--Komentar wajib diisi fungsi dari required -->

    <div class="gender-label"> <!-- pembungkus label gender untuk pengeditan css -->
        <label>Gender:</label> <!--label untuk field gender -->
    </div>
    <div class="gender-options"> <!-- pembungkus options gender untuk pengeditan css -->
        <input type="radio" id="pria" name="gender" value="Pria" required> Pria 
        <input type="radio" name="gender" id="wanita" value="Wanita" required> Wanita
        <!-- Dua opsi radio button pemilihan antara pria dan wanita yang salah satu opsinya harus dipilih -->
    </div>

    <button type="submit">Submit</button> <!-- Tombol untuk mengirimkan form -->
    </form>
    <p><a href="index.php">Kembali ke halaman utama</a></p> <!-- link untuk kembali ke halaman utama (index.php) -->
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: orange;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            margin: 100px 500px;
        }

        .kata {
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            color: green;
            margin: 0;
        }

        .form {
            margin: 10px 0;
        }

        .form label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form input[type="text"],
        .form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form textarea {
            resize: vertical;
        }

        .form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            width: 100%;
        }

        .form input[type="submit"]:hover {
            background-color: #45a049;
        }
</style>

<body>
    <div class="container">
        <div class="kata">
            <h2>Selamat Datang di Buku Tamu</h2>
        </div>

        <div class="form">
            <form action="index.php" method="post">
                <label for="name">Nama:</label><br>
                <input type="text" name="name" required><br><br>
                <label for="comment">Komentar:</label><br>
                <textarea name="comment" rows="5" required></textarea><br><br>
                <input type="submit" value="Kirim">
            </form>
        </div>
    </div>
</body>
</html>
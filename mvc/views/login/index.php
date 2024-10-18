<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Login</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/from_login.css">
</head>
<body>
<form action="<?= BASEURL; ?>index.php?url=login/auth" method="POST">
    <h2>Form Login</h2>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>
</body>
</html>
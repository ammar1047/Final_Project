<?php
session_start();
include '../fungsi/db.php'; // Koneksi ke database
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Pengguna - OTO TRACK</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Dashboard Admin</a>
        <div class="login-container">
            <a href="../login.html" class="btn btn-primary">Logout</a>
        </div>
 </nav>

    <div class="container">
        <h1>Hapus Pengguna</h1>
        <p>Apakah Anda yakin ingin menghapus pengguna ini?</p>
        <form action="process_delete_user.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <button type="submit" class="btn btn-danger">Hapus Pengguna</button>
            <a href="manage_users.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
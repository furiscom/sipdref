<?php include('../layouts/main.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Akun</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Create Akun</h1>
    <form action="store.php" method="post">
        <div>
            <label for="tahun">Tahun:</label>
            <input type="text" id="tahun" name="tahun" required>
        </div>
        <div>
            <label for="id_daerah">ID Daerah:</label>
            <input type="text" id="id_daerah" name="id_daerah" required>
        </div>
        <div>
            <label for="kode_akun">Kode Akun:</label>
            <input type="text" id="kode_akun" name="kode_akun" required>
        </div>
        <div>
            <label for="nama_akun">Nama Akun:</label>
            <input type="text" id="nama_akun" name="nama_akun" required>
        </div>
        <button type="submit">Create</button>
    </form>
</body>
</html>

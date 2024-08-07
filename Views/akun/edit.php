<?php include('../layouts/main.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Akun</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Edit Akun</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id_akun" value="<?php echo $akun['id_akun']; ?>">
        <div>
            <label for="tahun">Tahun:</label>
            <input type="text" id="tahun" name="tahun" value="<?php echo $akun['tahun']; ?>" required>
        </div>
        <div>
            <label for="id_daerah">ID Daerah:</label>
            <input type="text" id="id_daerah" name="id_daerah" value="<?php echo $akun['id_daerah']; ?>" required>
        </div>
        <div>
            <label for="kode_akun">Kode Akun:</label>
            <input type="text" id="kode_akun" name="kode_akun" value="<?php echo $akun['kode_akun']; ?>" required>
        </div>
        <div>
            <label for="nama_akun">Nama Akun:</label>
            <input type="text" id="nama_akun" name="nama_akun" value="<?php echo $akun['nama_akun']; ?>" required>
        </div>
        <button type="submit">Update</button

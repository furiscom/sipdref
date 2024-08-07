<?php include('../layouts/main.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Bidang Urusan</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Create Bidang Urusan</h1>
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
            <label for="id_urusan">ID Urusan:</label>
            <input type="text" id="id_urusan" name="id_urusan" required>
        </div>
        <div>
            <label for="kode_bidang_urusan">Kode Bidang Urusan:</label>
            <input type="text" id="kode_bidang_urusan" name="kode_bidang_urusan" required>
        </div>
        <div>
            <label for="nama_bidang_urusan">Nama Bidang Urusan:</label>
            <input type="text" id="nama_bidang_urusan" name="nama_bidang_urusan" required>
        </div>
        <button type="submit">Create</button>
    </form>
</body>
</html>

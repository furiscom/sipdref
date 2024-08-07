<?php include('../layouts/main.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bidang Urusan</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Edit Bidang Urusan</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id_bidang_urusan" value="<?php echo $bidang_urusan['id_bidang_urusan']; ?>">
        <div>
            <label for="tahun">Tahun:</label>
            <input type="text" id="tahun" name="tahun" value="<?php echo $bidang_urusan['tahun']; ?>" required>
        </div>
        <div>
            <label for="id_daerah">ID Daerah:</label>
            <input type="text" id="id_daerah" name="id_daerah" value="<?php echo $bidang_urusan['id_daerah']; ?>" required>
        </div>
        <div>
            <label for="id_urusan">ID Urusan:</label>
            <input type="text" id="id_urusan" name="id_urusan" value="<?php echo $bidang_urusan['id_urusan']; ?>" required>
        </div>
        <div>
            <label for="kode_bidang_urusan">Kode Bidang Urusan:</label>
            <input type="text" id="kode_bidang_urusan" name="kode_bidang_urusan" value="<?php echo $bidang_urusan['kode_bidang_urusan']; ?>" required>
        </div>
        <div>
            <label for="nama_bidang_urusan">Nama Bidang Urusan:</label>
            <input type="text" id="nama_bidang_urusan" name="nama_bidang_urusan" value="<?php echo $bidang_urusan['nama_bidang_urusan']; ?>" required>
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>

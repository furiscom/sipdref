<?php include('../layouts/main.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kegiatan</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Edit Kegiatan</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id_giat" value="<?php echo $kegiatan['id_giat']; ?>">
        <div>
            <label for="tahun">Tahun:</label>
            <input type="text" id="tahun" name="tahun" value="<?php echo $kegiatan['tahun']; ?>" required>
        </div>
        <div>
            <label for="id_daerah">ID Daerah:</label>
            <input type="text" id="id_daerah" name="id_daerah" value="<?php echo $kegiatan['id_daerah']; ?>" required>
        </div>
        <div>
            <label for="id_urusan">ID Urusan:</label>
            <input type="text" id="id_urusan" name="id_urusan" value="<?php echo $kegiatan['id_urusan']; ?>" required>
        </div>
        <div>
            <label for="id_bidang_urusan">ID Bidang Urusan:</label>
            <input type="text" id="id_bidang_urusan" name="id_bidang_urusan" value="<?php echo $kegiatan['id_bidang_urusan']; ?>" required>
        </div>
        <div>
            <label for="id_program">ID Program:</label>
            <input type="text" id="id_program" name="id_program" value="<?php echo $kegiatan['id_program']; ?>" required>
        </div>
        <div>
            <label for="kode_giat">Kode Kegiatan:</label>
            <input type="text" id="kode_giat" name="kode_giat" value="<?php echo $kegiatan['kode_giat']; ?>" required>
        </div>
        <div>
            <label for="nama_giat">Nama Kegiatan:</label>
            <input type="text" id="nama_giat" name="nama_giat" value="<?php echo $kegiatan['nama_giat']; ?>" required>
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>

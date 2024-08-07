<?php include('../layouts/main.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sub Kegiatan</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Edit Sub Kegiatan</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id_sub_giat" value="<?php echo $sub_kegiatan['id_sub_giat']; ?>">
        <div>
            <label for="tahun">Tahun:</label>
            <input type="text" id="tahun" name="tahun" value="<?php echo $sub_kegiatan['tahun']; ?>" required>
        </div>
        <div>
            <label for="id_urusan">ID Urusan:</label>
            <input type="text" id="id_urusan" name="id_urusan" value="<?php echo $sub_kegiatan['id_urusan']; ?>" required>
        </div>
        <div>
            <label for="id_bidang_urusan">ID Bidang Urusan:</label>
            <input type="text" id="id_bidang_urusan" name="id_bidang_urusan" value="<?php echo $sub_kegiatan['id_bidang_urusan']; ?>" required>
        </div>
        <div>
            <label for="id_program">ID Program:</label>
            <input type="text" id="id_program" name="id_program" value="<?php echo $sub_kegiatan['id_program']; ?>" required>
        </div>
        <div>
            <label for="id_giat">ID Kegiatan:</label>
            <input type="text" id="id_giat" name="id_giat" value="<?php echo $sub_kegiatan['id_giat']; ?>" required>
        </div>
        <div>
            <label for="kode_sub_giat">Kode Sub Kegiatan:</label>
            <input type="text" id="kode_sub_giat" name="kode_sub_giat" value="<?php echo $sub_kegiatan['kode_sub_giat']; ?>" required>
        </div>
        <div>
            <label for="nama_sub_giat">Nama Sub Kegiatan:</label>
            <input type="text" id="nama_sub_giat" name="nama_sub_giat" value="<?php echo $sub_kegiatan['nama_sub_giat']; ?>" required>
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>

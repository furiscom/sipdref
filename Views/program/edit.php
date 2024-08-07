<?php include('../layouts/main.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Program</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Edit Program</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id_program" value="<?php echo $program['id_program']; ?>">
        <div>
            <label for="tahun">Tahun:</label>
            <input type="text" id="tahun" name="tahun" value="<?php echo $program['tahun']; ?>" required>
        </div>
        <div>
            <label for="id_daerah">ID Daerah:</label>
            <input type="text" id="id_daerah" name="id_daerah" value="<?php echo $program['id_daerah']; ?>" required>
        </div>
        <div>
            <label for="id_urusan">ID Urusan:</label>
            <input type="text" id="id_urusan" name="id_urusan" value="<?php echo $program['id_urusan']; ?>" required>
        </div>
        <div>
            <label for="id_bidang_urusan">ID Bidang Urusan:</label>
            <input type="text" id="id_bidang_urusan" name="id_bidang_urusan" value="<?php echo $program['id_bidang_urusan']; ?>" required>
        </div>
        <div>
            <label for="kode_program">Kode Program:</label>
            <input type="text" id="kode_program" name="kode_program" value="<?php echo $program['kode_program']; ?>" required>
        </div>
        <div>
            <label for="nama_program">Nama Program:</label>
            <input type="text" id="nama_program" name="nama_program" value="<?php echo $program['nama_program']; ?>" required>
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>

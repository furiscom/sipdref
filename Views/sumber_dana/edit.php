<?php include('../layouts/main.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sumber Dana</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Edit Sumber Dana</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id_dana" value="<?php echo $sumber_dana['id_dana']; ?>">
        <div>
            <label for="kode_dana">Kode Dana:</label>
            <input type="text" id="kode_dana" name="kode_dana" value="<?php echo $sumber_dana['kode_dana']; ?>" required>
        </div>
        <div>
            <label for="nama_dana">Nama Dana:</label>
            <input type="text" id="nama_dana" name="nama_dana" value="<?php echo $sumber_dana['nama_dana']; ?>" required>
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>

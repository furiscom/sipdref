<?php include('../layouts/main.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Sumber Dana</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Create Sumber Dana</h1>
    <form action="store.php" method="post">
        <div>
            <label for="kode_dana">Kode Dana:</label>
            <input type="text" id="kode_dana" name="kode_dana" required>
        </div>
        <div>
            <label for="nama_dana">Nama Dana:</label>
            <input type="text" id="nama_dana" name="nama_dana" required>
        </div>
        <button type="submit">Create</button>
    </form>
</body>
</html>

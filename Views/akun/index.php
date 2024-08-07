<?php include('../layouts/main.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun List</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Akun List</h1>
    <a href="create.php">Add New Akun</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tahun</th>
                <th>ID Daerah</th>
                <th>Kode Akun</th>
                <th>Nama Akun</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($akun_list as $akun): ?>
            <tr>
                <td><?php echo $akun['id_akun']; ?></td>
                <td><?php echo $akun['tahun']; ?></td>
                <td><?php echo $akun['id_daerah']; ?></td>
                <td><?php echo $akun['kode_akun']; ?></td>
                <td><?php echo $akun['nama_akun']; ?></td>
                <td>
                    <a href="edit.php?id_akun=<?php echo $akun['id_akun']; ?>">Edit</a>
                    <a href="delete.php?id_akun=<?php echo $akun['id_akun']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

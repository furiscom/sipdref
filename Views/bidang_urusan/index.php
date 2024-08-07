<?php include('../layouts/main.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bidang Urusan List</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Bidang Urusan List</h1>
    <a href="create.php">Add New Bidang Urusan</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tahun</th>
                <th>ID Daerah</th>
                <th>ID Urusan</th>
                <th>Kode Bidang Urusan</th>
                <th>Nama Bidang Urusan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bidang_urusan_list as $bidang_urusan): ?>
            <tr>
                <td><?php echo $bidang_urusan['id_bidang_urusan']; ?></td>
                <td><?php echo $bidang_urusan['tahun']; ?></td>
                <td><?php echo $bidang_urusan['id_daerah']; ?></td>
                <td><?php echo $bidang_urusan['id_urusan']; ?></td>
                <td><?php echo $bidang_urusan['kode_bidang_urusan']; ?></td>
                <td><?php echo $bidang_urusan['nama_bidang_urusan']; ?></td>
                <td>
                    <a href="edit.php?id_bidang_urusan=<?php echo $bidang_urusan['id_bidang_urusan']; ?>">Edit</a>
                    <a href="delete.php?id_bidang_urusan=<?php echo $bidang_urusan['id_bidang_urusan']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

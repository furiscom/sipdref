<?php include('../layouts/main.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan List</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Kegiatan List</h1>
    <a href="create.php">Add New Kegiatan</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tahun</th>
                <th>ID Daerah</th>
                <th>ID Urusan</th>
                <th>ID Bidang Urusan</th>
                <th>ID Program</th>
                <th>Kode Kegiatan</th>
                <th>Nama Kegiatan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kegiatan_list as $kegiatan): ?>
            <tr>
                <td><?php echo $kegiatan['id_giat']; ?></td>
                <td><?php echo $kegiatan['tahun']; ?></td>
                <td><?php echo $kegiatan['id_daerah']; ?></td>
                <td><?php echo $kegiatan['id_urusan']; ?></td>
                <td><?php echo $kegiatan['id_bidang_urusan']; ?></td>
                <td><?php echo $kegiatan['id_program']; ?></td>
                <td><?php echo $kegiatan['kode_giat']; ?></td>
                <td><?php echo $kegiatan['nama_giat']; ?></td>
                <td>
                    <a href="edit.php?id_giat=<?php echo $kegiatan['id_giat']; ?>">Edit</a>
                    <a href="delete.php?id_giat=<?php echo $kegiatan['id_giat']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

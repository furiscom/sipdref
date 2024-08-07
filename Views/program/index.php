<?php include('../layouts/main.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program List</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Program List</h1>
    <a href="create.php">Add New Program</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tahun</th>
                <th>ID Daerah</th>
                <th>ID Urusan</th>
                <th>ID Bidang Urusan</th>
                <th>Kode Program</th>
                <th>Nama Program</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($program_list as $program): ?>
            <tr>
                <td><?php echo $program['id_program']; ?></td>
                <td><?php echo $program['tahun']; ?></td>
                <td><?php echo $program['id_daerah']; ?></td>
                <td><?php echo $program['id_urusan']; ?></td>
                <td><?php echo $program['id_bidang_urusan']; ?></td>
                <td><?php echo $program['kode_program']; ?></td>
                <td><?php echo $program['nama_program']; ?></td>
                <td>
                    <a href="edit.php?id_program=<?php echo $program['id_program']; ?>">Edit</a>
                    <a href="delete.php?id_program=<?php echo $program['id_program']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

<?php include('../layouts/main.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumber Dana List</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Sumber Dana List</h1>
    <a href="create.php">Add New Sumber Dana</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode Dana</th>
                <th>Nama Dana</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sumber_dana_list as $sumber_dana): ?>
            <tr>
                <td><?php echo $sumber_dana['id_dana']; ?></td>
                <td><?php echo $sumber_dana['kode_dana']; ?></td>
                <td><?php echo $sumber_dana['nama_dana']; ?></td>
                <td>
                    <a href="edit.php?id_dana=<?php echo $sumber_dana['id_dana']; ?>">Edit</a>
                    <a href="delete.php?id_dana=<?php echo $sumber_dana['id_dana']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

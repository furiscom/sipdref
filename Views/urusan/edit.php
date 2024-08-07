<?php
// Include header
include('../layouts/main.php');

// Database connection
include('../config/database.php');

// Fetch the urusan data to be edited
$id_urusan = $_GET['id_urusan'];
$query = "SELECT * FROM urusan WHERE id_urusan = $id_urusan";
$result = mysqli_query($conn, $query);
$urusan = mysqli_fetch_assoc($result);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_urusan = $_POST['id_urusan'];
    $tahun = $_POST['tahun'];
    $id_daerah = $_POST['id_daerah'];
    $kode_urusan = $_POST['kode_urusan'];
    $nama_urusan = $_POST['nama_urusan'];

    $update_query = "UPDATE urusan SET 
        tahun = '$tahun',
        id_daerah = '$id_daerah',
        kode_urusan = '$kode_urusan',
        nama_urusan = '$nama_urusan'
        WHERE id_urusan = $id_urusan";

    if (mysqli_query($conn, $update_query)) {
        echo "Data urusan berhasil diperbarui!";
    } else {
        echo "Error: " . $update_query . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Urusan</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Edit Urusan</h1>
    <form action="edit.php?id_urusan=<?php echo $id_urusan; ?>" method="post">
        <input type="hidden" name="id_urusan" value="<?php echo $urusan['id_urusan']; ?>">
        <div>
            <label for="tahun">Tahun:</label>
            <input type="text" id="tahun" name="tahun" value="<?php echo $urusan['tahun']; ?>">
        </div>
        <div>
            <label for="id_daerah">ID Daerah:</label>
            <input type="text" id="id_daerah" name="id_daerah" value="<?php echo $urusan['id_daerah']; ?>">
        </div>
        <div>
            <label for="kode_urusan">Kode Urusan:</label>
            <input type="text" id="kode_urusan" name="kode_urusan" value="<?php echo $urusan['kode_urusan']; ?>">
        </div>
        <div>
            <label for="nama_urusan">Nama Urusan:</label>
            <input type="text" id="nama_urusan" name="nama_urusan" value="<?php echo $urusan['nama_urusan']; ?>">
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>

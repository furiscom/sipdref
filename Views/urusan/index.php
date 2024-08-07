<h1>Daftar Urusan</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tahun</th>
            <th>Nama Urusan</th>
            <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($urusan as $u): ?>
            <tr>
                <td><?php echo $u->id_urusan; ?></td>
                <td><?php echo $u->tahun; ?></td>
                <td><?php echo $u->nama_urusan; ?></td>
                <!-- Tambahkan data lainnya sesuai kebutuhan -->
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

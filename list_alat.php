<?php 
include 'config.php';
include 'header.php';

$result = mysqli_query($conn, "SELECT * FROM alat ORDER BY id DESC");
?>

<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Daftar Alat</h4>
    </div>

    <div class="card-body">
        <a href="tambah_alat.php" class="btn btn-success mb-3">+ Tambah Alat</a>

        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nama Alat</th>
                    <th>Serial Number</th>
                    <th>Tanggal Kalibrasi</th>
                    <th>Tanggal Berikutnya</th>
                    <th width="180px">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['serial']; ?></td>
                    <td><?= $row['tgl_kal']; ?></td>
                    <td><?= $row['tgl_next']; ?></td>
                    <td>
                        <a href="edit_alat.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="hapus_alat.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin ingin menghapus?');">
                           Hapus
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php'; ?>

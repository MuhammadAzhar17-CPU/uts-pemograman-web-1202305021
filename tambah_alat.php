<?php include 'header.php'; include 'config.php'; ?>

<?php 
if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $serial = $_POST['serial'];
    $tgl_kal = $_POST['tgl_kal'];
    $tgl_next = $_POST['tgl_next'];

    mysqli_query($conn, "INSERT INTO alat (nama, serial, tgl_kal, tgl_next) 
                        VALUES ('$nama', '$serial', '$tgl_kal', '$tgl_next')");
    header("Location: list_alat.php");
}
?>

<div class="card shadow">
    <div class="card-header bg-success text-white">
        <h4 class="mb-0">Tambah Alat</h4>
    </div>

    <div class="card-body">
        <form method="POST">

            <div class="mb-3">
                <label class="form-label">Nama Alat</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Serial Number</label>
                <input type="text" name="serial" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Kalibrasi</label>
                <input type="date" name="tgl_kal" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Berikutnya</label>
                <input type="date" name="tgl_next" class="form-control" required>
            </div>

            <button type="submit" name="save" class="btn btn-success">Simpan</button>
            <a href="list_alat.php" class="btn btn-secondary">Kembali</a>

        </form>
    </div>
</div>

<?php include 'footer.php'; ?>

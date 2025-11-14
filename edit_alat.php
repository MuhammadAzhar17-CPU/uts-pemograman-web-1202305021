<?php 
include 'header.php'; 
include 'config.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM alat WHERE id=$id"));

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $serial = $_POST['serial'];
    $tgl_kal = $_POST['tgl_kal'];
    $tgl_next = $_POST['tgl_next'];

    mysqli_query($conn, "UPDATE alat SET 
        nama='$nama',
        serial='$serial',
        tgl_kal='$tgl_kal',
        tgl_next='$tgl_next'
        WHERE id=$id");

    header("Location: list_alat.php");
}
?>

<div class="card shadow">
    <div class="card-header bg-warning text-dark">
        <h4 class="mb-0">Edit Alat</h4>
    </div>

    <div class="card-body">
        <form method="POST">

            <div class="mb-3">
                <label class="form-label">Nama Alat</label>
                <input type="text" name="nama" value="<?= $data['nama']; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Serial Number</label>
                <input type="text" name="serial" value="<?= $data['serial']; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Kalibrasi</label>
                <input type="date" name="tgl_kal" value="<?= $data['tgl_kal']; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Berikutnya</label>
                <input type="date" name="tgl_next" value="<?= $data['tgl_next']; ?>" class="form-control" required>
            </div>

            <button type="submit" name="update" class="btn btn-warning">Update</button>
            <a href="list_alat.php" class="btn btn-secondary">Kembali</a>

        </form>
    </div>
</div>

<?php include 'footer.php'; ?>

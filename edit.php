<?php
include 'header.php';
include 'koneksi.php';

if (!isset($_SESSION['id'])) { header("Location: login.php"); exit(); }

$no_id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM mobil_002 WHERE no_id='$no_id'");
$data  = mysqli_fetch_assoc($query);

if (isset($_POST['update'])) {
    $nomor_kendaraan = $_POST['nomor_kendaraan'];
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $pemilik         = $_POST['pemilik'];
    $tahun_pembuatan = $_POST['tahun_pembuatan'];

    // Query UPDATE data berdasarkan no_id
    $update = "UPDATE mobil_002 SET 
                nomor_kendaraan='$nomor_kendaraan', 
                jenis_kendaraan='$jenis_kendaraan', 
                pemilik='$pemilik', 
                tahun_pembuatan='$tahun_pembuatan' 
               WHERE no_id='$no_id'";
    
    if (mysqli_query($koneksi, $update)) {
        header("Location: index.php");
    }
}
?>

<div class="card col-md-6 mx-auto p-4 shadow-sm">
    <h4>Edit Data Kendaraan</h4>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Nomor Kendaraan</label>
            <input type="text" name="nomor_kendaraan" class="form-control" value="<?= $data['nomor_kendaraan']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Kendaraan</label>
            <select name="jenis_kendaraan" class="form-select" required>
                <?php 
                $opsi = ['Sedan', 'Pickup', 'Truk', 'Bemo'];
                foreach ($opsi as $val) {
                    $selected = ($data['jenis_kendaraan'] == $val) ? 'selected' : '';
                    echo "<option value='$val' $selected>$val</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Pemilik</label>
            <input type="text" name="pemilik" class="form-control" value="<?= $data['pemilik']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun Pembuatan</label>
            <input type="text" name="tahun_pembuatan" class="form-control" value="<?= $data['tahun_pembuatan']; ?>" required>
        </div>
        <button type="submit" name="update" class="btn btn-warning">Update</button>
        <a href="index.php" class="btn btn-secondary">Batal</a>
    </form>
</div>

<?php include 'footer.php'; ?>
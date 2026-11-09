<?php
include 'header.php';
include 'koneksi.php';

if (!isset($_SESSION['id'])) { header("Location: login.php"); exit(); }

if (isset($_POST['simpan'])) {
    $nomor_kendaraan = $_POST['nomor_kendaraan'];
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $pemilik         = $_POST['pemilik'];
    $tahun_pembuatan = $_POST['tahun_pembuatan'];

    // Query INSERT data ke tabel mobil
    $query = "INSERT INTO mobil_002 (nomor_kendaraan, jenis_kendaraan, pemilik, tahun_pembuatan) 
              VALUES ('$nomor_kendaraan', '$jenis_kendaraan', '$pemilik', '$tahun_pembuatan')";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
    }
}
?>

<div class="card col-md-6 mx-auto p-4 shadow-sm">
    <h4>Tambah Data Kendaraan</h4>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Nomor Kendaraan (Plat)</label>
            <input type="text" name="nomor_kendaraan" class="form-control" maxlength="12" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Kendaraan</label>
            <select name="jenis_kendaraan" class="form-select" required>
                <option value="Sedan">Sedan</option>
                <option value="Pickup">Pickup</option>
                <option value="Truk">Truk</option>
                <option value="Bemo">Bemo</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Pemilik</label>
            <input type="text" name="pemilik" class="form-control" maxlength="50" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun Pembuatan</label>
            <input type="text" name="tahun_pembuatan" class="form-control" maxlength="4" required placeholder="2022">
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Batal</a>
    </form>
</div>

<?php include 'footer.php'; ?>
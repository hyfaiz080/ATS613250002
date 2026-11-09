<?php
include 'header.php';
include 'koneksi.php';

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$query  = "SELECT * FROM mobil_002 ORDER BY no_id DESC";
$result = mysqli_query($koneksi, $query);
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h3 class="fw-bold mb-0">Daftar Kendaraan</h3>
        <small class="text-muted">Kelola data rental mobil aktif</small>
    </div>
    <a href="tambah.php" class="btn btn-neon-success px-4 py-2">+ Tambah Kendaraan</a>
</div>

<div class="glass-card p-3">
    <div class="table-responsive">
        <table class="table table-custom mb-0">
            <thead>
                <tr>
                    <th>No ID</th>
                    <th>Nomor Kendaraan</th>
                    <th>Jenis Kendaraan</th>
                    <th>Pemilik</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><span class="text-muted">#<?= $row['no_id']; ?></span></td>
                    <td class="fw-bold text-info"><?= $row['nomor_kendaraan']; ?></td>
                    <td>
                        <span class="badge bg-purple-subtle text-purple px-3 py-2 border border-purple" style="background: rgba(168, 85, 247, 0.2); color: #c084fc;">
                            <?= $row['jenis_kendaraan']; ?>
                        </span>
                    </td>
                    <td><?= $row['pemilik']; ?></td>
                    <td><?= $row['tahun_pembuatan']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['no_id']; ?>" class="btn btn-warning btn-sm rounded-pill px-3">Edit</a>
                        <a href="hapus.php?id=<?= $row['no_id']; ?>" class="btn btn-danger btn-sm rounded-pill px-3" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php'; ?>
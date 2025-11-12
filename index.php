<?php
if (isset($_POST['hitung'])) {
    $nama = $_POST['nama'];
    $paket = $_POST['paket'];
    $tanggal = $_POST['tanggal'];
    $durasi = $_POST['durasi'];

    // Harga per paket
    $harga_paket = [
        1 => 5000,
        2 => 8000,
        3 => 10000,
        4 => 13000
    ];

    // Tambahan harga & durasi waktu keluar
    $durasi_info = [
        1 => ['tambah_harga' => 0, 'tambah_hari' => 2, 'nama' => 'Reguler'],
        2 => ['tambah_harga' => 3000, 'tambah_hari' => 1, 'nama' => 'Kilat'],
        3 => ['tambah_harga' => 5000, 'tambah_hari' => 0, 'nama' => '8 Jam']
    ];

    // Nama paket laundry
    $nama_paket = [
        1 => 'Cuci',
        2 => 'Cuci + Setrika',
        3 => 'Cuci Selimut/Seprai',
        4 => 'Cuci + Setrika Selimut/Seprai'
    ];

    // Hitung total harga
    $total = $harga_paket[$paket] + $durasi_info[$durasi]['tambah_harga'];

    // Hitung tanggal keluar
    $tgl_keluar = date('Y-m-d', strtotime($tanggal . ' + ' . $durasi_info[$durasi]['tambah_hari'] . ' days'));
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry</title>
    <link href="bootstrap5/css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <div class="container mt-5 flex-grow-1">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-info text-dark text-center">
                <h4>Laundry</h4>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="" class="mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="fw-bold">INPUT PENCUCIAN</h5>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="paket" class="form-label">Pilih Paket</label>
                                <select id="paket" name="paket" class="form-control" required>
                                    <option value="" disabled selected hidden>--pilih--</option>
                                    <option value="1">Cuci</option>
                                    <option value="2">Cuci + Setrika</option>
                                    <option value="3">Cuci Selimut/Seprai</option>
                                    <option value="4">Cuci + Setrika Selimut/Seprai</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tgl" class="form-label">Tanggal Masuk</label>
                                <input type="date" id="tgl" name="tanggal" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="durasi" class="form-label">Durasi</label>
                                <select id="durasi" name="durasi" class="form-control" required>
                                    <option value="" disabled selected hidden>--pilih--</option>
                                    <option value="1">Reguler</option>
                                    <option value="2">Kilat</option>
                                    <option value="3">8 Jam</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" name="hitung" class="btn btn-info text-dark fw-bold px-5">KIRIM</button>
                    </div>
                </form>

                <?php if (isset($total)): ?>
                <div class="alert alert-success mt-4">
                    <h5 class="fw-bold">Data Transaksi</h5>
                    <p><strong>Nama:</strong> <?= htmlspecialchars($nama) ?></p>
                    <p><strong>Paket Laundry:</strong> <?= $nama_paket[$paket] ?></p>
                    <p><strong>Tanggal Masuk:</strong> <?= $tanggal ?></p>
                    <p><strong>Tanggal Keluar:</strong> <?= $tgl_keluar ?></p>
                    <p><strong>Total Harga:</strong> Rp<?= number_format($total, 0, ',', '.') ?></p>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <footer class="bg-info text-dark text-center py-3 mt-3">
        <small>202404011 - KHAIKAL IKSANUDDIN</small>
    </footer>

    <script src="bootstrap5/js/bootstrap.js"></script>
</body>
</html>

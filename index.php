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
                <form method="POST" class="mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="fw-bold">INPUT PENCUCIAN</h5>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="number" name="nama" class="form-control" placeholder="0" required>
                            </div>
                            <div class="mb-3">
                                <label for="paket" class="form-label">Pilih Paket</label>
                                <select id="paket" name="paket" class="form-control" placeholder="--pilih--" required>
                                    <option value="" disabled selected hidden >--pilih--</option>
                                    <option value=1>Cuci</option>
                                    <option value=2>Cuci Setrika</option>
                                    <option value=3>Cuci Selimut/Seprai</option>
                                    <option value=4>Cuci Setrika Selimut/Seprai</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tgl" class="form-label">Pilih Tanggal Masuk</label>
                                <input type="date" id="tgl" class="form-control" placeholder="MM/DD/YYYY">
                            </div>
                            <div class="mb-3">
                                <label for="durasi" class="form-label">Pilih lama durasi</label>
                                <select id="durasi" name="durasi" class="form-control" required>
                                    <option value="" disabled selected hidden >--pilih--</option>
                                    <option value=1>Reguler</option>
                                    <option value=2>Kilat</option>
                                    <option value=3>8 Jam</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" name="hitung" class="btn btn-info text-dark w-100 fw-bold">KIRIM</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="bg-info text-dark text-center py-3 mt-3">
        <small>202404011 - KHAIKAL IKSANUDDIN</small>
    </footer>
satu
    <script src="bootstrap5/js/bootstrap.js"></script>
</body>

</html>
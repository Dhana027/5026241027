<!DOCTYPE html>
<html lang="en">

<head>
    <title>MyITS Medical Profession - 5026241027 - Pradhana Tafindya Putra</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .badge-pill {
            font-size: 0.9em;
        }

        h2,
        h4 {
            font-weight: 600;
            color: #2c3e50;
        }
    </style>
</head>

<body>
    <div class="container mt-4 mb-5">

        <div class="row mb-4">
            <div class="col-md-6">
                <h2 class="mb-0 font-weight-bold">Dashboard Dokter Muda</h2>
                <h4 class="mb-0 text-dark">Pradhana Tafindya Putra</h4>
                <h4 class="text-muted">5026241027</h4>
            </div>
            <div class="col-md-6 text-right">
                <button type="button" class="btn btn-primary">
                    Pesan Dokdiknis <span class="badge badge-light">5</span>
                </button>
                <button type="button" class="btn btn-danger ml-1">
                    Revisi EMR <span class="badge badge-light">2</span>
                </button>
            </div>
        </div>

        <hr>

        <h4 class="mb-4 font-weight-bold">Papan Informasi Kegiatan</h4>
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5>Stase Ilmu Penyakit Dalam</h5>
                        <span class="badge badge-primary badge-pill">Diajukan</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5>Jadwal Jaga Malam IGD</h5>
                        <span class="badge badge-danger badge-pill">Ditolak</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5>Logbook Kompetensi Penyakit</h5>
                        <span class="badge badge-warning badge-pill">Revisi</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5>Portofolio Kasus Klinis</h5>
                        <span class="badge badge-secondary badge-pill">Draft</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5>Ujian Akhir Stase (OSCE)</h5>
                        <span class="badge badge-info badge-pill">Jadwal Baru</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5>Pengumpulan Logbook</h5>
                        <span class="badge badge-success badge-pill">Disetujui</span>
                    </div>
                </div>
            </div>

        </div>

        <hr>

        <h4 class="mb-4 font-weight-bold">Panduan Sistem</h4>
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="mb-4 font-weight-bold">Keterangan Status EMR</h5>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <span class="badge badge-secondary" style="width: 80px;">Draft</span>
                                    <span class="text-muted ml-2">Belum diajukan</span>
                                </div>
                                <div class="mb-2">
                                    <span class="badge badge-primary" style="width: 80px;   ">Diajukan</span>
                                    <span class="text-muted ml-2">Menunggu Dokdiknis</span>
                                </div>
                                <div class="mb-2">
                                    <span class="badge badge-warning" style="width: 80px;">Revisi</span>
                                    <span class="text-muted ml-2">Perlu perbaikan</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-2">
                                    <span class="badge badge-success" style="width: 80px;">Disetujui</span>
                                    <span class="text-muted ml-2">Telah divalidasi</span>
                                </div>
                                <div class="mb-2">
                                    <span class="badge badge-danger" style="width: 80px;">Ditolak</span>
                                    <span class="text-muted ml-2">Ajuan tidak sah</span>
                                </div>
                                <div class="mb-2">
                                    <span class="badge badge-info" style="width: 80px;">Konsultasi</span>
                                    <span class="text-muted ml-2">Butuh diskusi lanjut</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
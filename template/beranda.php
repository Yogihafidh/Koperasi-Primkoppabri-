<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/query.css">
    <link rel="stylesheet" href="../assets/css/helper.css">
</head>

<body>
    <div class="container">
        <!-- SIDEBAR -->
        <?php include 'sidebar.php'; ?>

        <!-- CONTENT -->
        <main class="content">
            <p class="mb-4rm hallo-beranda">Hallo!, Selamat datang Yogi</p>
            <h3 class="fourth-heading mb-2rm">Ringkasan</h3>
            <div class="beranda-content">
                <!-- GRAFIK TRANSAKSI -->
                <section class="card">
                    <p>GRAFIK TRANSAKSI</p>
                </section>

                <!-- TOTAL SUMMARY -->
                <section class="card">
                    <h4 class="fourth-heading">Total</h4>
                    <p class="date">Juli 01, 2023 - Agust 31, 2023</p>

                    <div class="tota-summary">
                        <div>
                            <p class="nominal">Rp 30.4jt</p>
                            <p class="keterangan">Pinjaman</p>
                        </div>
                        <div>
                            <p class="nominal">Rp 8.6jt</p>
                            <p class="keterangan">Angsur</p>
                        </div>
                        <div>
                            <p class="nominal">Rp 5.6jt</p>
                            <p class="keterangan">Ambil</p>
                        </div>
                        <div>
                            <p class="nominal">Rp 7.4jt</p>
                            <p class="keterangan">Tabungan</p>
                        </div>
                    </div>
                </section>

                <!-- GRAFIK PEMINJAMAN -->
                <section class="card">
                    <p>GRAFIK PEMINJAMAN</p>
                </section>

                <!-- TRANSAKSI -->
                <section class="card">
                    <h4 class="fourth-heading mb-2rm">Transaksi baru baru ini</h4>

                    <div class="row-date">
                        <p>5 Agustus, 2023</p>
                        <div class="row-transaksi">
                            <div class="">
                                <div class="nama">Aji</div>
                                <div class="keterangan-arus-kas">Incoming</div>
                            </div>
                            <div class="time-transaksi">10:42 PM</div>
                            <div class="nominal-transaksi">+ $409.00</div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

</body>

</html>
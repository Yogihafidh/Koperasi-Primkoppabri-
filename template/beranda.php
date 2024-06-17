<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/general.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/query.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/helper.css?v=<?php echo time(); ?>">

</head>

<body>
    <div class="container">
        <!-- SIDEBAR -->
        <?php include 'sidebar.php'; ?>

        <!-- CONTENT -->
        <main class="content">

            <?php
            @ob_start();
            session_start();
            // Cek apakah pengguna sudah masuk
            if (isset($_SESSION['email'])) {
                echo '<p class="mb-4rm hallo-beranda">Hallo! Selamat datang, ' . htmlspecialchars($_SESSION['nama_lengkap']) . '</p>';
            }
            ?>

            <!-- <p class="mb-4rm hallo-beranda">Hallo!, Selamat datang </p> -->
            <h3 class="fourth-heading mb-2rm">Ringkasan</h3>

            <div class="beranda-content">
                <!-- TOTAL SUMMARY -->
                <section class="card total-beranda">
                    <h4 class="fourth-heading">Total</h4>
                    <p class="date-beranda">Juli 01, 2023 - Agust 31, 2023</p>

                    <div class="total-summary">
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
                    <p>GRAFIK TRANSAKSI</p>
                </section>

                <!-- GRAFIK PEMINJAMAN -->
                <section class="card">
                    <p>GRAFIK PEMINJAMAN</p>
                </section>

                <!-- TRANSAKSI RICENT -->
                <section class="card ricent-transaksi">
                    <h4 class="fourth-heading mb-2rm">Transaksi baru baru ini</h4>

                    <div class="row-date">
                        <p>5 Agustus, 2023</p>
                        <div class="row-transaksi">
                            <div class="nama-beranda-box">
                                <svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path d="M29.999,3.998C29.999,3.468 29.788,2.959 29.413,2.584C29.038,2.209 28.53,1.998 27.999,1.998L3.999,1.998C3.469,1.998 2.96,2.209 2.585,2.584C2.21,2.959 1.999,3.468 1.999,3.998L1.999,27.998C1.999,28.529 2.21,29.038 2.585,29.413C2.96,29.788 3.469,29.998 3.999,29.998L27.999,29.998C28.53,29.998 29.038,29.788 29.413,29.413C29.788,29.038 29.999,28.529 29.999,27.998L29.999,3.998ZM-0.001,3.998C-0.001,2.937 0.421,1.92 1.171,1.17C1.921,0.42 2.938,-0.002 3.999,-0.002L27.999,-0.002C29.06,-0.002 30.077,0.42 30.828,1.17C31.578,1.92 31.999,2.937 31.999,3.998L31.999,27.998C31.999,29.059 31.578,30.077 30.828,30.827C30.077,31.577 29.06,31.998 27.999,31.998L3.999,31.998C2.938,31.998 1.921,31.577 1.171,30.827C0.421,30.077 -0.001,29.059 -0.001,27.998L-0.001,3.998ZM11.707,21.604C11.52,21.792 11.265,21.898 11,21.898C10.735,21.898 10.48,21.793 10.292,21.605C10.104,21.418 9.999,21.163 9.999,20.898C9.999,20.633 10.104,20.378 10.291,20.19L18.485,11.998L12.949,11.998C12.684,11.998 12.43,11.893 12.242,11.705C12.055,11.518 11.949,11.264 11.949,10.998C11.949,10.733 12.055,10.479 12.242,10.291C12.43,10.104 12.684,9.998 12.949,9.998L20.899,9.998C21.164,9.998 21.419,10.104 21.606,10.291C21.794,10.479 21.899,10.733 21.899,10.998L21.899,18.948C21.899,19.214 21.794,19.468 21.606,19.655C21.419,19.843 21.164,19.948 20.899,19.948C20.634,19.948 20.38,19.843 20.192,19.655C20.005,19.468 19.899,19.214 19.899,18.948L19.899,13.412L11.707,21.604L11.707,21.604Z" clip-rule="evenodd" fill-rule="evenodd" fill="#DC3545" />
                                </svg>
                                <div>
                                    <div class="nama-nasabah-beranda">Nama nasabah</div>
                                    <div class="keterangan-arus-kas">Outgoing</div>
                                </div>
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
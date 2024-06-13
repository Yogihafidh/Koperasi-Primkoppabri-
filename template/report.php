<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/query.css">
    <link rel="stylesheet" href="assets/css/helper.css">
</head>

<body>
    <div class="container">
        <!-- SIDEBAR -->
        <?php include 'sidebar.php'; ?>

        <main class="content reports">
            <!-- REPORTS CARD -->
            <div class="report-card">
                <h2 class="fourth-heading mb-2rm">Transaksi minggu ini</h2>
            </div>

            <!-- REPORT DOWNLOAD -->
            <div class="report-card">
                <h2 class="fourth-heading">Reports for Last Month</h2>
                <p>From 01 Jul -31 Jul</p>
                <button class="download-pdf">Download PDF</button>
            </div>

            <!-- REPORTS CARD -->
            <div class="report-card">
                <h2 class="fourth-heading mb-2rm">Cash at the End of the Month</h2>
                <select id="year-select">
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                </select>
            </div>

            <!-- REPORTS CARD -->
            <div class="report-card">
                <h2 class="fourth-heading mb-2rm">Income Statement</h2>
            </div>

            <!-- REPORTS TABEL -->
            <div class="tabel-laporan">
                <h2 class="fourth-heading mb-1rm">Pencatan Keuangan</h2>
                <section class="tabel-transaksi tabel-laporan">
                    <table style="width:100%">
                        <thead>
                            <tr>
                                <th style="width:30%">Nama Karyawan</th>
                                <th>Storing</th>
                                <th>Drop</th>
                                <th>Tunai</th>
                                <th>Saldo Akhir</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>

                        <tbody class="tbody">
                            <tr>
                                <td>Vela Anguliar</td>
                                <td>FEAC389</td>
                                <td>$8,926</td>
                                <td>$0.00</td>
                                <td>$8,926</td>
                                <td>10/06/2024</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </main>
    </div>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

</body>

</html>
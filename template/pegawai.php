<?php
session_start();
include 'config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['user_id'];
    $role = $_POST['role'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE user SET role_id='$role', nama_lengkap='$nama_lengkap', no_hp='$no_hp', alamat='$alamat' WHERE user_id='$id'";

    if ($koneksi->query($query)) {
        header('location: page.php?mod=pegawai');
        exit;
    } else {
        echo "Error executing query: " . $koneksi->error;
    }
}
?>

<?php
session_start();
include 'config/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM user WHERE user_id = $id";

    if ($koneksi->query($query)) {
        header('location: page.php?mod=pegawai');
        exit;
    } else {
        echo "Error executing query: " . $koneksi->error;
    }
}

//$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawai</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/general.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/query.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/helper.css?v=<?php echo time(); ?>">

    <!-- JAVASCRIPT -->
    <script defer src="assets/javascript/pegawai.js?v=<?php echo time(); ?>"></script>
</head>

<body>
    <div class="container">
        <!-- SIDEBAR -->
        <?php include 'sidebar.php'; ?>

        <!-- CONTENT -->
        <main class="content">
            <h3 class="fourth-heading mb-2rm">Pegawai</h3>

            <!-- NAVIGASI -->
            <nav class="navigation">
                <div class="form-input">
                    <div class="icon-placeholder">
                        <svg width="16" height="16" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path d="M22.83,20.688C24.766,18.045 25.634,14.769 25.258,11.514C24.883,8.26 23.292,5.267 20.805,3.134C18.318,1.002 15.117,-0.113 11.843,0.013C8.569,0.14 5.464,1.497 3.148,3.815C0.832,6.132 -0.523,9.239 -0.647,12.512C-0.771,15.786 0.346,18.986 2.48,21.472C4.615,23.958 7.609,25.546 10.864,25.919C14.119,26.292 17.394,25.423 20.036,23.484L20.034,23.484C20.094,23.564 20.158,23.64 20.23,23.714L27.93,31.414C28.305,31.789 28.813,32 29.344,32C29.874,32.001 30.383,31.79 30.759,31.415C31.134,31.04 31.345,30.531 31.345,30.001C31.345,29.47 31.135,28.961 30.76,28.586L23.06,20.886C22.988,20.814 22.911,20.747 22.83,20.686L22.83,20.688ZM23.346,13C23.346,14.445 23.061,15.875 22.508,17.21C21.955,18.544 21.145,19.757 20.124,20.778C19.102,21.8 17.89,22.61 16.555,23.163C15.22,23.716 13.79,24 12.346,24C10.901,24 9.471,23.716 8.136,23.163C6.801,22.61 5.589,21.8 4.567,20.778C3.546,19.757 2.736,18.544 2.183,17.21C1.63,15.875 1.346,14.445 1.346,13C1.346,10.083 2.504,7.285 4.567,5.222C6.63,3.159 9.428,2 12.346,2C15.263,2 18.061,3.159 20.124,5.222C22.187,7.285 23.346,10.083 23.346,13L23.346,13Z" fill="#212529" />
                        </svg>
                    </div>
                    <input type="text" class="search-input" placeholder="Search">
                </div>
            </nav>

            <!-- NASABAH -->
            <section class="nasabah-section">
                <p class="daftar-nasabah-heading">Daftar Pegawai </p>
                <hr class="mb-1rm">

                <div class="nasabah-list">
                    <?php
                    include 'config/koneksi.php';
                    // Menggunakan query sql agar menampilkan data produk dan join kedalam tabel user agar mendapatkan siapa pemilik produk
                    $query = "SELECT * FROM user LEFT JOIN role ON role.role_id = user.role_id";
                    $datas = $koneksi->query($query);
                    foreach ($datas as $data) :
                    ?>
                        <div class="nasabah">
                            <div class="left-box-nasabah">
                                <p class="nama-nasabah"><?= $data['nama_lengkap'] ?></p>
                                <p>No Id: <?= $data['user_id'] ?></p>
                                <p><?= $data['alamat'] ?></p>
                            </div>
                            <div class="right-box-nasabah">
                                <div>
                                    <button class="btn-update-data btn-update-data-nasabah" type="button" data-target="#editDataModal<?= $data['user_id'] ?>">
                                        <svg width="26" height="18" viewBox="0 0 44 36" fill="none" class="icon mr-1rm edit-btn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path d="M29.616,24.258C29.469,24.399 29.469,24.539 29.469,24.68L29.469,32.625L3.536,32.625L3.536,7.875L21.291,7.875C21.439,7.875 21.586,7.875 21.733,7.734L24.091,5.484C24.459,5.133 24.165,4.5 23.649,4.5L3.536,4.5C1.547,4.5 0,6.047 0,7.875L0,32.625C0,34.524 1.547,36 3.536,36L29.469,36C31.385,36 33.005,34.524 33.005,32.625L33.005,22.43C33.005,21.938 32.342,21.656 31.974,22.008L29.616,24.258ZM41.109,10.125C42.804,8.508 42.804,5.906 41.109,4.289L37.941,1.266C36.247,-0.352 33.521,-0.352 31.827,1.266L12.524,19.687L11.788,26.086C11.567,27.914 13.187,29.461 15.103,29.25L21.807,28.547L41.109,10.125ZM33.889,12.234L20.186,25.313L15.324,25.875L15.913,21.234L29.616,8.156L33.889,12.234ZM38.604,6.68C38.973,6.961 38.973,7.383 38.678,7.734L36.394,9.914L32.121,5.766L34.331,3.656C34.626,3.305 35.142,3.305 35.437,3.656L38.604,6.68Z" fill="#828894" />
                                        </svg>
                                    </button>
                                    <button class="btn-delete-data" type="button">
                                        <svg width="18" height="18" viewBox="0 0 34 36" fill="none" class="icon delete-btn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path d="M19.376,29.25L21.144,29.25C21.586,29.25 22.028,28.898 22.028,28.406L22.028,13.219C22.028,12.797 21.586,12.375 21.144,12.375L19.376,12.375C18.86,12.375 18.492,12.797 18.492,13.219L18.492,28.406C18.492,28.898 18.86,29.25 19.376,29.25ZM31.458,5.625L25.344,5.625L22.839,1.688C22.249,0.773 20.923,0 19.818,0L12.377,0C11.272,0 9.946,0.773 9.357,1.688L6.852,5.625L0.811,5.625C0.148,5.625 -0.368,6.188 -0.368,6.75L-0.368,7.875C-0.368,8.508 0.148,9 0.811,9L1.989,9L1.989,32.625C1.989,34.523 3.536,36 5.526,36L26.743,36C28.659,36 30.28,34.523 30.28,32.625L30.28,9L31.458,9C32.048,9 32.637,8.508 32.637,7.875L32.637,6.75C32.637,6.188 32.048,5.625 31.458,5.625ZM12.23,3.586C12.304,3.516 12.525,3.375 12.598,3.375L12.672,3.375L19.597,3.375C19.671,3.375 19.892,3.516 19.965,3.586L21.218,5.625L10.977,5.625L12.23,3.586ZM26.743,32.625L5.526,32.625L5.526,9L26.743,9L26.743,32.625ZM11.125,29.25L12.893,29.25C13.335,29.25 13.777,28.898 13.777,28.406L13.777,13.219C13.777,12.797 13.335,12.375 12.893,12.375L11.125,12.375C10.609,12.375 10.241,12.797 10.241,13.219L10.241,28.406C10.241,28.898 10.609,29.25 11.125,29.25Z" fill="#828894" />
                                        </svg>
                                    </button>
                                </div>
                                <p>Posisi : <?= $data['nama'] ?></p>
                                <p>Phone no : <?= $data['no_hp'] ?></p>
                            </div>
                        </div>

                        <!-- MODAL EDIT DATA PEGAWAI -->
                        <section class="error modal modal-edit-data-pegawai" id="editDataModal<?= $data['user_id'] ?>">
                            <svg class="btn-close-pegawai btn-close" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path fill="none" stroke="black" stroke-linecap=" round" stroke-linejoin="round" stroke-width="1.5" d="M6.758 17.243L12.001 12m5.243-5.243L12 12m0 0L6.758 6.757M12.001 12l5.243 5.243" />
                            </svg>
                            <p class="add-nasabah-heading">Edit Data Pegawai</p>
                            <form action="" method="POST">
                                <input type="hidden" name="user_id" value="<?= $data['user_id'] ?>">
                                <!-- Nama Lengkap -->
                                <div class="form-input">
                                    <div class="icon-placeholder">
                                        <svg data-dismiss="modal" aria-label="Close" width="14" height="16" viewBox="0 0 36 38" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path d="M9,9C9,13.962 13.038,18 18,18C22.962,18 27,13.962 27,9C27,4.038 22.962,0 18,0C13.038,0 9,4.038 9,9ZM34,38L36,38L36,36C36,28.282 29.718,22 22,22L14,22C6.28,22 0,28.282 0,36L0,38L34,38Z" fill="#333333" />
                                        </svg>
                                    </div>
                                    <input type="text" placeholder="Full Name" name="nama_lengkap" required type="text" value="<?= $data['nama_lengkap'] ?>">
                                </div>

                                <!-- Nomer Hp -->
                                <div class="form-input">
                                    <div class="icon-placeholder">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                            <path fill="black" d="m19.23 15.26l-2.54-.29a1.99 1.99 0 0 0-1.64.57l-1.84 1.84a15.045 15.045 0 0 1-6.59-6.59l1.85-1.85c.43-.43.64-1.03.57-1.64l-.29-2.52a2.001 2.001 0 0 0-1.99-1.77H5.03c-1.13 0-2.07.94-2 2.07c.53 8.54 7.36 15.36 15.89 15.89c1.13.07 2.07-.87 2.07-2v-1.73c.01-1.01-.75-1.86-1.76-1.98" />
                                        </svg>
                                    </div>
                                    <input type="text" placeholder="Nomer HP" name="no_hp" required type="text" value="<?= $data['no_hp'] ?>">
                                </div>

                                <!-- Alamat -->
                                <div class="form-input">
                                    <div class="icon-placeholder">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 24 24">
                                            <path fill="black" fill-rule="evenodd" d="M7 2a2 2 0 0 0-2 2v1a1 1 0 0 0 0 2v1a1 1 0 0 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm3 8a3 3 0 1 1 6 0a3 3 0 0 1-6 0m-1 7a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3a1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" placeholder="Alamat" name="alamat" required type="text" value="<?= $data['alamat'] ?>">
                                </div>

                                <!-- Posisi -->
                                <div class="form-input">
                                    <div class="icon-placeholder">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                            <path fill="black" d="M4 21q-.825 0-1.412-.587T2 19V8q0-.825.588-1.412T4 6h4V4q0-.825.588-1.412T10 2h4q.825 0 1.413.588T16 4v2h4q.825 0 1.413.588T22 8v11q0 .825-.587 1.413T20 21zm6-15h4V4h-4z" />
                                        </svg>
                                    </div>
                                    <select name="role">
                                        <option value="" disabled selected> Pilih Posisi Anda </option>
                                        <option value="1" <?php if ($data['role_id'] == "1") echo "selected"; ?>> Kasir
                                        </option>
                                        <option value="2" <?php if ($data['role_id'] == "2") echo "selected"; ?>> Pegawai
                                        </option>
                                        <option value="3" <?php if ($data['role_id'] == "3") echo "selected"; ?>> Pimpinan
                                        </option>
                                    </select>
                                </div>
                                <button class="btn btn-login-registrasi" type="submit">Edit Data</button>
                            </form>
                        </section>
                    <?php endforeach ?>
                </div>
            </section>
        </main>
    </div>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>


</body>

</body>

</html>
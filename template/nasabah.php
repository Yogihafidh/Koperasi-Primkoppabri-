<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasabah</title>

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

        <!-- CONTENT -->
        <main class="content">
            <h3 class="fourth-heading mb-2rm">Nasabah</h3>

            <!-- NAVIGASI -->
            <nav class="navigation">
                <div class="form-input">
                    <div class="icon-placeholder">
                        <svg width="16" height="16" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M22.83,20.688C24.766,18.045 25.634,14.769 25.258,11.514C24.883,8.26 23.292,5.267 20.805,3.134C18.318,1.002 15.117,-0.113 11.843,0.013C8.569,0.14 5.464,1.497 3.148,3.815C0.832,6.132 -0.523,9.239 -0.647,12.512C-0.771,15.786 0.346,18.986 2.48,21.472C4.615,23.958 7.609,25.546 10.864,25.919C14.119,26.292 17.394,25.423 20.036,23.484L20.034,23.484C20.094,23.564 20.158,23.64 20.23,23.714L27.93,31.414C28.305,31.789 28.813,32 29.344,32C29.874,32.001 30.383,31.79 30.759,31.415C31.134,31.04 31.345,30.531 31.345,30.001C31.345,29.47 31.135,28.961 30.76,28.586L23.06,20.886C22.988,20.814 22.911,20.747 22.83,20.686L22.83,20.688ZM23.346,13C23.346,14.445 23.061,15.875 22.508,17.21C21.955,18.544 21.145,19.757 20.124,20.778C19.102,21.8 17.89,22.61 16.555,23.163C15.22,23.716 13.79,24 12.346,24C10.901,24 9.471,23.716 8.136,23.163C6.801,22.61 5.589,21.8 4.567,20.778C3.546,19.757 2.736,18.544 2.183,17.21C1.63,15.875 1.346,14.445 1.346,13C1.346,10.083 2.504,7.285 4.567,5.222C6.63,3.159 9.428,2 12.346,2C15.263,2 18.061,3.159 20.124,5.222C22.187,7.285 23.346,10.083 23.346,13L23.346,13Z"
                                fill="#212529" />
                        </svg>
                    </div>
                    <input type="text" class="search-input" placeholder="Search">
                </div>

                <button class="btn-add-transaksi">
                    <svg width="12" height="12" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path
                            d="M23.5,9.375L15.625,9.375L15.625,1.5C15.625,0.57 14.805,-0.25 13.875,-0.25L12.125,-0.25C11.141,-0.25 10.375,0.57 10.375,1.5L10.375,9.375L2.5,9.375C1.516,9.375 0.75,10.195 0.75,11.125L0.75,12.875C0.75,13.859 1.516,14.625 2.5,14.625L10.375,14.625L10.375,22.5C10.375,23.484 11.141,24.25 12.125,24.25L13.875,24.25C14.805,24.25 15.625,23.484 15.625,22.5L15.625,14.625L23.5,14.625C24.43,14.625 25.25,13.859 25.25,12.875L25.25,11.125C25.25,10.195 24.43,9.375 23.5,9.375Z"
                            fill="#FFFFFF" />
                    </svg>
                    <span>Tambah Transaksi</span>
                </button>
            </nav>

            <!-- NASABAH LIST -->
            <section class="nasabah-section">
                <p class="daftar-nasabah-heading">Daftar Nasabah</p>
                <hr class="mb-1rm">

                <div class="nasabah-list">
                    <div class="nasabah">
                        <div class="left-box-nasabah">
                            <p class="nama-nasabah">Aji Prasetyo Nugroho</p>
                            <p>No : FEAC386</p>
                            <p>Ajibarang, Purwokerto, Jawa Tengah, Indonesia</p>
                        </div>
                        <div class="right-box-nasabah">
                            <div>
                                <svg width="26" height="18" viewBox="0 0 44 36" fill="none" class="icon mr-1rm edit-btn"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M29.616,24.258C29.469,24.399 29.469,24.539 29.469,24.68L29.469,32.625L3.536,32.625L3.536,7.875L21.291,7.875C21.439,7.875 21.586,7.875 21.733,7.734L24.091,5.484C24.459,5.133 24.165,4.5 23.649,4.5L3.536,4.5C1.547,4.5 0,6.047 0,7.875L0,32.625C0,34.524 1.547,36 3.536,36L29.469,36C31.385,36 33.005,34.524 33.005,32.625L33.005,22.43C33.005,21.938 32.342,21.656 31.974,22.008L29.616,24.258ZM41.109,10.125C42.804,8.508 42.804,5.906 41.109,4.289L37.941,1.266C36.247,-0.352 33.521,-0.352 31.827,1.266L12.524,19.687L11.788,26.086C11.567,27.914 13.187,29.461 15.103,29.25L21.807,28.547L41.109,10.125ZM33.889,12.234L20.186,25.313L15.324,25.875L15.913,21.234L29.616,8.156L33.889,12.234ZM38.604,6.68C38.973,6.961 38.973,7.383 38.678,7.734L36.394,9.914L32.121,5.766L34.331,3.656C34.626,3.305 35.142,3.305 35.437,3.656L38.604,6.68Z"
                                        fill="#828894" />
                                </svg>
                                <svg width="18" height="18" viewBox="0 0 34 36" fill="none" class="icon delete-btn"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M19.376,29.25L21.144,29.25C21.586,29.25 22.028,28.898 22.028,28.406L22.028,13.219C22.028,12.797 21.586,12.375 21.144,12.375L19.376,12.375C18.86,12.375 18.492,12.797 18.492,13.219L18.492,28.406C18.492,28.898 18.86,29.25 19.376,29.25ZM31.458,5.625L25.344,5.625L22.839,1.688C22.249,0.773 20.923,0 19.818,0L12.377,0C11.272,0 9.946,0.773 9.357,1.688L6.852,5.625L0.811,5.625C0.148,5.625 -0.368,6.188 -0.368,6.75L-0.368,7.875C-0.368,8.508 0.148,9 0.811,9L1.989,9L1.989,32.625C1.989,34.523 3.536,36 5.526,36L26.743,36C28.659,36 30.28,34.523 30.28,32.625L30.28,9L31.458,9C32.048,9 32.637,8.508 32.637,7.875L32.637,6.75C32.637,6.188 32.048,5.625 31.458,5.625ZM12.23,3.586C12.304,3.516 12.525,3.375 12.598,3.375L12.672,3.375L19.597,3.375C19.671,3.375 19.892,3.516 19.965,3.586L21.218,5.625L10.977,5.625L12.23,3.586ZM26.743,32.625L5.526,32.625L5.526,9L26.743,9L26.743,32.625ZM11.125,29.25L12.893,29.25C13.335,29.25 13.777,28.898 13.777,28.406L13.777,13.219C13.777,12.797 13.335,12.375 12.893,12.375L11.125,12.375C10.609,12.375 10.241,12.797 10.241,13.219L10.241,28.406C10.241,28.898 10.609,29.25 11.125,29.25Z"
                                        fill="#828894" />
                                </svg>
                            </div>
                            <p>Phone no : 081346782345</p>
                        </div>
                    </div>

                    <div class="nasabah">
                        <div class="left-box-nasabah">
                            <p class="nama-nasabah">Aji Prasetyo Nugroho</p>
                            <p>No : FEAC386</p>
                            <p>Ajibarang, Purwokerto, Jawa Tengah, Indonesia</p>
                        </div>
                        <div class="right-box-nasabah">
                            <div>
                                <svg width="26" height="18" viewBox="0 0 44 36" fill="none" class="icon mr-1rm edit-btn"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M29.616,24.258C29.469,24.399 29.469,24.539 29.469,24.68L29.469,32.625L3.536,32.625L3.536,7.875L21.291,7.875C21.439,7.875 21.586,7.875 21.733,7.734L24.091,5.484C24.459,5.133 24.165,4.5 23.649,4.5L3.536,4.5C1.547,4.5 0,6.047 0,7.875L0,32.625C0,34.524 1.547,36 3.536,36L29.469,36C31.385,36 33.005,34.524 33.005,32.625L33.005,22.43C33.005,21.938 32.342,21.656 31.974,22.008L29.616,24.258ZM41.109,10.125C42.804,8.508 42.804,5.906 41.109,4.289L37.941,1.266C36.247,-0.352 33.521,-0.352 31.827,1.266L12.524,19.687L11.788,26.086C11.567,27.914 13.187,29.461 15.103,29.25L21.807,28.547L41.109,10.125ZM33.889,12.234L20.186,25.313L15.324,25.875L15.913,21.234L29.616,8.156L33.889,12.234ZM38.604,6.68C38.973,6.961 38.973,7.383 38.678,7.734L36.394,9.914L32.121,5.766L34.331,3.656C34.626,3.305 35.142,3.305 35.437,3.656L38.604,6.68Z"
                                        fill="#828894" />
                                </svg>
                                <svg width="18" height="18" viewBox="0 0 34 36" fill="none" class="icon delete-btn"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M19.376,29.25L21.144,29.25C21.586,29.25 22.028,28.898 22.028,28.406L22.028,13.219C22.028,12.797 21.586,12.375 21.144,12.375L19.376,12.375C18.86,12.375 18.492,12.797 18.492,13.219L18.492,28.406C18.492,28.898 18.86,29.25 19.376,29.25ZM31.458,5.625L25.344,5.625L22.839,1.688C22.249,0.773 20.923,0 19.818,0L12.377,0C11.272,0 9.946,0.773 9.357,1.688L6.852,5.625L0.811,5.625C0.148,5.625 -0.368,6.188 -0.368,6.75L-0.368,7.875C-0.368,8.508 0.148,9 0.811,9L1.989,9L1.989,32.625C1.989,34.523 3.536,36 5.526,36L26.743,36C28.659,36 30.28,34.523 30.28,32.625L30.28,9L31.458,9C32.048,9 32.637,8.508 32.637,7.875L32.637,6.75C32.637,6.188 32.048,5.625 31.458,5.625ZM12.23,3.586C12.304,3.516 12.525,3.375 12.598,3.375L12.672,3.375L19.597,3.375C19.671,3.375 19.892,3.516 19.965,3.586L21.218,5.625L10.977,5.625L12.23,3.586ZM26.743,32.625L5.526,32.625L5.526,9L26.743,9L26.743,32.625ZM11.125,29.25L12.893,29.25C13.335,29.25 13.777,28.898 13.777,28.406L13.777,13.219C13.777,12.797 13.335,12.375 12.893,12.375L11.125,12.375C10.609,12.375 10.241,12.797 10.241,13.219L10.241,28.406C10.241,28.898 10.609,29.25 11.125,29.25Z"
                                        fill="#828894" />
                                </svg>
                            </div>
                            <p>Phone no : 081346782345</p>
                        </div>
                    </div>

                    <div class="nasabah">
                        <div class="left-box-nasabah">
                            <p class="nama-nasabah">Aji Prasetyo Nugroho</p>
                            <p>No : FEAC386</p>
                            <p>Ajibarang, Purwokerto, Jawa Tengah, Indonesia</p>
                        </div>
                        <div class="right-box-nasabah">
                            <div>
                                <svg width="26" height="18" viewBox="0 0 44 36" fill="none" class="icon mr-1rm edit-btn"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M29.616,24.258C29.469,24.399 29.469,24.539 29.469,24.68L29.469,32.625L3.536,32.625L3.536,7.875L21.291,7.875C21.439,7.875 21.586,7.875 21.733,7.734L24.091,5.484C24.459,5.133 24.165,4.5 23.649,4.5L3.536,4.5C1.547,4.5 0,6.047 0,7.875L0,32.625C0,34.524 1.547,36 3.536,36L29.469,36C31.385,36 33.005,34.524 33.005,32.625L33.005,22.43C33.005,21.938 32.342,21.656 31.974,22.008L29.616,24.258ZM41.109,10.125C42.804,8.508 42.804,5.906 41.109,4.289L37.941,1.266C36.247,-0.352 33.521,-0.352 31.827,1.266L12.524,19.687L11.788,26.086C11.567,27.914 13.187,29.461 15.103,29.25L21.807,28.547L41.109,10.125ZM33.889,12.234L20.186,25.313L15.324,25.875L15.913,21.234L29.616,8.156L33.889,12.234ZM38.604,6.68C38.973,6.961 38.973,7.383 38.678,7.734L36.394,9.914L32.121,5.766L34.331,3.656C34.626,3.305 35.142,3.305 35.437,3.656L38.604,6.68Z"
                                        fill="#828894" />
                                </svg>
                                <svg width="18" height="18" viewBox="0 0 34 36" fill="none" class="icon delete-btn"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M19.376,29.25L21.144,29.25C21.586,29.25 22.028,28.898 22.028,28.406L22.028,13.219C22.028,12.797 21.586,12.375 21.144,12.375L19.376,12.375C18.86,12.375 18.492,12.797 18.492,13.219L18.492,28.406C18.492,28.898 18.86,29.25 19.376,29.25ZM31.458,5.625L25.344,5.625L22.839,1.688C22.249,0.773 20.923,0 19.818,0L12.377,0C11.272,0 9.946,0.773 9.357,1.688L6.852,5.625L0.811,5.625C0.148,5.625 -0.368,6.188 -0.368,6.75L-0.368,7.875C-0.368,8.508 0.148,9 0.811,9L1.989,9L1.989,32.625C1.989,34.523 3.536,36 5.526,36L26.743,36C28.659,36 30.28,34.523 30.28,32.625L30.28,9L31.458,9C32.048,9 32.637,8.508 32.637,7.875L32.637,6.75C32.637,6.188 32.048,5.625 31.458,5.625ZM12.23,3.586C12.304,3.516 12.525,3.375 12.598,3.375L12.672,3.375L19.597,3.375C19.671,3.375 19.892,3.516 19.965,3.586L21.218,5.625L10.977,5.625L12.23,3.586ZM26.743,32.625L5.526,32.625L5.526,9L26.743,9L26.743,32.625ZM11.125,29.25L12.893,29.25C13.335,29.25 13.777,28.898 13.777,28.406L13.777,13.219C13.777,12.797 13.335,12.375 12.893,12.375L11.125,12.375C10.609,12.375 10.241,12.797 10.241,13.219L10.241,28.406C10.241,28.898 10.609,29.25 11.125,29.25Z"
                                        fill="#828894" />
                                </svg>
                            </div>
                            <p>Phone no : 081346782345</p>
                        </div>
                    </div>

                    <div class="nasabah">
                        <div class="left-box-nasabah">
                            <p class="nama-nasabah">Aji Prasetyo Nugroho</p>
                            <p>No : FEAC386</p>
                            <p>Ajibarang, Purwokerto, Jawa Tengah, Indonesia</p>
                        </div>
                        <div class="right-box-nasabah">
                            <div>
                                <svg width="26" height="18" viewBox="0 0 44 36" fill="none" class="icon mr-1rm edit-btn"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M29.616,24.258C29.469,24.399 29.469,24.539 29.469,24.68L29.469,32.625L3.536,32.625L3.536,7.875L21.291,7.875C21.439,7.875 21.586,7.875 21.733,7.734L24.091,5.484C24.459,5.133 24.165,4.5 23.649,4.5L3.536,4.5C1.547,4.5 0,6.047 0,7.875L0,32.625C0,34.524 1.547,36 3.536,36L29.469,36C31.385,36 33.005,34.524 33.005,32.625L33.005,22.43C33.005,21.938 32.342,21.656 31.974,22.008L29.616,24.258ZM41.109,10.125C42.804,8.508 42.804,5.906 41.109,4.289L37.941,1.266C36.247,-0.352 33.521,-0.352 31.827,1.266L12.524,19.687L11.788,26.086C11.567,27.914 13.187,29.461 15.103,29.25L21.807,28.547L41.109,10.125ZM33.889,12.234L20.186,25.313L15.324,25.875L15.913,21.234L29.616,8.156L33.889,12.234ZM38.604,6.68C38.973,6.961 38.973,7.383 38.678,7.734L36.394,9.914L32.121,5.766L34.331,3.656C34.626,3.305 35.142,3.305 35.437,3.656L38.604,6.68Z"
                                        fill="#828894" />
                                </svg>
                                <svg width="18" height="18" viewBox="0 0 34 36" fill="none" class="icon delete-btn"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M19.376,29.25L21.144,29.25C21.586,29.25 22.028,28.898 22.028,28.406L22.028,13.219C22.028,12.797 21.586,12.375 21.144,12.375L19.376,12.375C18.86,12.375 18.492,12.797 18.492,13.219L18.492,28.406C18.492,28.898 18.86,29.25 19.376,29.25ZM31.458,5.625L25.344,5.625L22.839,1.688C22.249,0.773 20.923,0 19.818,0L12.377,0C11.272,0 9.946,0.773 9.357,1.688L6.852,5.625L0.811,5.625C0.148,5.625 -0.368,6.188 -0.368,6.75L-0.368,7.875C-0.368,8.508 0.148,9 0.811,9L1.989,9L1.989,32.625C1.989,34.523 3.536,36 5.526,36L26.743,36C28.659,36 30.28,34.523 30.28,32.625L30.28,9L31.458,9C32.048,9 32.637,8.508 32.637,7.875L32.637,6.75C32.637,6.188 32.048,5.625 31.458,5.625ZM12.23,3.586C12.304,3.516 12.525,3.375 12.598,3.375L12.672,3.375L19.597,3.375C19.671,3.375 19.892,3.516 19.965,3.586L21.218,5.625L10.977,5.625L12.23,3.586ZM26.743,32.625L5.526,32.625L5.526,9L26.743,9L26.743,32.625ZM11.125,29.25L12.893,29.25C13.335,29.25 13.777,28.898 13.777,28.406L13.777,13.219C13.777,12.797 13.335,12.375 12.893,12.375L11.125,12.375C10.609,12.375 10.241,12.797 10.241,13.219L10.241,28.406C10.241,28.898 10.609,29.25 11.125,29.25Z"
                                        fill="#828894" />
                                </svg>
                            </div>
                            <p>Phone no : 081346782345</p>
                        </div>
                    </div>

                    <div class="nasabah">
                        <div class="left-box-nasabah">
                            <p class="nama-nasabah">Aji Prasetyo Nugroho</p>
                            <p>No : FEAC386</p>
                            <p>Ajibarang, Purwokerto, Jawa Tengah, Indonesia</p>
                        </div>
                        <div class="right-box-nasabah">
                            <div>
                                <svg width="26" height="18" viewBox="0 0 44 36" fill="none" class="icon mr-1rm edit-btn"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M29.616,24.258C29.469,24.399 29.469,24.539 29.469,24.68L29.469,32.625L3.536,32.625L3.536,7.875L21.291,7.875C21.439,7.875 21.586,7.875 21.733,7.734L24.091,5.484C24.459,5.133 24.165,4.5 23.649,4.5L3.536,4.5C1.547,4.5 0,6.047 0,7.875L0,32.625C0,34.524 1.547,36 3.536,36L29.469,36C31.385,36 33.005,34.524 33.005,32.625L33.005,22.43C33.005,21.938 32.342,21.656 31.974,22.008L29.616,24.258ZM41.109,10.125C42.804,8.508 42.804,5.906 41.109,4.289L37.941,1.266C36.247,-0.352 33.521,-0.352 31.827,1.266L12.524,19.687L11.788,26.086C11.567,27.914 13.187,29.461 15.103,29.25L21.807,28.547L41.109,10.125ZM33.889,12.234L20.186,25.313L15.324,25.875L15.913,21.234L29.616,8.156L33.889,12.234ZM38.604,6.68C38.973,6.961 38.973,7.383 38.678,7.734L36.394,9.914L32.121,5.766L34.331,3.656C34.626,3.305 35.142,3.305 35.437,3.656L38.604,6.68Z"
                                        fill="#828894" />
                                </svg>
                                <svg width="18" height="18" viewBox="0 0 34 36" fill="none" class="icon delete-btn"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M19.376,29.25L21.144,29.25C21.586,29.25 22.028,28.898 22.028,28.406L22.028,13.219C22.028,12.797 21.586,12.375 21.144,12.375L19.376,12.375C18.86,12.375 18.492,12.797 18.492,13.219L18.492,28.406C18.492,28.898 18.86,29.25 19.376,29.25ZM31.458,5.625L25.344,5.625L22.839,1.688C22.249,0.773 20.923,0 19.818,0L12.377,0C11.272,0 9.946,0.773 9.357,1.688L6.852,5.625L0.811,5.625C0.148,5.625 -0.368,6.188 -0.368,6.75L-0.368,7.875C-0.368,8.508 0.148,9 0.811,9L1.989,9L1.989,32.625C1.989,34.523 3.536,36 5.526,36L26.743,36C28.659,36 30.28,34.523 30.28,32.625L30.28,9L31.458,9C32.048,9 32.637,8.508 32.637,7.875L32.637,6.75C32.637,6.188 32.048,5.625 31.458,5.625ZM12.23,3.586C12.304,3.516 12.525,3.375 12.598,3.375L12.672,3.375L19.597,3.375C19.671,3.375 19.892,3.516 19.965,3.586L21.218,5.625L10.977,5.625L12.23,3.586ZM26.743,32.625L5.526,32.625L5.526,9L26.743,9L26.743,32.625ZM11.125,29.25L12.893,29.25C13.335,29.25 13.777,28.898 13.777,28.406L13.777,13.219C13.777,12.797 13.335,12.375 12.893,12.375L11.125,12.375C10.609,12.375 10.241,12.797 10.241,13.219L10.241,28.406C10.241,28.898 10.609,29.25 11.125,29.25Z"
                                        fill="#828894" />
                                </svg>
                            </div>
                            <p>Phone no : 081346782345</p>
                        </div>
                    </div>

                    <div class="nasabah">
                        <div class="left-box-nasabah">
                            <p class="nama-nasabah">Aji Prasetyo Nugroho</p>
                            <p>No : FEAC386</p>
                            <p>Ajibarang, Purwokerto, Jawa Tengah, Indonesia</p>
                        </div>
                        <div class="right-box-nasabah">
                            <div>
                                <svg width="26" height="18" viewBox="0 0 44 36" fill="none" class="icon mr-1rm edit-btn"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M29.616,24.258C29.469,24.399 29.469,24.539 29.469,24.68L29.469,32.625L3.536,32.625L3.536,7.875L21.291,7.875C21.439,7.875 21.586,7.875 21.733,7.734L24.091,5.484C24.459,5.133 24.165,4.5 23.649,4.5L3.536,4.5C1.547,4.5 0,6.047 0,7.875L0,32.625C0,34.524 1.547,36 3.536,36L29.469,36C31.385,36 33.005,34.524 33.005,32.625L33.005,22.43C33.005,21.938 32.342,21.656 31.974,22.008L29.616,24.258ZM41.109,10.125C42.804,8.508 42.804,5.906 41.109,4.289L37.941,1.266C36.247,-0.352 33.521,-0.352 31.827,1.266L12.524,19.687L11.788,26.086C11.567,27.914 13.187,29.461 15.103,29.25L21.807,28.547L41.109,10.125ZM33.889,12.234L20.186,25.313L15.324,25.875L15.913,21.234L29.616,8.156L33.889,12.234ZM38.604,6.68C38.973,6.961 38.973,7.383 38.678,7.734L36.394,9.914L32.121,5.766L34.331,3.656C34.626,3.305 35.142,3.305 35.437,3.656L38.604,6.68Z"
                                        fill="#828894" />
                                </svg>
                                <svg width="18" height="18" viewBox="0 0 34 36" fill="none" class="icon delete-btn"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M19.376,29.25L21.144,29.25C21.586,29.25 22.028,28.898 22.028,28.406L22.028,13.219C22.028,12.797 21.586,12.375 21.144,12.375L19.376,12.375C18.86,12.375 18.492,12.797 18.492,13.219L18.492,28.406C18.492,28.898 18.86,29.25 19.376,29.25ZM31.458,5.625L25.344,5.625L22.839,1.688C22.249,0.773 20.923,0 19.818,0L12.377,0C11.272,0 9.946,0.773 9.357,1.688L6.852,5.625L0.811,5.625C0.148,5.625 -0.368,6.188 -0.368,6.75L-0.368,7.875C-0.368,8.508 0.148,9 0.811,9L1.989,9L1.989,32.625C1.989,34.523 3.536,36 5.526,36L26.743,36C28.659,36 30.28,34.523 30.28,32.625L30.28,9L31.458,9C32.048,9 32.637,8.508 32.637,7.875L32.637,6.75C32.637,6.188 32.048,5.625 31.458,5.625ZM12.23,3.586C12.304,3.516 12.525,3.375 12.598,3.375L12.672,3.375L19.597,3.375C19.671,3.375 19.892,3.516 19.965,3.586L21.218,5.625L10.977,5.625L12.23,3.586ZM26.743,32.625L5.526,32.625L5.526,9L26.743,9L26.743,32.625ZM11.125,29.25L12.893,29.25C13.335,29.25 13.777,28.898 13.777,28.406L13.777,13.219C13.777,12.797 13.335,12.375 12.893,12.375L11.125,12.375C10.609,12.375 10.241,12.797 10.241,13.219L10.241,28.406C10.241,28.898 10.609,29.25 11.125,29.25Z"
                                        fill="#828894" />
                                </svg>
                            </div>
                            <p>Phone no : 081346782345</p>
                        </div>
                    </div>

                    <div class="nasabah">
                        <div class="left-box-nasabah">
                            <p class="nama-nasabah">Aji Prasetyo Nugroho</p>
                            <p>No : FEAC386</p>
                            <p>Ajibarang, Purwokerto, Jawa Tengah, Indonesia</p>
                        </div>
                        <div class="right-box-nasabah">
                            <div>
                                <svg width="26" height="18" viewBox="0 0 44 36" fill="none" class="icon mr-1rm edit-btn"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M29.616,24.258C29.469,24.399 29.469,24.539 29.469,24.68L29.469,32.625L3.536,32.625L3.536,7.875L21.291,7.875C21.439,7.875 21.586,7.875 21.733,7.734L24.091,5.484C24.459,5.133 24.165,4.5 23.649,4.5L3.536,4.5C1.547,4.5 0,6.047 0,7.875L0,32.625C0,34.524 1.547,36 3.536,36L29.469,36C31.385,36 33.005,34.524 33.005,32.625L33.005,22.43C33.005,21.938 32.342,21.656 31.974,22.008L29.616,24.258ZM41.109,10.125C42.804,8.508 42.804,5.906 41.109,4.289L37.941,1.266C36.247,-0.352 33.521,-0.352 31.827,1.266L12.524,19.687L11.788,26.086C11.567,27.914 13.187,29.461 15.103,29.25L21.807,28.547L41.109,10.125ZM33.889,12.234L20.186,25.313L15.324,25.875L15.913,21.234L29.616,8.156L33.889,12.234ZM38.604,6.68C38.973,6.961 38.973,7.383 38.678,7.734L36.394,9.914L32.121,5.766L34.331,3.656C34.626,3.305 35.142,3.305 35.437,3.656L38.604,6.68Z"
                                        fill="#828894" />
                                </svg>
                                <svg width="18" height="18" viewBox="0 0 34 36" fill="none" class="icon delete-btn"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M19.376,29.25L21.144,29.25C21.586,29.25 22.028,28.898 22.028,28.406L22.028,13.219C22.028,12.797 21.586,12.375 21.144,12.375L19.376,12.375C18.86,12.375 18.492,12.797 18.492,13.219L18.492,28.406C18.492,28.898 18.86,29.25 19.376,29.25ZM31.458,5.625L25.344,5.625L22.839,1.688C22.249,0.773 20.923,0 19.818,0L12.377,0C11.272,0 9.946,0.773 9.357,1.688L6.852,5.625L0.811,5.625C0.148,5.625 -0.368,6.188 -0.368,6.75L-0.368,7.875C-0.368,8.508 0.148,9 0.811,9L1.989,9L1.989,32.625C1.989,34.523 3.536,36 5.526,36L26.743,36C28.659,36 30.28,34.523 30.28,32.625L30.28,9L31.458,9C32.048,9 32.637,8.508 32.637,7.875L32.637,6.75C32.637,6.188 32.048,5.625 31.458,5.625ZM12.23,3.586C12.304,3.516 12.525,3.375 12.598,3.375L12.672,3.375L19.597,3.375C19.671,3.375 19.892,3.516 19.965,3.586L21.218,5.625L10.977,5.625L12.23,3.586ZM26.743,32.625L5.526,32.625L5.526,9L26.743,9L26.743,32.625ZM11.125,29.25L12.893,29.25C13.335,29.25 13.777,28.898 13.777,28.406L13.777,13.219C13.777,12.797 13.335,12.375 12.893,12.375L11.125,12.375C10.609,12.375 10.241,12.797 10.241,13.219L10.241,28.406C10.241,28.898 10.609,29.25 11.125,29.25Z"
                                        fill="#828894" />
                                </svg>
                            </div>
                            <p>Phone no : 081346782345</p>
                        </div>
                    </div>

                    <div class="nasabah">
                        <div class="left-box-nasabah">
                            <p class="nama-nasabah">Aji Prasetyo Nugroho</p>
                            <p>No : FEAC386</p>
                            <p>Ajibarang, Purwokerto, Jawa Tengah, Indonesia</p>
                        </div>
                        <div class="right-box-nasabah">
                            <div>
                                <svg width="26" height="18" viewBox="0 0 44 36" fill="none" class="icon mr-1rm edit-btn"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M29.616,24.258C29.469,24.399 29.469,24.539 29.469,24.68L29.469,32.625L3.536,32.625L3.536,7.875L21.291,7.875C21.439,7.875 21.586,7.875 21.733,7.734L24.091,5.484C24.459,5.133 24.165,4.5 23.649,4.5L3.536,4.5C1.547,4.5 0,6.047 0,7.875L0,32.625C0,34.524 1.547,36 3.536,36L29.469,36C31.385,36 33.005,34.524 33.005,32.625L33.005,22.43C33.005,21.938 32.342,21.656 31.974,22.008L29.616,24.258ZM41.109,10.125C42.804,8.508 42.804,5.906 41.109,4.289L37.941,1.266C36.247,-0.352 33.521,-0.352 31.827,1.266L12.524,19.687L11.788,26.086C11.567,27.914 13.187,29.461 15.103,29.25L21.807,28.547L41.109,10.125ZM33.889,12.234L20.186,25.313L15.324,25.875L15.913,21.234L29.616,8.156L33.889,12.234ZM38.604,6.68C38.973,6.961 38.973,7.383 38.678,7.734L36.394,9.914L32.121,5.766L34.331,3.656C34.626,3.305 35.142,3.305 35.437,3.656L38.604,6.68Z"
                                        fill="#828894" />
                                </svg>
                                <svg width="18" height="18" viewBox="0 0 34 36" fill="none" class="icon delete-btn"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M19.376,29.25L21.144,29.25C21.586,29.25 22.028,28.898 22.028,28.406L22.028,13.219C22.028,12.797 21.586,12.375 21.144,12.375L19.376,12.375C18.86,12.375 18.492,12.797 18.492,13.219L18.492,28.406C18.492,28.898 18.86,29.25 19.376,29.25ZM31.458,5.625L25.344,5.625L22.839,1.688C22.249,0.773 20.923,0 19.818,0L12.377,0C11.272,0 9.946,0.773 9.357,1.688L6.852,5.625L0.811,5.625C0.148,5.625 -0.368,6.188 -0.368,6.75L-0.368,7.875C-0.368,8.508 0.148,9 0.811,9L1.989,9L1.989,32.625C1.989,34.523 3.536,36 5.526,36L26.743,36C28.659,36 30.28,34.523 30.28,32.625L30.28,9L31.458,9C32.048,9 32.637,8.508 32.637,7.875L32.637,6.75C32.637,6.188 32.048,5.625 31.458,5.625ZM12.23,3.586C12.304,3.516 12.525,3.375 12.598,3.375L12.672,3.375L19.597,3.375C19.671,3.375 19.892,3.516 19.965,3.586L21.218,5.625L10.977,5.625L12.23,3.586ZM26.743,32.625L5.526,32.625L5.526,9L26.743,9L26.743,32.625ZM11.125,29.25L12.893,29.25C13.335,29.25 13.777,28.898 13.777,28.406L13.777,13.219C13.777,12.797 13.335,12.375 12.893,12.375L11.125,12.375C10.609,12.375 10.241,12.797 10.241,13.219L10.241,28.406C10.241,28.898 10.609,29.25 11.125,29.25Z"
                                        fill="#828894" />
                                </svg>
                            </div>
                            <p>Phone no : 081346782345</p>
                        </div>
                    </div>

                    <div class="nasabah">
                        <div class="left-box-nasabah">
                            <p class="nama-nasabah">Aji Prasetyo Nugroho</p>
                            <p>No : FEAC386</p>
                            <p>Ajibarang, Purwokerto, Jawa Tengah, Indonesia</p>
                        </div>
                        <div class="right-box-nasabah">
                            <div>
                                <svg width="26" height="18" viewBox="0 0 44 36" fill="none" class="icon mr-1rm edit-btn"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M29.616,24.258C29.469,24.399 29.469,24.539 29.469,24.68L29.469,32.625L3.536,32.625L3.536,7.875L21.291,7.875C21.439,7.875 21.586,7.875 21.733,7.734L24.091,5.484C24.459,5.133 24.165,4.5 23.649,4.5L3.536,4.5C1.547,4.5 0,6.047 0,7.875L0,32.625C0,34.524 1.547,36 3.536,36L29.469,36C31.385,36 33.005,34.524 33.005,32.625L33.005,22.43C33.005,21.938 32.342,21.656 31.974,22.008L29.616,24.258ZM41.109,10.125C42.804,8.508 42.804,5.906 41.109,4.289L37.941,1.266C36.247,-0.352 33.521,-0.352 31.827,1.266L12.524,19.687L11.788,26.086C11.567,27.914 13.187,29.461 15.103,29.25L21.807,28.547L41.109,10.125ZM33.889,12.234L20.186,25.313L15.324,25.875L15.913,21.234L29.616,8.156L33.889,12.234ZM38.604,6.68C38.973,6.961 38.973,7.383 38.678,7.734L36.394,9.914L32.121,5.766L34.331,3.656C34.626,3.305 35.142,3.305 35.437,3.656L38.604,6.68Z"
                                        fill="#828894" />
                                </svg>
                                <svg width="18" height="18" viewBox="0 0 34 36" fill="none" class="icon delete-btn"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M19.376,29.25L21.144,29.25C21.586,29.25 22.028,28.898 22.028,28.406L22.028,13.219C22.028,12.797 21.586,12.375 21.144,12.375L19.376,12.375C18.86,12.375 18.492,12.797 18.492,13.219L18.492,28.406C18.492,28.898 18.86,29.25 19.376,29.25ZM31.458,5.625L25.344,5.625L22.839,1.688C22.249,0.773 20.923,0 19.818,0L12.377,0C11.272,0 9.946,0.773 9.357,1.688L6.852,5.625L0.811,5.625C0.148,5.625 -0.368,6.188 -0.368,6.75L-0.368,7.875C-0.368,8.508 0.148,9 0.811,9L1.989,9L1.989,32.625C1.989,34.523 3.536,36 5.526,36L26.743,36C28.659,36 30.28,34.523 30.28,32.625L30.28,9L31.458,9C32.048,9 32.637,8.508 32.637,7.875L32.637,6.75C32.637,6.188 32.048,5.625 31.458,5.625ZM12.23,3.586C12.304,3.516 12.525,3.375 12.598,3.375L12.672,3.375L19.597,3.375C19.671,3.375 19.892,3.516 19.965,3.586L21.218,5.625L10.977,5.625L12.23,3.586ZM26.743,32.625L5.526,32.625L5.526,9L26.743,9L26.743,32.625ZM11.125,29.25L12.893,29.25C13.335,29.25 13.777,28.898 13.777,28.406L13.777,13.219C13.777,12.797 13.335,12.375 12.893,12.375L11.125,12.375C10.609,12.375 10.241,12.797 10.241,13.219L10.241,28.406C10.241,28.898 10.609,29.25 11.125,29.25Z"
                                        fill="#828894" />
                                </svg>
                            </div>
                            <p>Phone no : 081346782345</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
</body>

</html>
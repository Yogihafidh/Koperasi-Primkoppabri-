<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/query.css">
    <link rel="stylesheet" href="../assets/css/helper.css">

    <!-- JAVASCRIPT -->
    <script defer src="../assets/javascript/transaksi.js"></script>
</head>

<body>
    <!-- CONTAINER -->
    <div class="container">
        <!-- SIDEBAR -->
        <?php include 'sidebar.php'; ?>

        <!-- CONTENT -->
        <main class="content">
            <h3 class="fourth-heading mb-2rm">Transaksi</h3>

            <!-- YEAR SUMMARY -->
            <section class="year-summary">
                <div class="card card-summary">
                    <div class="keterangan-waktu">
                        <div class="svg-container">
                            <svg class="icon" width="20" height="16" viewBox="0 0 48 44" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path
                                    d="M32.655,3.971C32.655,3.171 32.972,2.404 33.538,1.839C34.103,1.273 34.87,0.956 35.67,0.956L41.699,0.956C42.499,0.956 43.266,1.273 43.831,1.839C44.397,2.404 44.714,3.171 44.714,3.971L44.714,40.149L46.222,40.149C46.622,40.149 47.005,40.308 47.288,40.591C47.57,40.874 47.729,41.257 47.729,41.657C47.729,42.057 47.57,42.44 47.288,42.723C47.005,43.006 46.622,43.164 46.222,43.164L0.998,43.164C0.598,43.164 0.215,43.006 -0.068,42.723C-0.35,42.44 -0.509,42.057 -0.509,41.657C-0.509,41.257 -0.35,40.874 -0.068,40.591C0.215,40.308 0.598,40.149 0.998,40.149L2.506,40.149L2.506,31.105C2.506,30.305 2.823,29.538 3.389,28.973C3.954,28.408 4.721,28.09 5.521,28.09L11.55,28.09C12.35,28.09 13.117,28.408 13.682,28.973C14.248,29.538 14.565,30.305 14.565,31.105L14.565,40.149L17.58,40.149L17.58,19.045C17.58,18.246 17.898,17.479 18.463,16.913C19.029,16.348 19.795,16.03 20.595,16.03L26.625,16.03C27.424,16.03 28.191,16.348 28.757,16.913C29.322,17.479 29.64,18.246 29.64,19.045L29.64,40.149L32.655,40.149L32.655,3.971ZM35.67,40.149L41.699,40.149L41.699,3.971L35.67,3.971L35.67,40.149ZM26.625,40.149L26.625,19.045L20.595,19.045L20.595,40.149L26.625,40.149ZM11.55,40.149L11.55,31.105L5.521,31.105L5.521,40.149L11.55,40.149Z"
                                    fill="#212529" />
                            </svg>
                        </div>
                        <span>Bulanan</span>
                    </div>
                    <p class="nominal-year-summary green-tag">Rp 45 jt</p>
                </div>

                <div class="card card-summary">
                    <div class="keterangan-waktu">
                        <div class="svg-container">
                            <svg class="icon" width="18" height="18" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path
                                    d="M10.359,-0.059C10.759,-0.059 11.142,0.1 11.425,0.382C11.708,0.665 11.867,1.049 11.867,1.448L11.867,2.956L35.986,2.956L35.986,1.448C35.986,1.049 36.145,0.665 36.427,0.382C36.71,0.1 37.094,-0.059 37.493,-0.059C37.893,-0.059 38.277,0.1 38.559,0.382C38.842,0.665 39.001,1.049 39.001,1.448L39.001,2.956L42.016,2.956C43.615,2.956 45.149,3.591 46.279,4.722C47.41,5.853 48.046,7.386 48.046,8.986L48.046,42.149C48.046,43.749 47.41,45.282 46.279,46.413C45.149,47.544 43.615,48.179 42.016,48.179L5.837,48.179C4.238,48.179 2.704,47.544 1.573,46.413C0.442,45.282 -0.193,43.749 -0.193,42.149L-0.193,8.986C-0.193,7.386 0.442,5.853 1.573,4.722C2.704,3.591 4.238,2.956 5.837,2.956L8.852,2.956L8.852,1.448C8.852,1.049 9.011,0.665 9.293,0.382C9.576,0.1 9.959,-0.059 10.359,-0.059ZM5.837,5.971C5.037,5.971 4.27,6.288 3.705,6.854C3.14,7.419 2.822,8.186 2.822,8.986L2.822,12L45.031,12L45.031,8.986C45.031,8.186 44.713,7.419 44.148,6.854C43.582,6.288 42.815,5.971 42.016,5.971L5.837,5.971ZM45.031,15.015L2.822,15.015L2.822,42.149C2.822,42.949 3.14,43.716 3.705,44.281C4.27,44.847 5.037,45.164 5.837,45.164L42.016,45.164C42.815,45.164 43.582,44.847 44.148,44.281C44.713,43.716 45.031,42.949 45.031,42.149L45.031,15.015Z"
                                    fill="#212529" />
                                <path
                                    d="M26.941,22.553C26.941,22.153 27.1,21.769 27.383,21.487C27.666,21.204 28.049,21.045 28.449,21.045L45.031,21.045L45.031,27.075L28.449,27.075C28.049,27.075 27.666,26.916 27.383,26.633C27.1,26.351 26.941,25.967 26.941,25.567L26.941,22.553ZM20.911,31.597L20.911,34.612C20.911,35.012 20.753,35.395 20.47,35.678C20.187,35.961 19.804,36.12 19.404,36.12L2.822,36.12L2.822,30.09L19.404,30.09C19.804,30.09 20.187,30.249 20.47,30.531C20.753,30.814 20.911,31.197 20.911,31.597Z"
                                    fill="#212529" />
                            </svg>
                        </div>
                        <span>Mingguan</span>
                    </div>
                    <p class="nominal-year-summary blue-tag">Rp 45 jt</p>
                </div>

                <div class="card card-summary">
                    <div class="keterangan-waktu">
                        <div class="svg-container">
                            <svg class="icon" width="20" height="18" viewBox="0 0 50 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path
                                    d="M45.347,36.777C45.347,36.777 48.362,36.777 48.362,33.762C48.362,30.747 45.347,21.702 33.288,21.702C21.228,21.702 18.213,30.747 18.213,33.762C18.213,36.777 21.228,36.777 21.228,36.777L45.347,36.777ZM21.294,33.762C21.272,33.759 21.25,33.755 21.228,33.75C21.231,32.954 21.732,30.645 23.519,28.564C25.184,26.614 28.108,24.717 33.288,24.717C38.464,24.717 41.389,26.617 43.056,28.564C44.844,30.645 45.341,32.957 45.347,33.75L45.323,33.756C45.309,33.758 45.295,33.76 45.281,33.762L21.294,33.762L21.294,33.762ZM33.288,15.673C34.887,15.673 36.421,15.037 37.551,13.907C38.682,12.776 39.317,11.242 39.317,9.643C39.317,8.044 38.682,6.51 37.551,5.379C36.421,4.248 34.887,3.613 33.288,3.613C31.688,3.613 30.155,4.248 29.024,5.379C27.893,6.51 27.258,8.044 27.258,9.643C27.258,11.242 27.893,12.776 29.024,13.907C30.155,15.037 31.688,15.673 33.288,15.673ZM42.332,9.643C42.332,10.831 42.098,12.007 41.644,13.104C41.189,14.202 40.523,15.199 39.683,16.038C38.843,16.878 37.846,17.545 36.749,17.999C35.652,18.454 34.475,18.688 33.288,18.688C32.1,18.688 30.924,18.454 29.826,17.999C28.729,17.545 27.732,16.878 26.892,16.038C26.052,15.199 25.386,14.202 24.931,13.104C24.477,12.007 24.243,10.831 24.243,9.643C24.243,7.244 25.196,4.944 26.892,3.247C28.588,1.551 30.889,0.598 33.288,0.598C35.686,0.598 37.987,1.551 39.683,3.247C41.379,4.944 42.332,7.244 42.332,9.643L42.332,9.643ZM21.035,22.547C19.829,22.167 18.586,21.917 17.327,21.802C16.619,21.735 15.909,21.701 15.198,21.702C3.139,21.702 0.124,30.747 0.124,33.762C0.124,35.773 1.128,36.777 3.139,36.777L15.849,36.777C15.403,35.836 15.18,34.804 15.198,33.762C15.198,30.717 16.335,27.606 18.484,25.007C19.217,24.12 20.07,23.291 21.035,22.547ZM14.957,24.717C13.173,27.398 12.209,30.542 12.183,33.762L3.139,33.762C3.139,32.978 3.633,30.657 5.43,28.564C7.073,26.647 9.928,24.778 14.957,24.72L14.957,24.717ZM4.646,11.15C4.646,8.752 5.599,6.451 7.295,4.755C8.991,3.059 11.292,2.106 13.691,2.106C16.09,2.106 18.39,3.059 20.086,4.755C21.783,6.451 22.736,8.752 22.736,11.15C22.736,13.549 21.783,15.85 20.086,17.546C18.39,19.242 16.09,20.195 13.691,20.195C11.292,20.195 8.991,19.242 7.295,17.546C5.599,15.85 4.646,13.549 4.646,11.15L4.646,11.15ZM13.691,5.121C12.092,5.121 10.558,5.756 9.427,6.887C8.296,8.017 7.661,9.551 7.661,11.15C7.661,12.75 8.296,14.283 9.427,15.414C10.558,16.545 12.092,17.18 13.691,17.18C15.29,17.18 16.824,16.545 17.955,15.414C19.085,14.283 19.721,12.75 19.721,11.15C19.721,9.551 19.085,8.017 17.955,6.887C16.824,5.756 15.29,5.121 13.691,5.121Z"
                                    fill="#212529" />
                            </svg>
                        </div>
                        <span>Total Tahunan</span>
                    </div>
                    <p class="nominal-year-summary yellow-tag">Rp 45 jt</p>
                </div>
            </section>


            <!-- NAVIGASI TRANSAKSI -->
            <nav class="navigation">
                <!-- SEARCH -->
                <div class="form-input">
                    <div class="icon-placeholder">
                        <svg class="search-icon" width="16" height="16" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M22.83,20.688C24.766,18.045 25.634,14.769 25.258,11.514C24.883,8.26 23.292,5.267 20.805,3.134C18.318,1.002 15.117,-0.113 11.843,0.013C8.569,0.14 5.464,1.497 3.148,3.815C0.832,6.132 -0.523,9.239 -0.647,12.512C-0.771,15.786 0.346,18.986 2.48,21.472C4.615,23.958 7.609,25.546 10.864,25.919C14.119,26.292 17.394,25.423 20.036,23.484L20.034,23.484C20.094,23.564 20.158,23.64 20.23,23.714L27.93,31.414C28.305,31.789 28.813,32 29.344,32C29.874,32.001 30.383,31.79 30.759,31.415C31.134,31.04 31.345,30.531 31.345,30.001C31.345,29.47 31.135,28.961 30.76,28.586L23.06,20.886C22.988,20.814 22.911,20.747 22.83,20.686L22.83,20.688ZM23.346,13C23.346,14.445 23.061,15.875 22.508,17.21C21.955,18.544 21.145,19.757 20.124,20.778C19.102,21.8 17.89,22.61 16.555,23.163C15.22,23.716 13.79,24 12.346,24C10.901,24 9.471,23.716 8.136,23.163C6.801,22.61 5.589,21.8 4.567,20.778C3.546,19.757 2.736,18.544 2.183,17.21C1.63,15.875 1.346,14.445 1.346,13C1.346,10.083 2.504,7.285 4.567,5.222C6.63,3.159 9.428,2 12.346,2C15.263,2 18.061,3.159 20.124,5.222C22.187,7.285 23.346,10.083 23.346,13L23.346,13Z"
                                fill="#212529" />
                        </svg>
                    </div>
                    <input type="text" class="search-input" placeholder="Search">
                </div>

                <!-- BUTTON MOBILE -->
                <div class="btn-mobile">
                    <button class="btn-mobile-nav">
                        <svg class="icon-btn-mobile" name="btn-open" width="18" height="20" viewBox="0 0 30 32"
                            fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M-0.626,1.373C-0.626,1.075 -0.507,0.789 -0.296,0.578C-0.085,0.367 0.201,0.248 0.499,0.248L27.499,0.248C27.798,0.248 28.084,0.367 28.295,0.578C28.506,0.789 28.624,1.075 28.624,1.373L28.624,5.873C28.624,6.151 28.522,6.418 28.336,6.625L18.499,17.555L18.499,28.373C18.499,28.609 18.425,28.839 18.287,29.031C18.148,29.222 17.954,29.365 17.73,29.44L10.98,31.69C10.811,31.746 10.631,31.762 10.455,31.735C10.278,31.708 10.111,31.639 9.967,31.535C9.822,31.431 9.704,31.294 9.623,31.136C9.542,30.977 9.499,30.802 9.499,30.623L9.499,17.555L-0.338,6.625C-0.523,6.418 -0.626,6.151 -0.626,5.873L-0.626,1.373ZM1.624,2.498L1.624,5.441L11.461,16.372C11.647,16.578 11.749,16.846 11.749,17.123L11.749,29.062L16.249,27.563L16.249,17.123C16.249,16.846 16.352,16.578 16.537,16.372L26.374,5.441L26.374,2.498L1.624,2.498Z"
                                fill="#212529" />
                        </svg>
                    </button>
                </div>

                <!-- BUTTON FILTER -->
                <div class="right-box-nav">
                    <svg class="icon-btn-mobile btn-close" name="btn-close" xmlns="http://www.w3.org/2000/svg"
                        width="30" height="30" viewBox="0 0 24 24">
                        <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 12L7 7m5 5l5 5m-5-5l5-5m-5 5l-5 5" />
                    </svg>
                    <button class="btn-add-transaksi">
                        <div class="svg-container">
                            <svg class="icon" width="12" height="12" viewBox="0 0 26 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path
                                    d="M23.5,9.375L15.625,9.375L15.625,1.5C15.625,0.57 14.805,-0.25 13.875,-0.25L12.125,-0.25C11.141,-0.25 10.375,0.57 10.375,1.5L10.375,9.375L2.5,9.375C1.516,9.375 0.75,10.195 0.75,11.125L0.75,12.875C0.75,13.859 1.516,14.625 2.5,14.625L10.375,14.625L10.375,22.5C10.375,23.484 11.141,24.25 12.125,24.25L13.875,24.25C14.805,24.25 15.625,23.484 15.625,22.5L15.625,14.625L23.5,14.625C24.43,14.625 25.25,13.859 25.25,12.875L25.25,11.125C25.25,10.195 24.43,9.375 23.5,9.375Z"
                                    fill="#FFFFFF" />
                            </svg>
                        </div>
                        <span>Tambah</span>
                    </button>
                    <button class="btn-download">
                        <div class="svg-container">
                            <svg class="icon" width="20" height="20" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path
                                    d="M31.667,28C30.562,28 29.667,28.896 29.667,30C29.667,31.105 30.562,32 31.667,32L31.667,28ZM31.667,18.334L31.667,16.334L31.667,16.334L31.667,18.334ZM30,18.334L28.049,17.896C27.916,18.488 28.059,19.109 28.439,19.584C28.818,20.058 29.393,20.334 30,20.334L30,18.334ZM15.661,9.655L16.687,11.372L15.661,9.655ZM11.667,15L11.587,16.999C12.552,17.038 13.407,16.381 13.618,15.439L11.667,15ZM7.367,30.834C8.38,31.275 9.559,30.812 10,29.8C10.441,28.787 9.978,27.608 8.966,27.167L7.367,30.834ZM31.667,32C33.744,32 35.737,31.175 37.206,29.706L34.377,26.878C33.658,27.597 32.683,28 31.667,28L31.667,32ZM37.206,29.706C38.675,28.237 39.5,26.245 39.5,24.167L35.5,24.167C35.5,25.184 35.096,26.159 34.377,26.878L37.206,29.706ZM39.5,24.167C39.5,22.09 38.675,20.097 37.206,18.628L34.377,21.457C35.096,22.175 35.5,23.15 35.5,24.167L39.5,24.167ZM37.206,18.628C35.737,17.159 33.744,16.334 31.667,16.334L31.667,20.334C32.683,20.334 33.658,20.738 34.377,21.457L37.206,18.628ZM31.667,16.334L30,16.334L30,20.334L31.667,20.334L31.667,16.334ZM31.951,18.772C32.258,17.404 32.263,15.994 31.965,14.625L28.057,15.475C28.231,16.275 28.228,17.096 28.049,17.896L31.951,18.772ZM31.965,14.625C31.667,13.256 31.075,11.965 30.234,10.825L27.015,13.199C27.532,13.9 27.882,14.674 28.057,15.475L31.965,14.625ZM30.234,10.825C29.393,9.685 28.321,8.719 27.088,7.972L25.017,11.394C25.821,11.881 26.497,12.497 27.015,13.199L30.234,10.825ZM27.088,7.972C25.855,7.226 24.48,6.711 23.043,6.449L22.327,10.385C23.298,10.561 24.212,10.907 25.017,11.394L27.088,7.972ZM23.043,6.449C21.606,6.188 20.128,6.184 18.689,6.438L19.383,10.377C20.355,10.206 21.357,10.208 22.327,10.385L23.043,6.449ZM18.689,6.438C17.251,6.691 15.873,7.199 14.635,7.938L16.687,11.372C17.495,10.889 18.411,10.548 19.383,10.377L18.689,6.438ZM14.635,7.938C12.136,9.431 10.336,11.797 9.715,14.562L13.618,15.439C13.98,13.828 15.053,12.348 16.687,11.372L14.635,7.938ZM11.747,13.002C9.53,12.913 7.34,13.563 5.552,14.856L7.895,18.098C8.945,17.339 10.25,16.945 11.587,16.999L11.747,13.002ZM5.552,14.856C3.762,16.149 2.48,18.012 1.949,20.137L5.83,21.107C6.126,19.923 6.848,18.855 7.895,18.098L5.552,14.856ZM1.949,20.137C1.418,22.263 1.677,24.499 2.675,26.454L6.238,24.636C5.676,23.535 5.534,22.289 5.83,21.107L1.949,20.137ZM2.675,26.454C3.673,28.408 5.338,29.949 7.367,30.834L8.966,27.167C7.759,26.641 6.801,25.739 6.238,24.636L2.675,26.454Z"
                                    fill="#403A44" />
                                <line x1="18" y1="21.667" x2="18" y2="36.667" stroke="#403A44" stroke-width="2"
                                    stroke-miterlimit="3.999327" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M16.414,30.253C15.633,29.472 14.367,29.472 13.586,30.253C12.805,31.034 12.805,32.3 13.586,33.081L16.414,30.253ZM20,36.667L18.586,38.081C18.961,38.456 19.47,38.667 20,38.667C20.53,38.667 21.039,38.456 21.414,38.081L20,36.667ZM26.414,33.081C27.195,32.3 27.195,31.034 26.414,30.253C25.633,29.472 24.367,29.472 23.586,30.253L26.414,33.081ZM13.586,33.081L18.586,38.081L21.414,35.253L16.414,30.253L13.586,33.081ZM21.414,38.081L26.414,33.081L23.586,30.253L18.586,35.253L21.414,38.081Z"
                                    fill="#403A44" />
                            </svg>
                        </div>
                        <span>
                            Download
                        </span>
                    </button>
                    <div class="btn-group">
                        <button class="btn-time btn-time-active">24 hours</button>
                        <button class="btn-time">7 days</button>
                        <button class="btn-time">30 days</button>
                    </div>
                </div>
            </nav>

            <!-- TABEL TRANSAKSI -->
            <section class="tabel-transaksi">
                <table style="width:100%">
                    <thead>
                        <tr>
                            <th style="width:30%">Nama</th>
                            <th style="width:20%">Status</th>
                            <th>No</th>
                            <th>Ratention</th>
                            <th>Total</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody class="tbody">
                        <tr>
                            <td>
                                <p class="nama-tabel">Vela Anguliar</p>
                                <p class="id">192803-AB920</p>
                            </td>
                            <td>
                                <p class="status accepted"><span>●</span>Accepted</p>
                            </td>
                            <td>FEAC389</td>
                            <td>$8,926</td>
                            <td>$0.00</td>
                            <td>09/06/2024</td>
                            <td class="crud-btn">
                                <p class="option-crud">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" class="icon"
                                        viewBox="0 0 24 24">
                                        <path fill="black"
                                            d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0-4 0m0-6a2 2 0 1 0 4 0a2 2 0 0 0-4 0m0 12a2 2 0 1 0 4 0a2 2 0 0 0-4 0" />
                                    </svg>
                                </p>
                                <section class="crud hidden">
                                    <ul class="crud-list-items">
                                        <li class="crud-list-item">
                                            <a href="">
                                                <svg width="18" height="18" viewBox="0 0 48 48" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <path
                                                        d="M8,40L6,40C6,41.105 6.895,42 8,42L8,40ZM16,40L16,42C16.53,42 17.039,41.79 17.414,41.415L16,40ZM37,19L38.414,20.415L38.414,20.415L37,19ZM38.657,15L40.657,15L38.657,15ZM29,11L27.586,9.586L27.586,9.586L29,11ZM8,32L6.586,30.586C6.211,30.961 6,31.47 6,32L8,32ZM8,42L16,42L16,38L8,38L8,42ZM17.414,41.415L38.414,20.415L35.586,17.586L14.586,38.586L17.414,41.415ZM38.414,20.415C39.85,18.979 40.657,17.031 40.657,15L36.657,15C36.657,15.97 36.272,16.9 35.586,17.586L38.414,20.415ZM40.657,15C40.657,12.97 39.85,11.022 38.414,9.586L35.586,12.415C36.272,13.1 36.657,14.031 36.657,15L40.657,15ZM38.414,9.586C36.978,8.15 35.031,7.344 33,7.344L33,11.344C33.97,11.344 34.9,11.729 35.586,12.415L38.414,9.586ZM33,7.344C30.969,7.344 29.022,8.15 27.586,9.586L30.414,12.415C31.1,11.729 32.03,11.344 33,11.344L33,7.344ZM27.586,9.586L6.586,30.586L9.414,33.415L30.414,12.415L27.586,9.586ZM6,32L6,40L10,40L10,32L6,32Z"
                                                        fill="#403A44" />
                                                    <path
                                                        d="M28.414,11.586C27.633,10.805 26.367,10.805 25.586,11.586C24.805,12.367 24.805,13.634 25.586,14.415L28.414,11.586ZM33.586,22.415C34.367,23.196 35.633,23.196 36.414,22.415C37.195,21.634 37.195,20.367 36.414,19.586L33.586,22.415ZM25.586,14.415L33.586,22.415L36.414,19.586L28.414,11.586L25.586,14.415Z"
                                                        fill="#403A44" />
                                                </svg>
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                        <li class="crud-list-item">
                                            <a href="">
                                                <svg width="18" height="18" viewBox="0 0 48 48" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <line x1="8" y1="12" x2="40" y2="12" stroke="#E75C29"
                                                        stroke-width="2" stroke-miterlimit="3.999327"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <line x1="18" y1="22" x2="18" y2="34" stroke="#E75C29"
                                                        stroke-width="2" stroke-miterlimit="3.999327"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <line x1="26" y1="22" x2="26" y2="34" stroke="#E75C29"
                                                        stroke-width="2" stroke-miterlimit="3.999327"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M11.993,13.834C11.901,12.734 10.935,11.916 9.834,12.007C8.733,12.099 7.915,13.066 8.007,14.167L11.993,13.834ZM12,38L14,38C14,37.945 13.998,37.89 13.993,37.834L12,38ZM36,38L34.007,37.834C34.002,37.89 34,37.945 34,38L36,38ZM39.993,14.167C40.085,13.066 39.267,12.099 38.166,12.007C37.065,11.916 36.099,12.734 36.007,13.834L39.993,14.167ZM8.007,14.167L10.007,38.166L13.993,37.834L11.993,13.834L8.007,14.167ZM10,38C10,39.592 10.632,41.118 11.757,42.243L14.586,39.415C14.211,39.04 14,38.531 14,38L10,38ZM11.757,42.243C12.883,43.368 14.409,44 16,44L16,40C15.47,40 14.961,39.79 14.586,39.415L11.757,42.243ZM16,44L32,44L32,40L16,40L16,44ZM32,44C33.591,44 35.117,43.368 36.243,42.243L33.414,39.415C33.039,39.79 32.53,40 32,40L32,44ZM36.243,42.243C37.368,41.118 38,39.592 38,38L34,38C34,38.531 33.789,39.04 33.414,39.415L36.243,42.243ZM37.993,38.166L39.993,14.167L36.007,13.834L34.007,37.834L37.993,38.166Z"
                                                        fill="#E75C29" />
                                                    <path
                                                        d="M16,14C16,15.105 16.895,16 18,16C19.105,16 20,15.105 20,14L16,14ZM20,6L20,4L20,6ZM28,6L28,4L28,6ZM28,14C28,15.105 28.895,16 30,16C31.105,16 32,15.105 32,14L28,14ZM20,14L20,8L16,8L16,14L20,14ZM20,8L20,8L17.172,5.172C16.421,5.922 16,6.94 16,8L20,8ZM20,8L20,8L20,4C18.939,4 17.922,4.422 17.172,5.172L20,8ZM20,8L28,8L28,4L20,4L20,8ZM28,8L28,8L30.828,5.172C30.078,4.422 29.061,4 28,4L28,8ZM28,8L28,8L32,8C32,6.94 31.579,5.922 30.828,5.172L28,8ZM28,8L28,14L32,14L32,8L28,8Z"
                                                        fill="#E75C29" />
                                                </svg>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li class="crud-list-item">
                                            <a href="" class="cancel-btn">
                                                <svg width="18" height="18" viewBox="0 0 48 48" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <path
                                                        d="M6,24L8,24L8,24L6,24ZM24,42L24,40L24,42ZM42,24L40,24L40,24L42,24ZM24,6L24,4L24,6ZM4,24C4,26.626 4.517,29.227 5.522,31.654L9.218,30.123C8.414,28.182 8,26.101 8,24L4,24ZM5.522,31.654C6.528,34.08 8.001,36.285 9.858,38.142L12.686,35.314C11.201,33.828 10.022,32.064 9.218,30.123L5.522,31.654ZM9.858,38.142C11.715,39.999 13.92,41.472 16.346,42.478L17.877,38.782C15.936,37.978 14.172,36.799 12.686,35.314L9.858,38.142ZM16.346,42.478C18.773,43.483 21.374,44 24,44L24,40C21.899,40 19.818,39.586 17.877,38.782L16.346,42.478ZM24,44C26.626,44 29.227,43.483 31.654,42.478L30.123,38.782C28.182,39.586 26.101,40 24,40L24,44ZM31.654,42.478C34.08,41.472 36.285,39.999 38.142,38.142L35.314,35.314C33.828,36.799 32.064,37.978 30.123,38.782L31.654,42.478ZM38.142,38.142C39.999,36.285 41.472,34.08 42.478,31.654L38.782,30.123C37.978,32.064 36.799,33.828 35.314,35.314L38.142,38.142ZM42.478,31.654C43.483,29.227 44,26.626 44,24L40,24C40,26.101 39.586,28.182 38.782,30.123L42.478,31.654ZM44,24C44,21.374 43.483,18.773 42.478,16.346L38.782,17.877C39.586,19.818 40,21.899 40,24L44,24ZM42.478,16.346C41.472,13.92 39.999,11.715 38.142,9.858L35.314,12.686C36.799,14.172 37.978,15.936 38.782,17.877L42.478,16.346ZM38.142,9.858C36.285,8.001 34.08,6.528 31.654,5.522L30.123,9.218C32.064,10.022 33.828,11.201 35.314,12.686L38.142,9.858ZM31.654,5.522C29.227,4.517 26.626,4 24,4L24,8C26.101,8 28.182,8.414 30.123,9.218L31.654,5.522ZM24,4C21.374,4 18.773,4.517 16.346,5.522L17.877,9.218C19.818,8.414 21.899,8 24,8L24,4ZM16.346,5.522C13.92,6.528 11.715,8.001 9.858,9.858L12.686,12.686C14.172,11.201 15.936,10.022 17.877,9.218L16.346,5.522ZM9.858,9.858C8.001,11.715 6.528,13.92 5.522,16.346L9.218,17.877C10.022,15.936 11.201,14.172 12.686,12.686L9.858,9.858ZM5.522,16.346C4.517,18.773 4,21.374 4,24L8,24C8,21.899 8.414,19.818 9.218,17.877L5.522,16.346Z"
                                                        fill="#403A44" />
                                                    <path
                                                        d="M12.814,9.986C12.033,9.205 10.767,9.205 9.986,9.986C9.205,10.767 9.205,12.033 9.986,12.814L12.814,9.986ZM35.186,38.014C35.967,38.795 37.233,38.795 38.014,38.014C38.795,37.233 38.795,35.967 38.014,35.186L35.186,38.014ZM9.986,12.814L35.186,38.014L38.014,35.186L12.814,9.986L9.986,12.814Z"
                                                        fill="#403A44" />
                                                </svg>
                                                <span>Cancel</span>
                                            </a>
                                        </li>
                                    </ul>
                                </section>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p class="nama-tabel">Vela Anguliar</p>
                                <p class="id">192803-AB920</p>
                            </td>
                            <td>
                                <p class="status accepted"><span>●</span>Accepted</p>
                            </td>
                            <td>FEAC389</td>
                            <td>$8,926</td>
                            <td>$0.00</td>
                            <td>09/06/2024</td>
                            <td class="crud-btn">
                                <p class="option-crud">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" class="icon"
                                        viewBox="0 0 24 24">
                                        <path fill="black"
                                            d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0-4 0m0-6a2 2 0 1 0 4 0a2 2 0 0 0-4 0m0 12a2 2 0 1 0 4 0a2 2 0 0 0-4 0" />
                                    </svg>
                                </p>
                                <section class="crud hidden">
                                    <ul class="crud-list-items">
                                        <li class="crud-list-item">
                                            <a href="">
                                                <svg width="18" height="18" viewBox="0 0 48 48" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <path
                                                        d="M8,40L6,40C6,41.105 6.895,42 8,42L8,40ZM16,40L16,42C16.53,42 17.039,41.79 17.414,41.415L16,40ZM37,19L38.414,20.415L38.414,20.415L37,19ZM38.657,15L40.657,15L38.657,15ZM29,11L27.586,9.586L27.586,9.586L29,11ZM8,32L6.586,30.586C6.211,30.961 6,31.47 6,32L8,32ZM8,42L16,42L16,38L8,38L8,42ZM17.414,41.415L38.414,20.415L35.586,17.586L14.586,38.586L17.414,41.415ZM38.414,20.415C39.85,18.979 40.657,17.031 40.657,15L36.657,15C36.657,15.97 36.272,16.9 35.586,17.586L38.414,20.415ZM40.657,15C40.657,12.97 39.85,11.022 38.414,9.586L35.586,12.415C36.272,13.1 36.657,14.031 36.657,15L40.657,15ZM38.414,9.586C36.978,8.15 35.031,7.344 33,7.344L33,11.344C33.97,11.344 34.9,11.729 35.586,12.415L38.414,9.586ZM33,7.344C30.969,7.344 29.022,8.15 27.586,9.586L30.414,12.415C31.1,11.729 32.03,11.344 33,11.344L33,7.344ZM27.586,9.586L6.586,30.586L9.414,33.415L30.414,12.415L27.586,9.586ZM6,32L6,40L10,40L10,32L6,32Z"
                                                        fill="#403A44" />
                                                    <path
                                                        d="M28.414,11.586C27.633,10.805 26.367,10.805 25.586,11.586C24.805,12.367 24.805,13.634 25.586,14.415L28.414,11.586ZM33.586,22.415C34.367,23.196 35.633,23.196 36.414,22.415C37.195,21.634 37.195,20.367 36.414,19.586L33.586,22.415ZM25.586,14.415L33.586,22.415L36.414,19.586L28.414,11.586L25.586,14.415Z"
                                                        fill="#403A44" />
                                                </svg>
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                        <li class="crud-list-item">
                                            <a href="">
                                                <svg width="18" height="18" viewBox="0 0 48 48" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <line x1="8" y1="12" x2="40" y2="12" stroke="#E75C29"
                                                        stroke-width="2" stroke-miterlimit="3.999327"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <line x1="18" y1="22" x2="18" y2="34" stroke="#E75C29"
                                                        stroke-width="2" stroke-miterlimit="3.999327"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <line x1="26" y1="22" x2="26" y2="34" stroke="#E75C29"
                                                        stroke-width="2" stroke-miterlimit="3.999327"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M11.993,13.834C11.901,12.734 10.935,11.916 9.834,12.007C8.733,12.099 7.915,13.066 8.007,14.167L11.993,13.834ZM12,38L14,38C14,37.945 13.998,37.89 13.993,37.834L12,38ZM36,38L34.007,37.834C34.002,37.89 34,37.945 34,38L36,38ZM39.993,14.167C40.085,13.066 39.267,12.099 38.166,12.007C37.065,11.916 36.099,12.734 36.007,13.834L39.993,14.167ZM8.007,14.167L10.007,38.166L13.993,37.834L11.993,13.834L8.007,14.167ZM10,38C10,39.592 10.632,41.118 11.757,42.243L14.586,39.415C14.211,39.04 14,38.531 14,38L10,38ZM11.757,42.243C12.883,43.368 14.409,44 16,44L16,40C15.47,40 14.961,39.79 14.586,39.415L11.757,42.243ZM16,44L32,44L32,40L16,40L16,44ZM32,44C33.591,44 35.117,43.368 36.243,42.243L33.414,39.415C33.039,39.79 32.53,40 32,40L32,44ZM36.243,42.243C37.368,41.118 38,39.592 38,38L34,38C34,38.531 33.789,39.04 33.414,39.415L36.243,42.243ZM37.993,38.166L39.993,14.167L36.007,13.834L34.007,37.834L37.993,38.166Z"
                                                        fill="#E75C29" />
                                                    <path
                                                        d="M16,14C16,15.105 16.895,16 18,16C19.105,16 20,15.105 20,14L16,14ZM20,6L20,4L20,6ZM28,6L28,4L28,6ZM28,14C28,15.105 28.895,16 30,16C31.105,16 32,15.105 32,14L28,14ZM20,14L20,8L16,8L16,14L20,14ZM20,8L20,8L17.172,5.172C16.421,5.922 16,6.94 16,8L20,8ZM20,8L20,8L20,4C18.939,4 17.922,4.422 17.172,5.172L20,8ZM20,8L28,8L28,4L20,4L20,8ZM28,8L28,8L30.828,5.172C30.078,4.422 29.061,4 28,4L28,8ZM28,8L28,8L32,8C32,6.94 31.579,5.922 30.828,5.172L28,8ZM28,8L28,14L32,14L32,8L28,8Z"
                                                        fill="#E75C29" />
                                                </svg>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li class="crud-list-item">
                                            <a href="" class="cancel-btn">
                                                <svg width="18" height="18" viewBox="0 0 48 48" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <path
                                                        d="M6,24L8,24L8,24L6,24ZM24,42L24,40L24,42ZM42,24L40,24L40,24L42,24ZM24,6L24,4L24,6ZM4,24C4,26.626 4.517,29.227 5.522,31.654L9.218,30.123C8.414,28.182 8,26.101 8,24L4,24ZM5.522,31.654C6.528,34.08 8.001,36.285 9.858,38.142L12.686,35.314C11.201,33.828 10.022,32.064 9.218,30.123L5.522,31.654ZM9.858,38.142C11.715,39.999 13.92,41.472 16.346,42.478L17.877,38.782C15.936,37.978 14.172,36.799 12.686,35.314L9.858,38.142ZM16.346,42.478C18.773,43.483 21.374,44 24,44L24,40C21.899,40 19.818,39.586 17.877,38.782L16.346,42.478ZM24,44C26.626,44 29.227,43.483 31.654,42.478L30.123,38.782C28.182,39.586 26.101,40 24,40L24,44ZM31.654,42.478C34.08,41.472 36.285,39.999 38.142,38.142L35.314,35.314C33.828,36.799 32.064,37.978 30.123,38.782L31.654,42.478ZM38.142,38.142C39.999,36.285 41.472,34.08 42.478,31.654L38.782,30.123C37.978,32.064 36.799,33.828 35.314,35.314L38.142,38.142ZM42.478,31.654C43.483,29.227 44,26.626 44,24L40,24C40,26.101 39.586,28.182 38.782,30.123L42.478,31.654ZM44,24C44,21.374 43.483,18.773 42.478,16.346L38.782,17.877C39.586,19.818 40,21.899 40,24L44,24ZM42.478,16.346C41.472,13.92 39.999,11.715 38.142,9.858L35.314,12.686C36.799,14.172 37.978,15.936 38.782,17.877L42.478,16.346ZM38.142,9.858C36.285,8.001 34.08,6.528 31.654,5.522L30.123,9.218C32.064,10.022 33.828,11.201 35.314,12.686L38.142,9.858ZM31.654,5.522C29.227,4.517 26.626,4 24,4L24,8C26.101,8 28.182,8.414 30.123,9.218L31.654,5.522ZM24,4C21.374,4 18.773,4.517 16.346,5.522L17.877,9.218C19.818,8.414 21.899,8 24,8L24,4ZM16.346,5.522C13.92,6.528 11.715,8.001 9.858,9.858L12.686,12.686C14.172,11.201 15.936,10.022 17.877,9.218L16.346,5.522ZM9.858,9.858C8.001,11.715 6.528,13.92 5.522,16.346L9.218,17.877C10.022,15.936 11.201,14.172 12.686,12.686L9.858,9.858ZM5.522,16.346C4.517,18.773 4,21.374 4,24L8,24C8,21.899 8.414,19.818 9.218,17.877L5.522,16.346Z"
                                                        fill="#403A44" />
                                                    <path
                                                        d="M12.814,9.986C12.033,9.205 10.767,9.205 9.986,9.986C9.205,10.767 9.205,12.033 9.986,12.814L12.814,9.986ZM35.186,38.014C35.967,38.795 37.233,38.795 38.014,38.014C38.795,37.233 38.795,35.967 38.014,35.186L35.186,38.014ZM9.986,12.814L35.186,38.014L38.014,35.186L12.814,9.986L9.986,12.814Z"
                                                        fill="#403A44" />
                                                </svg>
                                                <span>Cancel</span>
                                            </a>
                                        </li>
                                    </ul>
                                </section>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

</body>

</html>
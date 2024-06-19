<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/general.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/query.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/helper.css?v=<?php echo time(); ?>">

    <!-- JAVASCRIPT -->
    <script defer src="assets/javascript/sidebar.js?v=<?php echo time(); ?>"></script>

</head>

<body>
    <!-- SIDEBAR PHONE MODE -->
    <button class="sidebar-phone">
        <div class="sidebar-phone-icon-box">
            <svg class="sidebar-phone-icon" xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 48 48">
                <g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                    <path d="M7.94971 11.9497H39.9497" />
                    <path d="M7.94971 23.9497H39.9497" />
                    <path d="M7.94971 35.9497H39.9497" />
                </g>
            </svg>
        </div>
    </button>

    <!-- SIDEBAR -->
    <aside class="sidebar sidebar-small">
        <h3 class="tertiary-heading color-light mb-4rm">KSP KUSUMA BANGSA</h3>

        <p>General</p>
        <ul class="sidebar-links">

            <li class="sidebar-link <?php if ($_GET['mod'] === 'beranda') {
                                        echo 'active-sidebar';
                                    } ?>">
                <a href="?mod=beranda" class="link">

                    <svg width="18" height="16" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M5.506,17.505C5.67,17.341 5.892,17.248 6.124,17.248L21.874,17.248C22.106,17.248 22.329,17.341 22.493,17.505C22.657,17.669 22.749,17.891 22.749,18.123L22.749,19.873C22.749,20.105 22.657,20.328 22.493,20.492C22.329,20.656 22.106,20.748 21.874,20.748L6.124,20.748C5.892,20.748 5.67,20.656 5.506,20.492C5.341,20.328 5.249,20.105 5.249,19.873L5.249,18.123C5.249,17.891 5.341,17.669 5.506,17.505Z" fill="#495057" />
                        <path d="M2.57,0.058C3.073,-0.149 3.612,-0.254 4.156,-0.252L23.843,-0.252C24.387,-0.254 24.926,-0.149 25.429,0.058C25.932,0.264 26.389,0.567 26.775,0.95C27.161,1.333 27.468,1.788 27.678,2.29C27.888,2.791 27.997,3.329 27.999,3.873L27.999,20.124C27.997,20.667 27.888,21.205 27.678,21.707C27.468,22.209 27.161,22.664 26.775,23.047C26.389,23.43 25.932,23.733 25.429,23.939C24.926,24.145 24.387,24.251 23.843,24.248L4.156,24.248C3.612,24.251 3.073,24.145 2.57,23.939C2.067,23.733 1.609,23.43 1.223,23.047C0.837,22.664 0.53,22.209 0.32,21.707C0.11,21.205 0.001,20.667 -0.001,20.124L-0.001,3.873C0.001,3.329 0.11,2.791 0.32,2.29C0.53,1.788 0.837,1.333 1.223,0.95C1.609,0.567 2.067,0.264 2.57,0.058ZM4.156,1.498C2.819,1.498 1.749,2.569 1.749,3.873L1.749,4.998L26.249,4.998L26.249,3.873C26.249,2.569 25.18,1.498 23.843,1.498L4.156,1.498ZM26.249,6.748L1.749,6.748L1.749,20.124C1.751,20.438 1.815,20.748 1.937,21.037C2.059,21.327 2.237,21.589 2.461,21.809C2.684,22.03 2.949,22.204 3.24,22.323C3.53,22.441 3.842,22.501 4.156,22.498L23.843,22.498C25.18,22.498 26.249,21.427 26.249,20.124L26.249,6.748Z" clip-rule="evenodd" fill-rule="evenodd" fill="#495057" />
                    </svg>

                    <span>
                        Beranda
                    </span>
                </a>
            </li>

            <li class="sidebar-link <?php if ($_GET['mod'] === 'transaksi') {
                                        echo 'active-sidebar';
                                    } ?>">
                <a href="?mod=transaksi" class="link">

                    <svg width="11" height="21" viewBox="0 0 16 26" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M0.999,16.865C1.258,19.782 3.647,21.853 7.284,22.12L7.284,24.248L9.109,24.248L9.109,22.12C13.081,21.807 15.545,19.604 15.545,16.345C15.545,13.563 13.888,11.953 10.372,11.046L9.109,10.719L9.109,4.066C11.072,4.258 12.397,5.315 12.731,6.894L15.304,6.894C15.013,4.094 12.609,2.085 9.109,1.862L9.109,-0.252L7.284,-0.252L7.284,1.906C3.89,2.309 1.561,4.482 1.561,7.429C1.561,9.974 3.252,11.774 6.218,12.534L7.285,12.817L7.285,19.872C5.275,19.574 3.89,18.472 3.556,16.865L0.999,16.865L0.999,16.865ZM6.934,10.152C5.108,9.692 4.134,8.708 4.134,7.324C4.134,5.672 5.366,4.452 7.284,4.125L7.284,10.241L6.934,10.154L6.934,10.152ZM9.718,13.428C11.97,13.993 12.959,14.931 12.959,16.524C12.959,18.444 11.513,19.723 9.109,19.917L9.109,13.276L9.718,13.426L9.718,13.428Z" fill="#495057" />
                    </svg>

                    <span>
                        Transaksi
                    </span>
                </a>
            </li>

            <li class="sidebar-link <?php if ($_GET['mod'] === 'nasabah') {
                                        echo 'active-sidebar';
                                    } ?>">
                <a href="?mod=nasabah" class="link">

                    <svg width="16" height="16" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M13.999,-0.339L25.567,4.998L27.124,4.998C27.356,4.998 27.579,5.091 27.743,5.255C27.907,5.419 27.999,5.641 27.999,5.873L27.999,9.373C27.999,9.605 27.907,9.828 27.743,9.992C27.579,10.156 27.356,10.248 27.124,10.248L26.249,10.248L26.249,22.498C26.444,22.498 26.634,22.564 26.788,22.684C26.942,22.804 27.051,22.972 27.098,23.162L27.973,26.662C28.005,26.791 28.007,26.925 27.98,27.055C27.952,27.185 27.895,27.307 27.814,27.412C27.732,27.517 27.627,27.601 27.508,27.66C27.388,27.718 27.257,27.748 27.124,27.748L0.874,27.748C0.741,27.748 0.61,27.718 0.491,27.66C0.371,27.601 0.267,27.517 0.185,27.412C0.103,27.307 0.046,27.185 0.019,27.055C-0.009,26.925 -0.007,26.791 0.026,26.662L0.901,23.162C0.948,22.972 1.057,22.804 1.211,22.684C1.365,22.564 1.554,22.498 1.749,22.498L1.749,10.248L0.874,10.248C0.642,10.248 0.42,10.156 0.256,9.992C0.091,9.828 -0.001,9.605 -0.001,9.373L-0.001,5.873C-0.001,5.641 0.091,5.419 0.256,5.255C0.42,5.091 0.642,4.998 0.874,4.998L2.432,4.998L13.999,-0.339ZM6.607,4.998L21.389,4.998L13.999,1.586L6.607,4.998ZM3.499,10.248L3.499,22.498L5.249,22.498L5.249,10.248L3.499,10.248ZM6.999,10.248L6.999,22.498L11.374,22.498L11.374,10.248L6.999,10.248ZM13.124,10.248L13.124,22.498L14.874,22.498L14.874,10.248L13.124,10.248ZM16.624,10.248L16.624,22.498L20.999,22.498L20.999,10.248L16.624,10.248ZM22.749,10.248L22.749,22.498L24.499,22.498L24.499,10.248L22.749,10.248ZM26.249,8.498L26.249,6.748L1.749,6.748L1.749,8.498L26.249,8.498ZM25.567,24.248L2.432,24.248L1.994,25.998L26.004,25.998L25.567,24.248L25.567,24.248Z" fill="#495057" />
                    </svg>

                    <span>
                        Nasabah
                    </span>
                </a>
            </li>

            <li class="sidebar-link <?php if ($_GET['mod'] === 'pegawai') {
                                        echo 'active-sidebar';
                                    } ?>">
                <a href="?mod=pegawai" class="link">

                    <svg width="20" height="14" viewBox="0 0 50 38" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M45.347,36.777C45.347,36.777 48.362,36.777 48.362,33.762C48.362,30.747 45.347,21.702 33.288,21.702C21.228,21.702 18.213,30.747 18.213,33.762C18.213,36.777 21.228,36.777 21.228,36.777L45.347,36.777ZM21.294,33.762C21.272,33.759 21.25,33.755 21.228,33.75C21.231,32.954 21.732,30.645 23.519,28.564C25.184,26.614 28.108,24.717 33.288,24.717C38.464,24.717 41.389,26.617 43.056,28.564C44.844,30.645 45.341,32.957 45.347,33.75L45.323,33.756C45.309,33.758 45.295,33.76 45.281,33.762L21.294,33.762L21.294,33.762ZM33.288,15.673C34.887,15.673 36.421,15.037 37.551,13.907C38.682,12.776 39.317,11.242 39.317,9.643C39.317,8.044 38.682,6.51 37.551,5.379C36.421,4.248 34.887,3.613 33.288,3.613C31.688,3.613 30.155,4.248 29.024,5.379C27.893,6.51 27.258,8.044 27.258,9.643C27.258,11.242 27.893,12.776 29.024,13.907C30.155,15.037 31.688,15.673 33.288,15.673ZM42.332,9.643C42.332,10.831 42.098,12.007 41.644,13.104C41.189,14.202 40.523,15.199 39.683,16.038C38.843,16.878 37.846,17.545 36.749,17.999C35.652,18.454 34.475,18.688 33.288,18.688C32.1,18.688 30.924,18.454 29.826,17.999C28.729,17.545 27.732,16.878 26.892,16.038C26.052,15.199 25.386,14.202 24.931,13.104C24.477,12.007 24.243,10.831 24.243,9.643C24.243,7.244 25.196,4.944 26.892,3.247C28.588,1.551 30.889,0.598 33.288,0.598C35.686,0.598 37.987,1.551 39.683,3.247C41.379,4.944 42.332,7.244 42.332,9.643L42.332,9.643ZM21.035,22.547C19.829,22.167 18.586,21.917 17.327,21.802C16.619,21.735 15.909,21.701 15.198,21.702C3.139,21.702 0.124,30.747 0.124,33.762C0.124,35.773 1.128,36.777 3.139,36.777L15.849,36.777C15.403,35.836 15.18,34.804 15.198,33.762C15.198,30.717 16.335,27.606 18.484,25.007C19.217,24.12 20.07,23.291 21.035,22.547ZM14.957,24.717C13.173,27.398 12.209,30.542 12.183,33.762L3.139,33.762C3.139,32.978 3.633,30.657 5.43,28.564C7.073,26.647 9.928,24.778 14.957,24.72L14.957,24.717ZM4.646,11.15C4.646,8.752 5.599,6.451 7.295,4.755C8.991,3.059 11.292,2.106 13.691,2.106C16.09,2.106 18.39,3.059 20.086,4.755C21.783,6.451 22.736,8.752 22.736,11.15C22.736,13.549 21.783,15.85 20.086,17.546C18.39,19.242 16.09,20.195 13.691,20.195C11.292,20.195 8.991,19.242 7.295,17.546C5.599,15.85 4.646,13.549 4.646,11.15L4.646,11.15ZM13.691,5.121C12.092,5.121 10.558,5.756 9.427,6.887C8.296,8.017 7.661,9.551 7.661,11.15C7.661,12.75 8.296,14.283 9.427,15.414C10.558,16.545 12.092,17.18 13.691,17.18C15.29,17.18 16.824,16.545 17.955,15.414C19.085,14.283 19.721,12.75 19.721,11.15C19.721,9.551 19.085,8.017 17.955,6.887C16.824,5.756 15.29,5.121 13.691,5.121Z" fill="#212529" />
                    </svg>

                    <span>
                        Pegawai
                    </span>
                </a>
            </li>

            <li class="sidebar-link <?php if ($_GET['mod'] === 'report') {
                                        echo 'active-sidebar';
                                    } ?>">
                <a href="?mod=report" class="link">
                    <svg width="18" height="18" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M-0.001,-0.002L1.749,-0.002L1.749,26.248L27.999,26.248L27.999,27.998L-0.001,27.998L-0.001,-0.002ZM17.499,6.123C17.499,5.891 17.591,5.669 17.756,5.505C17.92,5.341 18.142,5.248 18.374,5.248L25.374,5.248C25.606,5.248 25.829,5.341 25.993,5.505C26.157,5.669 26.249,5.891 26.249,6.123L26.249,13.123C26.249,13.355 26.157,13.578 25.993,13.742C25.829,13.906 25.606,13.998 25.374,13.998C25.142,13.998 24.92,13.906 24.755,13.742C24.591,13.578 24.499,13.355 24.499,13.123L24.499,8.573L18.177,16.303C18.099,16.398 18.003,16.475 17.894,16.53C17.785,16.585 17.665,16.616 17.543,16.622C17.421,16.629 17.299,16.609 17.185,16.565C17.072,16.521 16.968,16.454 16.882,16.368L12.354,11.841L5.956,20.638C5.816,20.816 5.613,20.933 5.389,20.964C5.164,20.995 4.937,20.938 4.754,20.804C4.571,20.671 4.446,20.472 4.407,20.249C4.367,20.026 4.416,19.797 4.542,19.609L11.542,9.984C11.617,9.882 11.712,9.796 11.822,9.735C11.933,9.673 12.055,9.636 12.181,9.626C12.307,9.616 12.434,9.633 12.553,9.677C12.672,9.721 12.779,9.789 12.869,9.879L17.435,14.446L23.528,6.998L18.374,6.998C18.142,6.998 17.92,6.906 17.756,6.742C17.591,6.578 17.499,6.355 17.499,6.123Z" clip-rule="evenodd" fill-rule="evenodd" fill="#495057" />
                    </svg>

                    <span>
                        Laporan
                    </span>
                </a>
            </li>
            <li class="sidebar-link logout"><a href="logout" class="link">Logout</a></li>
        </ul>
    </aside>
</body>

</html>
<?php

if ($_GET['mod'] == 'home') {
    include "template/landingpage.php";
} else if ($_GET['mod'] == 'beranda') {
    include "template/beranda.php";
} else if ($_GET['mod'] == 'transaksi') {
    include "template/transaksi.php";
} else if ($_GET['mod'] == 'nasabah') {
    include "template/nasabah.php";
} else if ($_GET['mod'] == 'pegawai') {
    include "template/pegawai.php";
} else if ($_GET['mod'] == 'report') {
    include "template/report.php";
} else if ($_GET['mod'] == 'registrasi') {
    include "template/registrasi.php";
} else if ($_GET['mod'] == 'login') {
    include "template/login.php";
}

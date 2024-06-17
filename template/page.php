<?php

if ($_GET['mod'] == 'editPegawai') {
    include "user/edit.php";
} else if ($_GET['mod'] == 'beranda') {
    include "template/beranda.php";
} else if ($_GET['mod'] == 'transaksi') {
    include "template/transaksi.php";
}

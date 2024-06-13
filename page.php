<?php

if ($_GET['mod'] == 'home') {
    include "template/landingpage.php";
} else if ($_GET['mod'] == 'admin') {
    include "template/admin.php";
} else if ($_GET['mod'] == 'hotel') {
    include "template/hotel.php";
} else if ($_GET['mod'] == 'pesawat') {
    include "template/pesawat.php";
} else if ($_GET['mod'] == 'keretaapi') {
    include "template/keretaapi.php";
} else if ($_GET['mod'] == 'registrasi') {
    include "template/registrasi.php";
} else if ($_GET['mod'] == 'login') {
    include "template/login.php";
}

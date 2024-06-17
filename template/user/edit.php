<?php
session_start();
include '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['user_id'];
    $role = $_POST['role'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE user SET role_id='$role', nama_lengkap='$nama_lengkap', no_hp='$no_hp', alamat='$alamat' WHERE user_id='$id'";

    if ($conn->query($query)) {
        header('location: ../../page.php?mod=pegawai');
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}

//$conn->close();
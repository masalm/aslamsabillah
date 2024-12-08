<?php
include 'db.php'; // Pastikan file db.php berisi koneksi database

// Proses untuk input kendaraan
if (isset($_POST['submit_kendaraan'])) {
    $kendaraan_id = $_POST['kendaraan_id'];
    $nama = $_POST['nama'];
    $no_plat = $_POST['no_plat'];
    $tipe = $_POST['tipe'];
    $warna = $_POST['warna'];
    $bahan_bakar = $_POST['bahan_bakar'];

    // Query untuk menyimpan data kendaraan
    $query = "INSERT INTO kendaraan (kendaraan_id, nama, no_plat, tipe, warna, bahan_bakar) 
              VALUES ('$kendaraan_id', '$nama', '$no_plat', '$tipe', '$warna', '$bahan_bakar')";
    
    // Menjalankan query
    if (mysqli_query($conn, $query)) {
        header('Location: index.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Proses untuk input rute
if (isset($_POST['submit_rute'])) {
    $asal = $_POST['asal'];
    $tujuan = $_POST['tujuan'];
    $tgl_operasi = $_POST['tgl_operasi'];
    $status = $_POST['status'];

    // Query untuk menyimpan data rute
    $query = "INSERT INTO rute (asal, tujuan, tgl_operasi, status) 
              VALUES ('$asal', '$tujuan', '$tgl_operasi', '$status')";
    
    // Menjalankan query
    if (mysqli_query($conn, $query)) {
        header('Location: index.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

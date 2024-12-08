<?php
include 'db.php'; // Pastikan file db.php berisi koneksi database

// Query untuk mengambil data kendaraan
$query_kendaraan = "SELECT * FROM kendaraan";
$result_kendaraan = mysqli_query($conn, $query_kendaraan);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Kendaraan</title>
    <style>
        /* CSS yang diperlukan */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e9f4fb; /* Light blue background */
        }
        header {
            background-color: #006bb3; /* Dark blue */
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 1.8em;
            border-bottom: 3px solid #004d80; /* Darker blue for the bottom border */
        }
        .container {
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #b3d1f2; /* Lighter blue border */
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #006bb3; /* Dark blue */
            color: white;
        }
        td {
            background-color: #f4faff; /* Light blue for table rows */
        }
        .back-btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #006bb3; /* Dark blue for the button */
            color: white;
            text-decoration: none;
            margin-top: 20px;
            border-radius: 8px;
            text-align: center;
        }
        .back-btn:hover {
            background-color: #004d80; /* Darker blue on hover */
        }
    </style>
</head>
<body>

<header>Info Kendaraan</header>

<div class="container">
    <table>
        <tr>
            <th>ID Kendaraan</th>
            <th>Nama</th>
            <th>Nomor Plat</th>
            <th>Tipe</th>
            <th>Warna</th>
            <th>Bahan Bakar</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result_kendaraan)) : ?>
        <tr>
            <td><?php echo $row['kendaraan_id']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['no_plat']; ?></td>
            <td><?php echo $row['tipe']; ?></td>
            <td><?php echo $row['warna']; ?></td>
            <td><?php echo $row['bahan_bakar']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <a href="index.php" class="back-btn">Kembali ke Halaman Utama</a>
</div>

</body>
</html>

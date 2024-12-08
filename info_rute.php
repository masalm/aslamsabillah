<?php
include 'db.php'; // Pastikan file db.php berisi koneksi database

// Query untuk mengambil data rute
$query_rute = "SELECT * FROM rute";
$result_rute = mysqli_query($conn, $query_rute);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Rute</title>
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

<header>Info Rute</header>

<div class="container">
    <table>
        <tr>
            <th>Asal</th>
            <th>Tujuan</th>
            <th>Tanggal Operasi</th>
            <th>Status</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result_rute)) : ?>
        <tr>
            <td><?php echo $row['asal']; ?></td>
            <td><?php echo $row['tujuan']; ?></td>
            <td><?php echo $row['tgl_operasi']; ?></td>
            <td><?php echo $row['status']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <a href="index.php" class="back-btn">Kembali ke Halaman Utama</a>
</div>

</body>
</html>

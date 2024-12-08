<?php
// Bisa tambahkan koneksi database di sini jika diperlukan
// include 'db.php'; // Pastikan file db.php berisi koneksi database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Manajemen Transportasi</title>

    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f7fc;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
        }

        header {
            background: linear-gradient(135deg, #0099cc, #006bb3);
            color: white;
            padding: 20px 40px;
            text-align: center;
            font-size: 2.5em;
            letter-spacing: 2px;
            margin-top: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            width: 80%;
            max-width: 900px;
            text-transform: uppercase;
        }

        .container {
            display: flex;
            flex-grow: 1;
            width: 100%;
            justify-content: center;
            align-items: flex-start;
            margin-top: 40px;
        }

        /* Sidebar Menu */
        .menu {
            width: 250px;
            background-color: #ffffff;
            padding: 30px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .menu button {
            display: block;
            width: 100%;
            margin: 15px 0;
            padding: 15px;
            border: none;
            background-color: #008CBA;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        .menu button:hover {
            background-color: #0077a3;
            transform: translateY(-3px);
        }

        .menu button:active {
            background-color: #006288;
        }

        /* Main Content Area */
        main {
            flex-grow: 1;
            padding: 40px 30px;
            background-color: #ffffff;
            box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            margin: 30px;
            width: 80%;
            max-width: 900px;
        }

        h2 {
            color: #333;
            font-size: 2em;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .form {
            background-color: #fafafa;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .form:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-size: 16px;
            font-weight: 500;
            color: #555;
        }

        input, select {
            padding: 15px;
            font-size: 16px;
            border: 2px solid #ddd;
            border-radius: 10px;
            transition: border-color 0.3s ease;
        }

        input:focus, select:focus {
            border-color: #008CBA;
            outline: none;
        }

        button {
            padding: 15px;
            font-size: 18px;
            color: white;
            background-color: #006bb3;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #00599f;
        }

        button:active {
            background-color: #004d8a;
        }

        .hidden {
            display: none;
        }

        /* Responsive Layout */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                margin: 0;
            }

            .menu {
                width: 100%;
                padding: 20px;
                box-shadow: none;
            }

            main {
                margin: 20px 0;
                padding: 20px;
            }

            .menu button {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <header>
        Sistem Informasi Manajemen Transportasi
    </header>
    <div class="container">
        <aside class="menu">
            <button onclick="showForm('formKendaraan')">Input Kendaraan</button>
            <button onclick="showForm('formRute')">Input Rute</button>
            <button onclick="window.location.href='info_kendaraan.php'">Info Kendaraan</button>
            <button onclick="window.location.href='info_rute.php'">Info Rute</button>
        </aside>
        
        <main>
            <!-- Form Input Kendaraan -->
            <div id="formKendaraan" class="form hidden">
                <h2>Form Input Kendaraan</h2>
                <form action="proses.php" method="POST">
                    <label for="kendaraan_id">ID Kendaraan:</label>
                    <input type="text" id="kendaraan_id" name="kendaraan_id" placeholder="Contoh: KEND-001" required>

                    <label for="nama">Nama Kendaraan:</label>
                    <input type="text" id="nama" name="nama" placeholder="Contoh: Bus Pariwisata" required>

                    <label for="no_plat">Nomor Plat Kendaraan:</label>
                    <input type="text" id="no_plat" name="no_plat" placeholder="Contoh: B 1234 CD" required>

                    <label for="tipe">Tipe Kendaraan:</label>
                    <select id="tipe" name="tipe" required>
                        <option value="Bus">Bus</option>
                        <option value="Truk">Truk</option>
                        <option value="Mobil">Mobil</option>
                    </select>

                    <label for="warna">Warna Kendaraan:</label>
                    <input type="text" id="warna" name="warna" placeholder="Contoh: Merah" required>

                    <label for="bahan_bakar">Jenis Bahan Bakar:</label>
                    <select id="bahan_bakar" name="bahan_bakar" required>
                        <option value="Bensin">Bensin</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Gas">Gas</option>
                    </select>

                    <button type="submit" name="submit_kendaraan">Simpan</button>
                </form>
            </div>

            <!-- Form Input Rute -->
            <div id="formRute" class="form hidden">
                <h2>Form Input Rute</h2>
                <form action="proses.php" method="POST">
                    <label for="asal">Asal:</label>
                    <input type="text" id="asal" name="asal" placeholder="Contoh: Jakarta" required>

                    <label for="tujuan">Tujuan:</label>
                    <input type="text" id="tujuan" name="tujuan" placeholder="Contoh: Bandung" required>

                    <label for="tgl_operasi">Tanggal Operasi:</label>
                    <input type="date" id="tgl_operasi" name="tgl_operasi" required>

                    <label for="status">Status Rute:</label>
                    <select id="status" name="status" required>
                        <option value="Aktif">Aktif</option>
                        <option value="Non-Aktif">Non-Aktif</option>
                    </select>

                    <button type="submit" name="submit_rute">Simpan</button>
                </form>
            </div>
        </main>
    </div>

    <script>
        // Fungsi untuk menampilkan form sesuai tombol yang diklik
        function showForm(formId) {
            const forms = document.querySelectorAll('.form');
            forms.forEach(form => form.classList.add('hidden')); // Menyembunyikan semua form

            const selectedForm = document.getElementById(formId);
            if (selectedForm) {
                selectedForm.classList.remove('hidden'); // Menampilkan form yang dipilih
            }
        }
    </script>
</body>
</html>

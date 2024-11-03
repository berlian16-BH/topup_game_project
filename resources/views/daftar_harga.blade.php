<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel dengan Pencarian dan Show Entries</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 100px;
            color: white; /* Menambahkan warna putih untuk teks */
        }

        .card {
            background-color: rgba(211, 211, 211, 0.3);
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
        }

        h2 {
            color: white; /* Menambahkan warna putih untuk judul */
            text-align: left;
            margin-left: 8px;
            font-size: 20px;
        }

        #produkTable {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background-color: white; /* Mengubah latar belakang tabel menjadi hitam */
            overflow: hidden;
            border-radius: 8px;
        }

        #produkTable thead th {
            background-color: black;
            color: white;
            padding: 10px;
            font-weight: bold;
            text-align: center;
            border-right: 1px solid #ccc;
        }

        #produkTable thead th:last-child {
            border-right: none;
        }

        #produkTable tbody {
            background-color: white; /* Mengubah latar belakang tbody menjadi hitam */
        }

        #produkTable tbody td {
            padding: 12px;
            text-align: center;
            color: white; /* Mengubah warna teks isi tabel menjadi hitam */
            background-color: black; /* Mengubah latar belakang isi tabel menjadi hitam */
            border-right: 1px solid #ccc;
        }

        #produkTable tbody td:last-child {
            border-right: none;
        }

        .status-card {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 8px;
            color: white; /* Ubah warna teks status sesuai kebutuhan */
            text-align: center;
        }

        .status-available {
            background-color: #4CAF50;
        }

        .status-unavailable {
            background-color: #F44336;
        }

        .dataTables_length, .dataTables_filter {
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white; /* Menambahkan warna teks putih */
        }

        .dataTables_filter input {
            padding: 5px;
            border-radius: 4px;
            border: 1px solid white;
            background-color: white; /* Ubah menjadi putih */
            color: black; /* Ubah warna teks agar terlihat jelas */
        }

        .dataTables_filter input:focus {
            background-color: #e0e0e0; /* Ganti latar belakang saat fokus */
            border: 1px solid #4CAF50; /* Ganti border saat fokus */
            outline: none; /* Hilangkan outline default */
        }

        .dataTables_length select {
            padding: 5px;
            border-radius: 4px;
            border: 1px solid white;
        }

        .dataTables_wrapper .dataTables_info,
        .dataTables_wrapper .dataTables_paginate,
        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter {
            color: white; /* Mengubah warna teks menjadi putih */
        }
        hr {
            border: 1px solid white; /* Gaya garis bawah */
            margin: 10px 0; /* Margin atas dan bawah */
        }

    </style>
</head>
<body>

<div class="card">
    <h2>Daftar Harga</h2>
    <hr> <!-- Garis di bawah judul -->
    <table id="produkTable" class="display">
        <thead>
            <tr>
                <th>PID</th>
                <th>Produk</th>
                <th>Item</th>
                <th>Harga</th>
                <th>Akun Gold</th>
                <th>Akun Platinum</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>3550</td><td></td><td>LifeAfter 5768 Credits</td><td>Rp. 1.016.609</td><td>Rp. 1.006.739</td><td>Rp. 996.869</td><td><div class="status-card status-available">Tersedia</div></td></tr>
            <tr><td>2896</td><td></td><td>MOBILELEGEND - 3 Diamond</td><td>Rp. 1.026</td><td>Rp. 1.016</td><td>Rp. 1.006</td><td><div class="status-card status-available">Tersedia</div></td></tr>
            <tr><td>3327</td><td></td><td>Google Play Rp. 1.000.000 INDONESIA REGION</td><td>Rp. 1.029.600</td><td>Rp. 1.019.700</td><td>Rp. 1.009.800</td><td><div class="status-card status-available">Tersedia</div></td></tr>
            <tr><td>3617</td><td></td><td>Ace Racer 5880 Tokens</td><td>Rp. 1.074.134</td><td>Rp. 1.063.706</td><td>Rp. 1.053.277</td><td><div class="status-card status-available">Tersedia</div></td></tr>
            <tr><td>2908</td><td></td><td>MOBILELEGEND - 4394 Diamond</td><td>Rp. 1.084.051</td><td>Rp. 1.073.527</td><td>Rp. 1.063.002</td><td><div class="status-card status-available">Tersedia</div></td></tr>
            <tr><td>3309</td><td></td><td>Eggy Party 6.880 Eggy Coins + 903 Bonus</td><td>Rp. 1.089.766</td><td>Rp. 1.079.186</td><td>Rp. 1.068.605</td><td><div class="status-card status-available">Tersedia</div></td></tr>
            <tr><td>3370</td><td></td><td>Honor of Kings 8.000 Tokens + Bonus</td><td>Rp. 1.133.357</td><td>Rp. 1.122.354</td><td>Rp. 1.111.350</td><td><div class="status-card status-available">Tersedia</div></td></tr>
            <tr><td>3145</td><td></td><td>Metal Slug Awakening 6.500 Ruby</td><td>Rp. 1.151.360</td><td>Rp. 1.140.182</td><td>Rp. 1.129.003</td><td><div class="status-card status-available">Tersedia</div></td></tr>
            <tr><td>2942</td><td></td><td>Genshin Impact 6480+1600 Genesis Crystals</td><td>Rp. 1.158.378</td><td>Rp. 1.147.132</td><td>Rp. 1.135.885</td><td><div class="status-card status-unavailable">Tidak Tersedia</div></td></tr>
            <tr><td>3536</td><td></td><td>Marvel Super War 6000 Star Credits</td><td>Rp. 1.164.014</td><td>Rp. 1.152.713</td><td>Rp. 1.141.412</td><td><div class="status-card status-available">Tersedia</div></td></tr>
            <tr><td>2871</td><td></td><td>MOBILELEGEND - 1412 Diamond</td><td>Rp. 1.176.054</td><td>Rp. 1.164.697</td><td>Rp. 1.153.340</td><td><div class="status-card status-available">Tersedia</div></td></tr>
            <tr><td>3568</td><td></td><td>Kingdom: The Blood 6000 Kingdom Point</td><td>Rp. 1.179.021</td><td>Rp. 1.167.645</td><td>Rp. 1.156.269</td><td><div class="status-card status-available">Tersedia</div></td></tr>
            <tr><td>3534</td><td></td><td>Blade & Soul Revolution 6000 Gold</td><td>Rp. 1.184.776</td><td>Rp. 1.173.386</td><td>Rp. 1.161.996</td><td><div class="status-card status-available">Tersedia</div></td></tr>
            <tr><td>2902</td><td></td><td>MOBILELEGEND - 1710 Diamond</td><td>Rp. 1.189.689</td><td>Rp. 1.178.272</td><td>Rp. 1.166.855</td><td><div class="status-card status-available">Tersedia</div></td></tr>
            <tr><td>2846</td><td></td><td>Call of Duty 1.200 CP</td><td>Rp. 1.190.031</td><td>Rp. 1.178.613</td><td>Rp. 1.167.195</td><td><div class="status-card status-available">Tersedia</div></td></tr>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
        $('#produkTable').DataTable({
            "lengthMenu": [8,10, 25, 50, 100],
            "language": {
                "lengthMenu": "Tampilkan _MENU_ entri",
                "search": "Cari:",
                "zeroRecords": "Tidak ada hasil yang ditemukan",
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                "infoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
                "infoFiltered": "(difilter dari _MAX_ total entri)",
                "paginate": {
                    "next": "Berikutnya",
                    "previous": "Sebelumnya"
                }
            }
        });
    });
</script>

</body>
</html>

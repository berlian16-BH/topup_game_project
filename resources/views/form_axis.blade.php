<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan Menu</title>
    <style>
        /* Gaya CSS yang ada tetap sama */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .card-genshin {
            background-color: rgba(128, 128, 128, 0.3);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 700px;
            color: #333;
            text-align: center;
            position: relative;
            margin-bottom: 20px;
        }

        .underline {
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background-color: white;
            margin: 10px auto;
        }

        .instruction-genshin {
            margin-top: 20px;
            margin-right: 450px;
            font-size: 14px;
            color: white;
        }

        .top-up-card {
            background-color: rgba(128, 128, 128, 0.3);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 700px;
            color: #333;
            text-align: center;
            position: relative;
            margin-bottom: 20px;
        }

        .top-up-card h2 {
            margin: 0;
            font-size: 16px;
            color: white;
            margin-right: 400px;
            align-items: center;
            display: flex;
            font-weight: bold;
        }

        .icon-left {
            width: 30px;
            height: auto;
            vertical-align: middle;
            margin-right: 10px;
        }

        .top-up-white-card {
    background-color: #003366;
    border-radius: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.9);
    padding: 10px 20px; /* Atur padding untuk memberikan ruang di dalam kartu */
    color: #333;
    text-align: center;
    margin-top: 20px;
    display: inline-flex; /* Ubah menjadi inline-flex agar kartu mengikuti panjang teks */
    align-items: center;
    justify-content: center;
    font-size: 18px;
    position: relative;
    cursor: pointer; /* Tambahkan kursor pointer */
}

.top-up-white-card p {
    margin: 0;
    font-size: 12px;
    color: white;
    /* Hapus pengaturan posisi absolut agar teks tidak keluar dari kartu */
}

        .genshin-card-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 kolom */
            gap: 20px; /* Jarak antar kartu */
            padding: 20px;
        }

        .genshin-card {
            background-color: #ADD8E6;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.9);
            border-radius: 8px;
            padding: 10px;
            width: 190px;
            color: black;
            text-align: left;
            margin-top: 10px;
            transition: box-shadow 0.3s ease;
            cursor: pointer;
        }

        .genshin-card:hover {
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.6);
            transform: scale(1.05);
        }

        .genshin-card.active {
            border: 2px solid #CCCCFF;
            box-shadow: 0 0 30px rgba(255, 255, 255, 1);
        }

        .genshin-card h3, .genshin-card h1, .genshin-card h4, .genshin-card p {
            margin: 5px 0;
            font-size: 14px;
            font-weight: bold;
        }

        .genshin-card p {
            color: #FF8C00;
        }

        .second-container {
            margin-top: 20px;
            margin-right: 136px;
            width: 433px;
        }

        /* CSS untuk menampilkan harga yang dipilih */
        .selected-price {
            float: right;
            font-size: 18px;
            color: greenyellow;
        }


        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .menuCard {
            background-color: rgba(128, 128, 128, 0.3);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 700px;
            color: #333;
            text-align: center;
            position: relative;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .menuCard h1 {
            margin: 0;
            font-size: 20px;
            color: white;
            display: flex;
            align-items: center;
        }

        .menuCard h1 img {
            width: 30px;
            height: auto;
            margin-right: 10px;
            font-weight: bold;
        }

        .menuUnderline {
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background-color: white;
            margin: 10px auto;
        }

        .menuInput {
            margin-top: 20px;
            padding: 10px;
            width: 98%;
            border-radius: 100px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .menuInstruction {
            margin-top: 10px;
            margin-right: 310px;
            font-size: 14px;
            color: white;
            text-align: right;
        }

        .menuButton {
            background-color: rgba(128, 128, 128, 0.3);
            color: white;
            border: none;
            border-radius: 100px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            width: 98%;
        }

        .menuButton:hover {
            background-color: rgba(128, 128, 128, 0.5);
        }

        /* Modal Styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            background-color: rgba(0, 0, 0, 0.5); /* Black background with opacity */
            justify-content: center;
            align-items: center;
        }

        .modalContent {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            width: 300px;
            color: black;
        }

        .closeButton {
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px; /* Menambahkan jarak antara tombol Beli Sekarang dan tombol Tutup */
        }

        .successButton {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px; /* Menambahkan jarak antara tombol Beli Sekarang dan tombol Tutup */
        }
      
        body {
            font-family: Arial, sans-serif; /* Mengatur jenis font */
            display: flex; /* Menggunakan flexbox untuk penataan */
            flex-direction: column; /* Mengatur flex ke arah kolom */
            align-items: center; /* Memusatkan elemen secara horizontal */
            padding: 20px; /* Menambahkan padding di sekitar konten */
        }

        /* Gaya untuk card */
        .card {
            background-color: rgba(128, 128, 128, 0.3); /* Latar belakang abu-abu transparan */
            border-radius: 8px; /* Sudut melengkung */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Bayangan card */
            padding: 20px; /* Padding di dalam card */
            width: 700px; /* Lebar card */
            color: #333; /* Warna teks di dalam card */
            text-align: center; /* Memusatkan teks dalam card */
            position: relative; /* Agar posisi garis dapat diatur */
            margin-bottom: 20px; /* Jarak bawah untuk card */
        }

        .card h1 {
            margin: 0; /* Menghilangkan margin default */
            font-size: 20px; /* Ukuran font judul card */
            color: white; /* Warna teks judul */
            display: flex; /* Menggunakan flexbox untuk judul */
            align-items: center; /* Memusatkan gambar dan teks secara vertikal */
        }

        .card h1 img {
            width: 30px; /* Lebar gambar */
            height: auto; /* Tinggi otomatis untuk menjaga proporsi */
            margin-right: 10px; /* Jarak antara gambar dan teks */
            font-weight: bold;
        }

        .underline {
            content: ''; /* Menghasilkan elemen kosong */
            display: block; /* Menampilkan sebagai block */
            width: 100%; /* Panjang garis */
            height: 2px; /* Ketebalan garis */
            background-color: white; /* Warna garis */
            margin: 10px auto; /* Mengatur margin untuk memusatkan garis */
        }

        /* Gaya untuk form input */
        .user-id-input {
            margin-top: 20px; /* Jarak atas antara garis dan form */
            padding: 10px; /* Padding di dalam input */
            width: 100%; /* Lebar input */
            border-radius: 100px; /* Sudut melengkung */
            border: 1px solid #ccc; /* Warna border */
            font-size: 16px; /* Ukuran font input */
        }

        /* Gaya untuk dropdown */
        .region-dropdown {
            margin-top: 20px; /* Jarak atas antara garis dan dropdown */
            padding: 10px; /* Padding di dalam dropdown */
            width: 50%; /* Lebar dropdown */
            border-radius: 100px; /* Sudut melengkung */
            border: 1px solid #ccc; /* Warna border */
            font-size: 16px; /* Ukuran font dropdown */
            margin-left: 10px; /* Jarak antara input dan dropdown */
            cursor: pointer; /* Menampilkan kursor pointer pada dropdown */
            position: relative; /* Memastikan dropdown berfungsi dengan baik */
            z-index: 1; /* Memastikan dropdown di atas elemen lainnya */
            appearance: none; /* Menghilangkan panah dropdown default */
            background: white url('arrow.png') no-repeat right 15px center; /* Menambahkan gambar panah ke kanan dropdown */
            background-size: 15px; /* Ukuran gambar panah */
        }

        /* Gaya untuk instruksi */
        .instruction2 {
            margin-top: 20px; /* Jarak atas untuk instruksi */
            margin-right: 470px;
            font-size: 14px; /* Ukuran font untuk instruksi */
            color: white; /* Warna teks untuk instruksi */
        }



        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #f0f0f0;
        }

        .title-payment {
            font-size: 24px;
            margin: 20px 0;
            color: white;
        }

        .underline-payment {
            content: ''; 
            display: block; 
            width: 450%; 
            height: 2px; 
            background-color: white; 
            margin: 10px 0; 
        }

        .payment-card {
            background-color: rgba(128, 128, 128, 0.3);
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
            padding: 20px;
            width: 700px;
            color: #333;
            display: flex;
            flex-direction: column; 
            justify-content: flex-start; 
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .payment-card img {
            width: 30px; 
            height: auto; 
            vertical-align: middle; 
            margin-right: 10px; 
        }

        .payment-card .text-container {
            display: flex;
            flex-direction: column; 
            align-items: flex-start; 
        }

        .payment-card h5 {
            margin: 0; 
            font-size: 18px; 
            color: white; 
            display: flex; 
            align-items: center; 
        }

        .payment-card .underline {
            width: 390%; 
            margin: 10px 0;
            margin-top: 10px; 
        }

        .inner-card {
            display: flex;
            flex-direction: column; 
            border-radius: 8px; 
            width: 95%; 
            margin-top: 20px; 
            cursor: pointer; 
        }

        .inner-card .color-1 {
            background-color: rgba(128, 128, 128, 0.3); 
            border-radius: 8px 8px 0 0; 
            padding: 15px;
            color: white; 
        }

        .inner-card .color-2 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(255, 255, 255, 1);
            border-radius: 0 0 8px 8px;
            padding: 10px;
            position: relative;
            width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .inner-card h6 {
            margin: 0; 
            font-size: 16px; 
        }

        .inner-card h7 {
            margin: 0; 
            font-size: 10px; 
        }

        .inner-card p {
            margin: 0; 
            font-size: 10px; 
        }


        .arrow {
            width: 15px;
            height: auto; 
            vertical-align: middle; 
        }

        .arrow-up {
            margin-left: auto; /* Align arrow to the right */
        }

        .arrow-down {
            transform: rotate(180deg); /* Rotate the arrow down */
        }

        .card-container {
            display: flex; /* Change to flex for horizontal layout */
            flex-wrap: wrap; /* Allow wrapping for multiple rows */
            justify-content: space-between; /* Space between cards */
            width: 100%; /* Set width to 100% */
            max-height: 600px; /* Set max height to ensure only 3 rows */
            overflow-y: auto; /* Add scroll if content overflows */
        }

        .additional-card {
            display: none; /* Sembunyikan kartu tambahan secara default */
            flex-direction: column;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px;
            margin: 10px; /* Margin around each card */
            color: black;
            transition: box-shadow 0.3s ease;
            border-radius: 8px; /* Add border-radius for styling */
            cursor: pointer; /* Change cursor to pointer */
            flex: 1 1 25%; /* Allow the cards to grow and shrink with a basis of 30% */
            max-width: 30%; /* Set a max width for cards */
            box-sizing: border-box; /* Include padding and margin in total width */
        }

        .additional-card img {
            width: 90px;
            margin-bottom: 10px;
            margin-top: -20px;
        }

        .underline-qris {
            width: 100%;
            height: 2px;
            background-color: black;
            margin: 10px 0;
            margin-top: -30px;
        }

        .glow {
            box-shadow: 0 0 10px rgba(0, 0, 0, 1), 0 0 20px rgba(255, 255, 255, 1), 0 0 30px rgba(255, 255, 255, 1);
        }

        .color-2 img.qris-image {
            width: 70px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 20px; /* Align it to the right */
            left: 340px;
        }

        .color-2 img.ovo-image {
            width: 70px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 520px; /* Align it to the right */
            left: 380px;
        }

        .color-2 img.dana-image {
            width: 80px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 520px; /* Align it to the right */
            left: 420px;
        }

        .color-2 img.shopeepay-image {
            width: 110px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 520px; /* Align it to the right */
            left: 470px;
        }
        
        .color-2 img.logo-image {
            width: 40px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 520px; /* Align it to the right */
            left: 500px;
        }

        .color-2 img.logo2-image {
            width: 50px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 520px; /* Align it to the right */
            left: 500px;
        }
        /* New class for red text */
        .highlighted {
            color: red; /* Change text color to red */
        }


        .color-2 img.bni-image {
            width: 50px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 540px; /* Align it to the right */
            left: 250px;
        }

        .color-2 img.bri-image {
            width: 50px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 520px; /* Align it to the right */
            left: 300px;
        }

        .color-2 img.cimb-image {
            width: 50px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 520px; /* Align it to the right */
            left: 350px;
        }

        .color-2 img.permata-image {
            width: 50px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 520px; /* Align it to the right */
            left: 400px;
        }
        .color-2 img.mandiri-image {
            width: 50px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 520px; /* Align it to the right */
            left: 450px;
        }
        .color-2 img.maybank-image {
            width: 50px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 520px; /* Align it to the right */
            left: 500px;
        }
        .card-container {
    display: flex;
}

.additional-card {
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 16px;
    margin: 8px;
    cursor: pointer;
    transition: box-shadow 0.3s, transform 0.3s; /* Transisi untuk efek cahaya */
}

.additional-card.active {
    box-shadow: 0 0 15px rgba(255, 255, 255, 0.7);
    transform: scale(1.05); /* Menambah sedikit ukuran card untuk efek */
}


body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .diskon-card {
            background-color: rgba(128, 128, 128, 0.3);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 700px;
            color: #333;
            display: flex;
            flex-direction: column;
            margin-top: 20px;
            position: relative;
        }

        .diskon-image {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            cursor: pointer;
        }

        .diskon-text {
            font-size: 18px;
            color: white;
            margin-bottom: -5px;
        }

        .diskon-divider {
            width: 100%;
            height: 2px;
            background-color: #ddd;
            margin: 10px 0;
        }

        .flex-container {
            display: flex;
            align-items: center;
        }

        .voucher-input-container {
            display: flex;
            align-items: center;
            margin-top: 20px;
            width: 95%;
        }

        .voucher-input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            flex: 1;
            margin-right: 10px;
            width: 100%;
            max-width: 600px;
        }

        .apply-button {
            padding: 10px 15px;
            font-size: 16px;
            background-color: rgba(128, 128, 128, 0.3);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 150px;
        }

        /* Modal Styles */
        .notifikasi-modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            background-color: rgba(0, 0, 0, 0.5); /* Black background with opacity */
            justify-content: center;
            align-items: center;
        }

        .modalContent {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            width: 300px;
            color: black;
        }

        .closeButton {
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px; /* Space between buttons */
        }

        .notification {
            margin-top: 10px;
            font-size: 16px;
            display: flex; /* Use flexbox for centering */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            height: 40px; /* Set a height for the notification box */
        }

        .success {
            color: green; /* Green color for success message */
        }

        .error {
            color: red; /* Red color for error message */
        } 

        .instruction {
            margin-top: 20px; /* Jarak atas untuk instruksi */
            margin-right: 10px;
            font-size: 14px; /* Ukuran font untuk instruksi */
            color: white; /* Warna teks untuk instruksi */
        }
    .top-up-container {
    display: flex; /* Gunakan flexbox untuk penyelarasan horizontal */
    justify-content: flex-start; /* Pindahkan item ke kiri */
    gap: 20px; /* Jarak antara item */
    margin-top: 20px; /* Tambahkan margin di atas */
    margin-left: 0; /* Pastikan tidak ada margin kiri */
  }
  .selected {
    border: 1px solid black; /* Border/figura putih */
    transition: border 0.3s ease-in-out;
}

.top-up-white-card:hover {
    background-color: #005599;
}
    </style>
</head>
<body>

<div class="card">
        <h1>
            <img src="one.png" alt="Icon"> Masukkan Data</h1>
        <div class="underline"></div> <!-- Garis di bawah judul -->

        <!-- Form untuk User ID dan Dropdown -->
        <div style="display: flex; justify-content: center; align-items: center;">
            <input type="text" class="user-id-input" placeholder="Maskkan Nomor" required id="userId">
        </div>

        <!-- Instruksi di bawah form -->
        <p class="instruction2">Masukkan nomor HP anda.</p>
    </div>
    <div class="top-up-card">
        <h2>
            <img src="two.png" alt="Icon" class="icon-left">Pilih Nominal Top Up
            
        </h2>
        
        <div class="underline"></div> 
         <!-- Tempat untuk menampilkan harga yang dipilih -->
    
         <div class="top-up-container">
            <div class="top-up-white-card" id="topUpBtn">
                <p>Top Up</p>
            </div>
            <div class="top-up-white-card" id="perpanjangBtn">
                <p>Perpanjang Masa Aktif</p>
            </div>
            <div class="top-up-white-card" id="pulsaBtn">
                <p>Pulsa transfer</p>
            </div>
            <div class="top-up-white-card" id="dataBtn">
                <p>Data internet</p>
            </div>
        </div>


        <div id="topUpCards" class="genshin-card-container">
            <div class="genshin-card" data-price="6027" data-item="Axis 5.000">
                <h3>Axis 5.000</h3>
                <p>RP 6,027</p>
            </div>
            <div class="genshin-card" data-price="10681" data-item="Axis 10.000">
                <h3>Axis 10.000</h3>
                <p>RP 10,681</p>
            </div>
            <div class="genshin-card" data-price="21017" data-item="Axis 20.000">
                <h3>Axis 20.000</h3>
                <p>RP 21,017</p>
            </div>
            <div class="genshin-card" data-price="25549" data-item="Axis 25.000">
                <h3>Axis 25.000</h3>
                <p>RP 25,549</p>
            </div>
            <div class="genshin-card" data-price="51047" data-item="Axis 50.000">
                <h3>Axis 50.000</h3>
                <p>RP 51,047</p>
            </div>
            <div class="genshin-card" data-price="101615" data-item="Axis 100.000">
                <h3>Axis 100.000</h3>
                <p>RP 101,615</p>
            </div>
        </div>

        
        <div id="perpanjangCards" class="genshin-card-container" style="display: none;">
            <div class="genshin-card" data-price="5459" data-item="Axis Tambah Masa Aktif Kartu 30 Hari">
                <h3>Axis Tambah Masa</h3>
                <h1>Aktif Kartu 30 Hari</h1>
                <p>RP 5,459</p>
            </div>
        </div>
        <div id="pulsaCards" class="genshin-card-container" style="display: none;">
            <div class="genshin-card" data-price="5789" data-item="Axis Pulsa Transfer 5.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>5.000</h1>
                <p>RP 5,789</p>
            </div>
            <div class="genshin-card" data-price="10653" data-item="Axis Pulsa Transfer 10.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>10.000</h1>
                <p>RP 10,653</p>
            </div>
            <div class="genshin-card" data-price="15290" data-item="Axis Pulsa Transfer 15.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>15.000</h1>
                <p>RP 15,290</p>
            </div>
            <div class="genshin-card" data-price="20116" data-item="Axis Pulsa Transfer 20.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>20.000</h1>
                <p>RP 20,116</p>
            </div>
            <div class="genshin-card" data-price="25426" data-item="Axis Pulsa Transfer 25.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>25.000</h1>
                <p>RP 25,426</p>
            </div>
            <div class="genshin-card" data-price="30246" data-item="Axis Pulsa Transfer 30.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>30.000</h1>
                <p>RP 30,246</p>
            </div>
            <div class="genshin-card" data-price="35027" data-item="Axis Pulsa Transfer 35.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>35.000</h1>
                <p>RP 35,027</p>
            </div>
            <div class="genshin-card" data-price="39822" data-item="Axis Pulsa Transfer 40.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>40.000</h1>
                <p>RP 39,822</p>
            </div>
            <div class="genshin-card" data-price="50032" data-item="Axis Pulsa Transfer 50.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>50.000</h1>
                <p>RP 50,032</p>
            </div>
            <div class="genshin-card" data-price="54685" data-item="Axis Pulsa Transfer 55.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>55.000</h1>
                <p>RP 54,685</p>
            </div>
            <div class="genshin-card" data-price="59479" data-item="Axis Pulsa Transfer 60.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>60.000</h1>
                <p>RP 59,479</p>
            </div>
            <div class="genshin-card" data-price="65067" data-item="Axis Pulsa Transfer 65.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>65.000</h1>
                <p>RP 65,067</p>
            </div>
            <div class="genshin-card" data-price="68923" data-item="Axis Pulsa Transfer 70.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>70.000</h1>
                <p>RP 68,923</p>
            </div>
            <div class="genshin-card" data-price="73703" data-item="Axis Pulsa Transfer 75.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>75.000</h1>
                <p>RP 73,703</p>
            </div>
            <div class="genshin-card" data-price="78482" data-item="Axis Pulsa Transfer 80.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>80.000</h1>
                <p>RP 78,482</p>
            </div>
            <div class="genshin-card" data-price="83261" data-item="Axis Pulsa Transfer 85.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>85.000</h1>
                <p>RP 83,261</p>
            </div>
            <div class="genshin-card" data-price="88911" data-item="Axis Pulsa Transfer 90.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>90.000</h1>
                <p>RP 88,911</p>
            </div>
            <div class="genshin-card" data-price="100219" data-item="Axis Pulsa Transfer 100.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>100.000</h1>
                <p>RP 100,219</p>
            </div>
            <div class="genshin-card" data-price="104916" data-item="Axis Pulsa Transfer 105.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>105.000</h1>
                <p>RP 104,916</p>
            </div>
            <div class="genshin-card" data-price="109789" data-item="Axis Pulsa Transfer 110.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>110.000</h1>
                <p>RP 109,798</p>
            </div>
            <div class="genshin-card" data-price="117326" data-item="Axis Pulsa Transfer 115.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>115.000</h1>
                <p>RP 117,326</p>
            </div>
            <div class="genshin-card" data-price="119480" data-item="Axis Pulsa Transfer 120.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>120.000</h1>
                <p>RP 119,480</p>
            </div>
            <div class="genshin-card" data-price="126742" data-item="Axis Pulsa Transfer 125.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>125.000</h1>
                <p>RP 126,742</p>
            </div>
            <div class="genshin-card" data-price="141419" data-item="Axis Pulsa Transfer 140.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>140.000</h1>
                <p>RP 141,419</p>
            </div>
            <div class="genshin-card" data-price="142480" data-item="Axis Pulsa Transfer 155.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>155.000</h1>
                <p>RP 142,480</p>
            </div>
            <div class="genshin-card" data-price="144200" data-item="Axis Pulsa Transfer 150.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>150.000</h1>
                <p>RP 144,200</p>
            </div>
            <div class="genshin-card" data-price="146960" data-item="Axis Pulsa Transfer 160.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>160.000</h1>
                <p>RP 146,960<p>
            </div>
            <div class="genshin-card" data-price="151411" data-item="Axis Pulsa Transfer 165.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>165.000</h1>
                <p>RP 151,441</p>
            </div>
            <div class="genshin-card" data-price="160402" data-item="Axis Pulsa Transfer 175.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>175.000</h1>
                <p>RP 160,402</p>
            </div>
            <div class="genshin-card" data-price="164882" data-item="Axis Pulsa Transfer 180.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>180.000</h1>
                <p>RP 164,882</p>
            </div>
            <div class="genshin-card" data-price="167212" data-item="Axis Pulsa Transfer 170.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>170.000</h1>
                <p>RP 167,212</p>
            </div>
            <div class="genshin-card" data-price="169363" data-item="Axis Pulsa Transfer 185.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>185.000</h1>
                <p>RP 169,363</p>
            </div>
            <div class="genshin-card" data-price="173843" data-item="Axis Pulsa Transfer 190.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>190.000</h1>
                <p>RP 173,843</p>
            </div>
            <div class="genshin-card" data-price="178324" data-item="Axis Pulsa Transfer 195.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>195.000</h1>
                <p>RP 178,324</p>
            </div>
            <div class="genshin-card" data-price="195916" data-item="Axis Pulsa Transfer 200.000">
                <h3>Axis Pulsa Transfer</h3>
                <h1>200.000</h1>
                <p>RP 195,916</p>
            </div>
        </div>
        <div id="dataCards" class="genshin-card-container" style="display: none;">
        <div class="genshin-card" data-price="6180" data-item="Axis Dara Paket Internet 3 GB 6 jam ">
                <h3>Axis Dara Paket</h3>
                <h1>Internet 3 GB 6 jam</h1>
                <p>RP 6,180</p>
            </div>
            <div class="genshin-card" data-price="7210" data-item="Axis Dara Paket Internet 2.5 GB 1 Hari">
                <h3>Axis Data Mini 2.5GB</h3>
                <h1>1 Hari</h1>
                <p>RP 7,210</p>
            </div>
            <div class="genshin-card" data-price="10094" data-item="Axis Dara Paket Internet 2.5 GB 6 Hari">
                <h3>Axis Data Mini 2.5GB</h3>
                <h1>2 Hari</h1>
                <p>RP 10,094</p>
            </div>
            <div class="genshin-card" data-price="11340" data-item="Axis Dara Paket Internet 3 GB 3 Hari">
                <h3>Axis Data Mini 3 GB</h3>
                <h1>3 Hari</h1>
                <p>RP 11,340</p>
            </div>
            <div class="genshin-card" data-price="12875" data-item="Axis Dara Paket Internet 2.5 GB 5 Hari">
                <h3>Axis Data Mini 2.5 GB</h3>
                <h1>5 Hari</h1>
                <p>RP 12,875</p>
            </div>
            <div class="genshin-card" data-price="15656" data-item="Axis Dara Paket Internet 6 GB 3 Hari">
                <h3>Axis Data Mini 6 GB</h3>
                <h1>3 Hari</h1>
                <p>RP 15,656</p>
            </div>
            <div class="genshin-card" data-price="15965" data-item="Axis Dara Paket BRONET 2 GB 30 Hari">
                <h3>Axis Data BRONET 2GB</h3>
                <h1>30 Hari</h1>
                <p>RP 15,965</p>
            </div>
            <div class="genshin-card" data-price="18334" data-item="Axis Dara Paket BRONET 3 GB 30 Hari">
                <h3>Axis Data BRONET 3GB</h3>
                <h1>30 Hari</h1>
                <p>RP 18,334</p>
            </div>
            <div class="genshin-card" data-price="22145" data-item="Axis Dara Paket Internet 8.5 GB 7 Hari">
                <h3>Axis Data Mini 8.5 GB</h3>
                <h1>7 Hari</h1>
                <p>RP 22,145</p>
            </div>
            <div class="genshin-card" data-price="23402" data-item="Axis Dara Paket Internet 6 GB 7 Hari">
                <h3>Axis Data Mini 6 GB</h3>
                <h1>7 Hari</h1>
                <p>RP 23,402</p>
            </div>
            <div class="genshin-card" data-price="29046" data-item="Axis Dara Paket Internet 10 GB 5 Hari">
                <h3>Axis Data Mini 10 GB</h3>
                <h1>5 Hari</h1>
                <p>RP 29,046</p>
            </div>
            <div class="genshin-card" data-price="26986" data-item="Axis Dara Paket Internet 5 GB 15 Hari">
                <h3>Axis Data Mini 5 GB</h3>
                <h1>15 Hari</h1>
                <p>RP 26,986</p>
            </div>
            <div class="genshin-card" data-price="29046" data-item="Axis Dara Paket Internet 11 GB 7 Hari">
                <h3>Axis Data Mini 11 GB</h3>
                <h1>7 Hari</h1>
                <p>RP 29,046</p>
            </div>
            <div class="genshin-card" data-price="30900" data-item="Axis Dara Paket Internet 6 GB 30 Hari">
                <h3>Axis Data BRONET 6 GB</h3>
                <h1>30 Hari</h1>
                <p>RP 30,900</p>
            </div>
            <div class="genshin-card" data-price="39140" data-item="Axis Dara Paket Internet 8 GB 30 Hari">
                <h3>Axis Data BRONET 8 GB</h3>
                <h1>30 Hari</h1>
                <p>RP 39,140</p>
            </div>
            <div class="genshin-card" data-price="39655" data-item="Axis Dara Paket Internet 8 GB 15 Hari">
                <h3>Axis Data Mini 8 GB</h3>
                <h1>15 Hari</h1>
                <p>RP 39,655</p>
            </div>
            <div class="genshin-card" data-price="39655" data-item="Axis Dara Paket Internet 20 GB 7 Hari">
                <h3>Axis Data Mini 20 GB</h3>
                <h1>7 Hari</h1>
                <p>RP 39,655</p>
            </div>
            <div class="genshin-card" data-price="39655" data-item="Axis Dara Paket Internet 11.5 GB 15 Hari">
                <h3>Axis Data Mini 11,5 GB</h3>
                <h1>15 Hari</h1>
                <p>RP 39,655</p>
            </div>
            <div class="genshin-card" data-price="57165" data-item="Axis Dara Paket Internet 14 GB 30 Hari">
                <h3>Axis Data BRONET 14 GB</h3>
                <h1>30 Hari</h1>
                <p>RP 57,165</p>
            </div>
            <div class="genshin-card" data-price="59740" data-item="Axis Dara Paket Internet 30 GB 15 Hari">
                <h3>Axis Data Mini 30 GB</h3>
                <h1>15 Hari</h1>
                <p>RP 59,740</p>
            </div>
            <div class="genshin-card" data-price="72100" data-item="Axis Dara Paket Internet 20 GB 30 Hari">
                <h3>Axis Data Mini 20 GB</h3>
                <h1>30 Hari</h1>
                <p>RP 72,100</p>
            </div>
        </div>
       
    </div>
    
    <div class="payment-card">
        <div class="text-container">
            <h5><img src="three.png" alt="Icon"> Pilih Bayaran</h5>
            <div class="underline-payment"></div> 
        </div>

        <div class="inner-card eWallet-card">
            <div class="color-1">
            <div class="selected-price" id="selected-price-1"></div>
                <h6> E-Wallet</h6>
                <div class="card-container" id="cardContainer1">
                    <div id="additionalText1" class="additional-card" onclick="navigateToResult('Qris', event)">
                        <img src="qris.png">
                        <div class="underline-qris"></div> 
                        <h7>QRIS ( All Payment )</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                    <div id="additionalText2" class="additional-card" onclick="navigateToResult('Ovo', event)">
                        <img src="ovo.png">
                        <div class="underline-qris"></div> 
                        <h7>OVO</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                    <div id="additionalText3" class="additional-card" onclick="navigateToResult('Dana', event)">
                        <img src="dana.png">
                        <div class="underline-qris"></div> 
                        <h7>DANA</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                    <div id="additionalText4" class="additional-card" onclick="navigateToResult('ShopeePay', event)">
                        <img src="shopeepay.png">
                        <div class="underline-qris"></div> 
                        <h7>ShopeePay</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                </div>
            </div>
            <div class="color-2" onclick="toggleCards(this)">
                <span></span> 
                <img src="qris.png" alt="QRIS" class="qris-image">
                <img src="ovo.png" alt="OVO" class="ovo-image">
                <img src="dana.png" alt="DANA" class="dana-image">
                <img src="shopeepay.png" alt="ShopeePay" class="shopeepay-image">
                <img src="arrow.png" alt="Arrow" class="arrow arrow-up">
            </div>
        </div>


        <div class="inner-card virtualAccount-card">
            <div class="color-1">
            <div class="selected-price" id="selected-price-2"></div>
                <h6> Virtual Account</h6>
                <div class="card-container" id="cardContainer1">
                    <div id="additionalText1" class="additional-card" onclick="navigateToResult('BNI', event)">
                        <img src="bni.png">
                        <div class="underline-qris"></div> 
                        <h7>BNI Virtual Account</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                    <div id="additionalText2" class="additional-card" onclick="navigateToResult('BRI', event)">
                        <img src="BRI.png">
                        <div class="underline-qris"></div> 
                        <h7>BRI Virtual Account</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                    <div id="additionalText3" class="additional-card" onclick="navigateToResult('CIMB', event)">
                        <img src="CIMB.png">
                        <div class="underline-qris"></div> 
                        <h7>CIMB Virtual Account</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                    <div id="additionalText4" class="additional-card" onclick="navigateToResult('Permata', event)">
                        <img src="Permata.png">
                        <div class="underline-qris"></div> 
                        <h7>PERMATA Virtual Account</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                    <div id="additionalText4" class="additional-card" onclick="navigateToResult('Mandiri', event)">
                        <img src="mandiri.png">
                        <div class="underline-qris"></div> 
                        <h7>Mandiri Virtual Account</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                    <div id="additionalText4" class="additional-card" onclick="navigateToResult('MayBank', event)">
                        <img src="maybank.png">
                        <div class="underline-qris"></div> 
                        <h7>Maybank</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                </div>
            </div>
            <div class="color-2" onclick="toggleCards(this)">
                <span></span> 
                <img src="bni.png" alt="bni" class="bni-image">
                <img src="BRI.png" alt="bri" class="bri-image">
                <img src="CIMB.png" alt="cimb" class="cimb-image">
                <img src="Permata.png" alt="permata" class="permata-image">
                <img src="mandiri.png" alt="mandiri" class="mandiri-image">
                <img src="maybank.png" alt="maybank" class="maybank-image">
                <img src="arrow.png" alt="Arrow" class="arrow arrow-up">
            </div>
        </div>

        <div class="inner-card convenience store-card">
            <div class="color-1">
            <div class="selected-price" id="selected-price-2"></div>
                <h6>Convenience Store</h6>
                <div class="card-container" id="cardContainer1">
                    <div id="additionalText1" class="additional-card" onclick="navigateToResult('Alfamart/Pengadaian/KantorPos', event)">
                        <img src="logo2.png">
                        <div class="underline-qris"></div> 
                        <h7>Alfamart/Pegadaian/KantorPos</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                </div>
            </div>
            <div class="color-2" onclick="toggleCards(this)">
                <span></span> 
                <img src="logo2.png" alt="logo2" class="logo2-image">
                <img src="arrow.png" alt="Arrow" class="arrow arrow-up">
            </div>
        </div>




        <div class="inner-card VAZZUNIVERSE PAY-card">
            <div class="color-1">
            <div class="selected-price" id="selected-price-2"></div>
                <h6>VAZZUNIVERSE PAY</h6>
                <div class="card-container" id="cardContainer1">
                    <div id="additionalText1" class="additional-card" onclick="navigateToResult('VAZZUNIVERSE', event)">
                        <img src="logo.png">
                        <div class="underline-qris"></div> 
                        <h7>Login untuk menggunakan VAZZUNIVERSE</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                </div>
            </div>
            <div class="color-2" onclick="toggleCards(this)">
                <span></span> 
                <img src="logo.png" alt="logo" class="logo-image">
                <img src="arrow.png" alt="Arrow" class="arrow arrow-up">
            </div>
        </div>
    </div>

    
    <div class="diskon-card">
        <div class="flex-container">
            <img src="four.png" alt="Gambar Diskon" class="diskon-image">
            <span class="diskon-text">Kode Diskon</span>
        </div>

        <div class="diskon-divider"></div>

        <div class="voucher-input-container">
            <input type="text" class="voucher-input" placeholder="Masukan Kode Voucher" id="voucherCode">
            <button class="apply-button" id="applyButton">Pakai Voucher</button>
        </div>
        <p class="instruction">Masukan Kode Voucher jika ada.</p>

        <!-- Modal Notifikasi -->
        <div id="modal" class="notifikasi-modal">
            <div class="modalContent">
                <p id="modalMessage" class="notification"></p>
                <button class="closeButton" id="closeModalButton">Tutup</button>
            </div>
        </div>
    </div>

    <div class="menuCard">
        <h1>
            <img src="five.png" alt="Icon"> Nomor WhatsApp</h1>
        <div class="menuUnderline"></div>

        <!-- Form untuk Nomor WhatsApp -->
        <input type="text" class="menuInput" placeholder="628xx" id="whatsappNumber">

        <!-- Instruksi di bawah form -->
        <p class="menuInstruction">Bukti pembelianmu akan kami kirimkan ke WhatsApp.</p>

        <!-- Tombol untuk submit -->
        <button class="menuButton" onclick="validateInput()">Beli Sekarang</button>
    </div>

    <!-- Modal Box Error -->
    <div id="modalError" class="modal">
        <div class="modalContent">
            <p>Pastikan anda sudah mengisi semua data yang diperlukan.</p>
            <button class="closeButton" onclick="closeModal('modalError')">Tutup</button>
        </div>
    </div>

    <!-- Modal Box Success -->
    <div id="modalSuccess" class="modal">
        <div class="modalContent">
            <p>Pembelian berhasil!</p>
            <button class="successButton" onclick="goToPayment()">Beli Sekarang</button>
            <button class="closeButton" onclick="closeModal('modalSuccess')">Tutup</button>
        </div>
    </div>
    <script>
    // Fungsi untuk format harga dengan titik sebagai pemisah ribuan
    function formatPrice(price) {
        return price.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

  // Fungsi untuk format harga dengan titik sebagai pemisah ribuan
function formatPrice(price) {
    return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(price);
}

// Mendapatkan semua card
const cards = document.querySelectorAll('.genshin-card');
const selectedPrice1 = document.getElementById('selected-price-1');
const selectedPrice2 = document.getElementById('selected-price-2');

cards.forEach(card => {
    card.addEventListener('click', (event) => {
        // Menghapus kelas aktif dari semua card
        cards.forEach(c => c.classList.remove('active'));
        // Menambahkan kelas aktif pada card yang diklik
        card.classList.add('active');
        
        // Mengambil harga dan nama item dari atribut data-price dan data-item
        const price = card.getAttribute('data-price');
        const itemName = card.getAttribute('data-item'); // Pastikan atribut data-item ada di HTML
        
        // Memformat harga
        const formattedPrice = formatPrice(price);
        
        // Simpan ke localStorage
        localStorage.setItem('selectedPrice', formattedPrice); // Simpan harga yang sudah diformat
        localStorage.setItem('itemName', itemName); // Simpan itemName
        
        // Menampilkan harga dan nama item yang dipilih
        const selectedPrices = document.querySelectorAll('.selected-price');
        selectedPrices.forEach(priceElement => {
            priceElement.textContent = ` ${formattedPrice}`;
        });
    });
});

// Fungsi untuk memvalidasi input
function validateInput() {
    const userId = document.querySelector(".user-id-input").value;
    const whatsappNumber = document.getElementById('whatsappNumber').value;
    
    // Ambil harga terpilih dari localStorage
    const selectedPrice = localStorage.getItem('selectedPrice');
    
    if (whatsappNumber.trim() === '' || !selectedPrice) {
        // Tampilkan modal error
        document.getElementById('modalError').style.display = 'flex';
    } else {
        // Simpan nomor WhatsApp dan harga ke dalam localStorage
        localStorage.setItem('userId', userId);
        localStorage.setItem('whatsappNumber', whatsappNumber);
        
        // Tampilkan modal sukses
        document.getElementById('modalSuccess').style.display = 'flex';
    }
}

// Fungsi untuk menutup modal
function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = "none"; // Sembunyikan modal
}

// Fungsi untuk menuju ke halaman pembayaran
function goToPayment() {
    // Redirect to the view_pembayaran page
    window.location.href = "view_pembayaran_Axis"; // Ganti dengan path halaman Anda yang sebenarnya
}


       

const genshinCards = document.querySelectorAll('.genshin-card');
    const selectedPriceElement = document.getElementById('selectedPrice');
    let selectedPrice = 0;

    genshinCards.forEach(card => {
        card.addEventListener('click', function() {
            // Hapus kelas active dari semua kartu
            genshinCards.forEach(c => c.classList.remove('active'));

            // Tambahkan kelas active pada kartu yang dipilih
            this.classList.add('active');

            // Ambil harga dari data attribute
            selectedPrice = this.getAttribute('data-price');

            // Tampilkan harga terpilih
            selectedPriceElement.textContent = `Harga Terpilih: RP ${selectedPrice}`;
        });
    });

 


let eWalletExpanded = false; // Status untuk E-Wallet
    let virtualAccountExpanded = false; // Status untuk Virtual Account

    function toggleCards(element, type) {
        const arrow = element.querySelector('.arrow');
        const additionalCards = element.parentElement.querySelectorAll('.additional-card');

        if (type === 'eWallet') {
            // Tutup Virtual Account jika sedang terbuka
            if (virtualAccountExpanded) {
                closeCards('virtualAccount');
                virtualAccountExpanded = false;
            }
            // Toggle status E-Wallet
            eWalletExpanded = !eWalletExpanded;
        } else if (type === 'virtualAccount') {
            // Tutup E-Wallet jika sedang terbuka
            if (eWalletExpanded) {
                closeCards('eWallet');
                eWalletExpanded = false;
            }
            // Toggle status Virtual Account
            virtualAccountExpanded = !virtualAccountExpanded;
        }

        additionalCards.forEach(card => {
            card.style.display = card.style.display === 'none' || !card.style.display ? 'flex' : 'none';
        });

        // Toggle arrow direction
        arrow.classList.toggle('arrow-up');
        arrow.classList.toggle('arrow-down');
    }

    function closeCards(type) {
        const allCards = document.querySelectorAll(`.${type}-card .additional-card`);
        allCards.forEach(card => {
            card.style.display = 'none';
        });

        // Reset arrow direction
        const arrow = document.querySelector(`.${type}-card .arrow`);
        if (arrow) {
            arrow.classList.remove('arrow-down');
            arrow.classList.add('arrow-up');
        }
    }

    function navigateToResult(method, event) {
            // Simpan metode pembayaran yang dipilih dalam localStorage
            localStorage.setItem('paymentMethod', method);

            // Ambil semua card dan hapus kelas 'active'
            const cards = document.querySelectorAll('.additional-card');
            cards.forEach(card => {
                card.classList.remove('active'); // Menghapus efek cahaya dari semua card
            });

            // Tambahkan kelas 'active' ke card yang diklik
            const selectedCard = event.currentTarget; // Dapatkan card yang diklik
            selectedCard.classList.add('active'); // Tambahkan efek cahaya ke card yang diklik

        }


        const applyButton = document.getElementById('applyButton');
        const voucherCodeInput = document.getElementById('voucherCode');
        const modal = document.getElementById('modal');
        const modalMessage = document.getElementById('modalMessage');
        const closeModalButton = document.getElementById('closeModalButton');

        const showModal = (message, isSuccess) => {
            modalMessage.textContent = message;
            modalMessage.className = `notification ${isSuccess ? 'success' : 'error'}`;
            modal.style.display = 'flex'; // Show the modal
        };

        const applyVoucher = () => {
            const voucherCode = voucherCodeInput.value.trim();
            if (voucherCode) {
                localStorage.setItem('voucherCode', voucherCode); // Save voucher code to localStorage
                showModal('Voucher berhasil digunakan!', true);
            } else {
                showModal('Voucher tidak ditemukan.', false);
            }
        };

        applyButton.addEventListener('click', applyVoucher); // Add event listener for the button

        // Close modal event
        closeModalButton.addEventListener('click', () => {
            modal.style.display = 'none'; // Hide the modal
        });
           // Event listener untuk tombol Top Up
document.getElementById('topUpBtn').addEventListener('click', () => {
    document.getElementById('topUpCards').style.display = 'grid'; // Ganti 'flex' dengan 'grid'
    document.getElementById('perpanjangCards').style.display = 'none';
    document.getElementById('pulsaCards').style.display = 'none';
    document.getElementById('dataCards').style.display = 'none';
});

// Event listener untuk tombol Perpanjang
document.getElementById('perpanjangBtn').addEventListener('click', () => {
    document.getElementById('topUpCards').style.display = 'none';
    document.getElementById('perpanjangCards').style.display = 'grid'; // Ganti 'flex' dengan 'grid'
    document.getElementById('pulsaCards').style.display = 'none';
    document.getElementById('dataCards').style.display = 'none';
});
document.getElementById('pulsaBtn').addEventListener('click', () => {
    document.getElementById('topUpCards').style.display = 'none';
    document.getElementById('perpanjangCards').style.display = 'none'; // Ganti 'flex' dengan 'grid'
    document.getElementById('pulsaCards').style.display = 'grid';
    document.getElementById('dataCards').style.display = 'none';
});
document.getElementById('dataBtn').addEventListener('click', () => {
    document.getElementById('topUpCards').style.display = 'none';
    document.getElementById('perpanjangCards').style.display = 'none'; // Ganti 'flex' dengan 'grid'
    document.getElementById('pulsaCards').style.display = 'none';
    document.getElementById('dataCards').style.display = 'grid';
});

// Fungsi untuk menambahkan border putih hanya pada tombol yang diklik
function addBorderEffect(buttonId) {
    // Hapus efek border dari semua tombol terlebih dahulu
    document.querySelectorAll('.top-up-white-card').forEach(button => {
        button.classList.remove('selected');
    });

    // Tambahkan border putih pada tombol yang diklik
    const button = document.getElementById(buttonId);
    button.classList.add('selected');
}

// Event listener untuk setiap tombol
document.getElementById('topUpBtn').addEventListener('click', () => {
    addBorderEffect('topUpBtn');
});

document.getElementById('perpanjangBtn').addEventListener('click', () => {
    addBorderEffect('perpanjangBtn');
});

document.getElementById('pulsaBtn').addEventListener('click', () => {
    addBorderEffect('pulsaBtn');
});

document.getElementById('dataBtn').addEventListener('click', () => {
    addBorderEffect('dataBtn');
});
    </script>
</body>
</html>

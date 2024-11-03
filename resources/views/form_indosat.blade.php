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


        <div id="topUpCards" class="genshin-card-container" >
            <div class="genshin-card" data-price="5820" data-item="Indosat 5K">
                <h3>Indosat 5K</h3>
                <p>RP 5,820</p>
            </div>
            <div class="genshin-card" data-price="10475" data-item="Indosat 10.000">
                <h3>Indosat 10.000</h3>
                <p>RP 10,475</p>
            </div>
            <div class="genshin-card" data-price="14853" data-item="Indosat 15.000">
                <h3>Indosat 15.000</h3>
                <p>RP 14,853</p>
            </div>
            <div class="genshin-card" data-price="20224" data-item="Indosat 20.000">
                <h3>Indosat 20.000</h3>
                <p>RP 20.224</p>
            </div>
            <div class="genshin-card" data-price="25338" data-item="Indosat 25.000">
                <h3>Indosat 25.000</h3>
                <p>RP 25,338</p>
            </div>
            <div class="genshin-card" data-price="49940"  data-item="Indosat 50.000">
                <h3>Indosat 50.000</h3>
                <p>RP 49,940</p>
            </div>
            <div class="genshin-card" data-price="99859" data-item="Indosat 100.000">
                <h3>Indosat 100.000</h3>
                <p>RP 99,859</p>
            </div>
            <div class="genshin-card" data-price="145462" data-item="Indosat 150.000">
                <h3>Indosat Pulsa Transfer 150.000</h3>
                <p>RP 145,462</p>
                </div>
            <div class="genshin-card" data-price="152334"  data-item="Indosat 150.000">
                <h3>Indosat 150.000</h3>
                <p>RP 152,334</p>
            </div>
            <div class="genshin-card" data-price="200464"  data-item="Indosat 200.000">
                <h3>Indosat 200.000</h3>
                <p>RP 200,464</p>
            </div>
        </div>

        
        <div id="perpanjangCards" class="genshin-card-container" style="display: none;">
            <div class="genshin-card" data-price="5459" data-item="Indosat Tambah Masa Aktif Kartu 15 Hari">
                <h3>Indosat Tambah Masa</h3>
                <h1>Aktif Kartu 15 Hari</h1>
                <p>RP 5,459</p>
            </div>
            <div class="genshin-card" data-price="24626" data-item="Indosat Tambah Masa Aktif Kartu 90 Hari">
                <h3>Indosat Tambah Masa</h3>
                <h1>Aktif Kartu 90 Hari</h1>
                <p>RP 14,626</p>
            </div>
            <div class="genshin-card" data-price="25184" data-item="Indosat Tambah Masa Aktif Kartu 180 Hari">
                <h3>Indosat Tambah Masa</h3>
                <h1>Aktif Kartu 180 Hari</h1>
                <p>RP 25,184</p>
            </div>
            <div class="genshin-card" data-price="45835" data-item="Indosat Tambah Masa Aktif Kartu 360 Hari">
                <h3>Indosat Tambah Masa</h3>
                <h1>Aktif Kartu 360 Hari</h1>
                <p>RP 45,835</p>
            </div>
        </div>
        <div id="pulsaCards" class="genshin-card-container" style="display: none;">
            <div class="genshin-card" data-price="5650" data-item="Indosat Pulsa Transfer 5.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>5.000</h1>
                <p>RP 5,650</p>
            </div>
            <div class="genshin-card" data-price="10321" data-item="Indosat Pulsa Transfer 10.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>10.000</h1>
                <p>RP 10,321</p>
            </div>
            <div class="genshin-card" data-price="15110" data-item="Indosat Pulsa Transfer 15.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>15.000</h1>
                <p>RP 15,110</p>
            </div>
            <div class="genshin-card" data-price="19822" data-item="Indosat Pulsa Transfer 20.000 ">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>20.000</h1>
                <p>RP 19,822</p>
            </div>
            <div class="genshin-card" data-price="25034" data-item="Indosat Pulsa Transfer 25.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>25.000</h1>
                <p>RP 25,034</p>
            </div>
            <div class="genshin-card" data-price="29613" data-item="Indosat Pulsa Transfer 30.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>30.000</h1>
                <p>RP 29,613</p>
            </div>
            <div class="genshin-card" data-price="34330" data-item="Indosat Pulsa Transfer 35.000">
            <h3>Indosat Pulsa Transfer</h3>
                <h1>35.000</h1>
                <p>RP 34,330</p>
            </div>
            <div class="genshin-card" data-price="39027" data-item="Indosat Pulsa Transfer 40.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>40.000</h1>
                <p>RP 39,027</p>
            </div>
            <div class="genshin-card" data-price="43724" data-item="Indosat Pulsa Transfer 55.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>45.000</h1>
                <p>RP 43,724</p>
            </div>
            <div class="genshin-card" data-price="49033" data-item="Indosat Pulsa Transfer 50.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>50.000</h1>
                <p>RP 49,033</p>
            </div>
            <div class="genshin-card" data-price="58375" data-item="Indosat Pulsa Transfer 60.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>60.000</h1>
                <p>RP 58,375</p>
            </div>
            <div class="genshin-card" data-price="62985" data-item="Indosat Pulsa Transfer 65.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>65.000</h1>
                <p>RP 62,985</p>
            </div>
            <div class="genshin-card" data-price="67681" data-item="Indosat Pulsa Transfer 70.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>70.000</h1>
                <p>RP 67,681</p>
            </div>
            <div class="genshin-card" data-price="72383" data-item="Indosat Pulsa Transfer 75.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>75.000</h1>
                <p>RP 72,383</p>
            </div>
            <div class="genshin-card" data-price="77080" data-item="Indosat Pulsa Transfer 80.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>80.000</h1>
                <p>RP 77,080</p>
            </div>
            <div class="genshin-card" data-price="81772" data-item="Indosat Pulsa Transfer 85.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>85.000</h1>
                <p>RP 81,772</p>
            </div>
            <div class="genshin-card" data-price="86474" data-item="Indosat Pulsa Transfer 90.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>90.000</h1>
                <p>RP 86,474</p>
            </div>
            <div class="genshin-card" data-price="91670" data-item="Indosat Pulsa Transfer 95.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>95.000</h1>
                <p>RP 91,670</p>
            </div>
            <div class="genshin-card" data-price="97732" data-item="Indosat Pulsa Transfer 100.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>100.000</h1>
                <p>RP 97,732</p>
            </div>
            <div class="genshin-card" data-price="126314" data-item="Indosat Pulsa Transfer 130.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>130.000</h1>
                <p>RP 126,314</p>
            </div>
            <div class="genshin-card" data-price="192706" data-item="Indosat Pulsa Transfer 200.000">
                <h3>Indosat Pulsa Transfer</h3>
                <h1>200.000</h1>
                <p>RP 192,706</p>
            </div>
        </div>
        <div id="dataCards" class="genshin-card-container" style="display: none;">
        <div class="genshin-card" data-price="14327" data-item="Indosat Freedom Internet 2 GB 30 Hari ">
                <h3>Indosat Freedom</h3>
                <h1>Internet 2 GB 30 Hari</h1>
                <p>RP 14,327</p>
            </div>
            <div class="genshin-card" data-price="20337" data-item="Indosat Freedom Internet 3 GB 30 Hari">
                <h3>Indosat Freedom</h3>
                <h1>Internet 3 GB 30 Hari</h1>
                <p>RP 20,337</p>
            </div>
            <div class="genshin-card" data-price="19262" data-item="Indosat Freedom Internet 5 GB 30 Hari">
                <h3>Indosat Freedom</h3>
                <h1>Internet 5 GB 30 Hari</h1>
                <p>RP 19,262</p>
            </div>
            <div class="genshin-card" data-price="42153" data-item="Indosat Freedom Internet 9 GB 30 Hari">
                <h3>Indosat Freedom</h3>
                <h1>Internet 9 GB 30 Hari</h1>
                <p>RP 42,153</p>
            </div>
            <div class="genshin-card" data-price="49517" data-item="Indosat Freedom Internet 12 GB 30 Hari">
                <h3>Indosat Freedom</h3>
                <h1>Internet 12 GB 30 Hari</h1>
                <p>RP 49,517</p>
            </div>
            <div class="genshin-card" data-price="64272" data-item="Indosat Freedom Internet 16 GB 30 Hari">
                <h3>Indosat Freedom</h3>
                <h1>Internet 16 GB 30 Hari</h1>
                <p>RP 64,272</p>
            </div>
            <div class="genshin-card" data-price="76761" data-item="Indosat Freedom Internet 25 GB 30 Hari">
                <h3>Indosat Freedom</h3>
                <h1>Internet 25 GB 30 Hari</h1>
                <p>RP 76,761</p>
            </div>
            <div class="genshin-card" data-price="108794" data-item="Indosat Freedom Internet 50 GB 30 Hari">
                <h3>Indosat Freedom</h3>
                <h1>Internet 50 GB 30 Hari</h1>
                <p>RP 108,794</p>
            </div>
            <div class="genshin-card" data-price="113300" data-item="Indosat Freedom Internet 100 GB 30 Hari">
                <h3>Indosat Freedom</h3>
                <h1>Internet 100 GB 30 Hari</h1>
                <p>RP 113,300</p>
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
    window.location.href = "view_pembayaran_Indosat"; // Ganti dengan path halaman Anda yang sebenarnya
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

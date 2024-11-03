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
            width: 50%; /* Lebar input */
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
            
            background-size: 15px; /* Ukuran gambar panah */
        }

        /* Gaya untuk instruksi */
        .instruction2 {
            margin-top: 20px; /* Jarak atas untuk instruksi */
    margin-right: 10px;
    font-size: 14px; /* Ukuran font untuk instruksi */
    color: white; /* Warna teks untuk instruksi */
    text-align: left; /* Menyelaraskan teks ke kanan */
    direction: rtl; /* Mengatur agar teks dan elemen tambahan selalu dimulai dari kanan */
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
            <img src="one.png" alt="Icon"> Masukkan Menu</h1>
        <div class="underline"></div> <!-- Garis di bawah judul -->

        <!-- Form untuk User ID dan Dropdown -->
        <div style="display: flex; justify-content: center; align-items: center;">
            <input type="text" class="user-id-input" placeholder="User ID" required id="userId">
           
            <input type="text" class="region-dropdown" placeholder="Server ID" required id="serverDropdown">
        </div>
        <!-- Instruksi di bawah form -->
        <p class="instruction2">Masukan User ID & Server (tanpa tanda kurung)</p>
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
                <p>Weekly Diamond Pass</p>
            </div>
           
        </div>


        <div id="topUpCards" class="genshin-card-container">
            <div class="genshin-card" data-price="1026" data-item="MOBILELEGEND-3 Diamond">
                <h3>MOBILELEGEND-3</h3>
                <h1>Diamond</h1>
                <p>RP 1,026</p>
            </div>
            <div class="genshin-card" data-price="1365" data-item="MOBILELEGEND-5 Diamond">
                <h3>MOBILELEGEND-5</h3>
                <h1>Diamond</h1>
                <p>RP 1,365</p>
            </div>
            <div class="genshin-card" data-price="1419" data-item="MOBILELEGEND-5 Diamond">
                <h3>MOBILELEGEND-5</h3>
                <h1>Diamond</h1>
                <p>RP 1,419</p>
            </div>
            <div class="genshin-card" data-price="2843" data-item="MOBILELEGEND-10 Diamond">
                <h3>MOBILELEGEND-10</h3>
                <h1>Diamond</h1>
                <p>RP 2,843</p>
            </div>
            <div class="genshin-card" data-price="3415" data-item="MOBILELEGEND-11 Diamond">
                <h3>MOBILELEGEND-11</h3>
                <h1>Diamond</h1>
                <p>RP 3,415</p>
            </div>
            <div class="genshin-card" data-price="3453"  data-item="MOBILELEGEND-12 Diamond">
                <h3>MOBILELEGEND-12</h3>
                <h1>Diamond</h1>
                <p>RP 3,453</p>
            </div>
            <div class="genshin-card" data-price="3979" data-item="MOBILELEGEND-14 Diamond">
                <h3>MOBILELEGEND-14</h3>
                <h1>Diamond</h1>
                <p>RP 3,979</p>
            </div>
            <div class="genshin-card" data-price="4334" data-item="MOBILELEGEND-15 Diamond">
                <h3>MOBILELEGEND-15</h3>
                <h1>Diamond</h1>
                <p>RP 4,334</p>
                </div>
            <div class="genshin-card" data-price="4949"  data-item="MOBILELEGEND-17 Diamond">
                <h3>MOBILELEGEND-17</h3>
                <h1>Diamond</h1>
                <p>RP 4,949</p>
            </div>
            <div class="genshin-card" data-price="4973" data-item="MOBILELEGEND-18 Diamond">
                <h3>MOBILELEGEND-18</h3>
                <h1>Diamond</h1>
                <p>RP 4,973</p>
            </div>
            <div class="genshin-card" data-price="5423" data-item="MOBILELEGEND-19 Diamond">
                <h3>MOBILELEGEND-19</h3>
                <h1>Diamond</h1>
                <p>RP 5,423</p>
            </div>
            <div class="genshin-card" data-price="5678"  data-item="MOBILELEGEND-20 Diamond">
                <h3>MOBILELEGEND-20</h3>
                <h1>Diamond</h1>
                <p>RP 5,678</p>
            </div>
            <div class="genshin-card" data-price="6434" data-item="MOBILELEGEND-22 Diamond">
                <h3>MOBILELEGEND-22</h3>
                <h1>Diamond</h1>
                <p>RP 6,434</p>
            </div>
            <div class="genshin-card" data-price="10048" data-item="MOBILELEGEND-36 Diamond">
                <h3>MOBILELEGEND-36</h3>
                <h1>Diamond</h1>
                <p>RP 10,048</p>
            </div>
            <div class="genshin-card" data-price="11570"  data-item="MOBILELEGEND-44 Diamond">
                <h3>MOBILELEGEND-44</h3>
                <h1>Diamond</h1>
                <p>RP 11,570</p>
            </div>
            <div class="genshin-card" data-price="12407" data-item="MOBILELEGEND-46 Diamond">
                <h3>MOBILELEGEND-46</h3>
                <h1>Diamond</h1>
                <p>RP 12,407</p>
            </div>
            <div class="genshin-card" data-price="15296" data-item="MOBILELEGEND-59 Diamond">
                <h3>MOBILELEGEND-59</h3>
                <h1>Diamond</h1>
                <p>RP 15,296</p>
            </div>
            <div class="genshin-card" data-price="19341"  data-item="MOBILELEGEND-74 Diamond">
                <h3>MOBILELEGEND-74</h3>
                <h1>Diamond</h1>
                <p>RP 19,341</p>
            </div>
            <div class="genshin-card" data-price="22523" data-item="MOBILELEGEND-85 Diamond">
                <h3>MOBILELEGEND-85</h3>
                <h1>Diamond</h1>
                <p>RP 22,523</p>
            </div>
            <div class="genshin-card" data-price="22674" data-item="MOBILELEGEND-86 Diamond">
                <h3>MOBILELEGEND-86</h3>
                <h1>Diamond</h1>
                <p>RP 22,674</p>
            </div>
            <div class="genshin-card" data-price="23523"  data-item="MOBILELEGEND-88 Diamond">
                <h3>MOBILELEGEND-88</h3>
                <h1>Diamond</h1>
                <p>RP 23,523</p>
            </div>
            <div class="genshin-card" data-price="22674" data-item="MOBILELEGEND-86 Diamond">
                <h3>MOBILELEGEND-86</h3>
                <h1>Diamond</h1>
                <p>RP 22,674</p>
            </div>
            <div class="genshin-card" data-price="23659"  data-item="MOBILELEGEND-88 Diamond">
                <h3>MOBILELEGEND-88</h3>
                <h1>Diamond</h1>
                <p>RP 23,659</p>
            </div>
            <div class="genshin-card" data-price="28907"  data-item="MOBILELEGEND-110 Diamond">
                <h3>MOBILELEGEND-110</h3>
                <h1>Diamond</h1>
                <p>RP 28,907</p>
            </div>
            <div class="genshin-card" data-price="29983" data-item="MOBILELEGEND-113 Diamond">
                <h3>MOBILELEGEND-113</h3>
                <h1>Diamond</h1>
                <p>RP 29,983</p>
            </div>
            <div class="genshin-card" data-price="38794"  data-item="MOBILELEGEND-148 Diamond">
                <h3>MOBILELEGEND-148</h3>
                <h1>Diamond</h1>
                <p>RP 38,794</p>
            </div>
            <div class="genshin-card" data-price="44038"  data-item="MOBILELEGEND-170 Diamond">
                <h3>MOBILELEGEND-170</h3>
                <h1>Diamond</h1>
                <p>RP 44,038</p>
            </div>
            <div class="genshin-card" data-price="46468" data-item="MOBILELEGEND-176 Diamond">
                <h3>MOBILELEGEND-176</h3>
                <h1>Diamond</h1>
                <p>RP 46,468</p>
            </div>
            <div class="genshin-card" data-price="53203"  data-item="MOBILELEGEND-200 Diamond">
                <h3>MOBILELEGEND-200</h3>
                <h1>Diamond</h1>
                <p>RP 53,203</p>
            </div>
            <div class="genshin-card" data-price="57981"  data-item="MOBILELEGEND-222 Diamond">
                <h3>MOBILELEGEND-222</h3>
                <h1>Diamond</h1>
                <p>RP 57,981</p>
            </div>
            <div class="genshin-card" data-price="62075" data-item="MOBILELEGEND-240 Diamond">
                <h3>MOBILELEGEND-240</h3>
                <h1>Diamond</h1>
                <p>RP 62,075</p>
            </div>
            <div class="genshin-card" data-price="66662"  data-item="MOBILELEGEND-257 Diamond">
                <h3>MOBILELEGEND-257</h3>
                <h1>Diamond</h1>
                <p>RP 66,662</p>
            </div>
            <div class="genshin-card" data-price="67569"  data-item="MOBILELEGEND-258 Diamond">
                <h3>MOBILELEGEND-258</h3>
                <h1>Diamond</h1>
                <p>RP 67,569</p>
            </div>
            <div class="genshin-card" data-price="150045" data-item="MOBILELEGEND-284 Diamond">
                <h3>MOBILELEGEND-284</h3>
                <h1>Diamond</h1>
                <p>RP 73,607</p>
            </div>
            <div class="genshin-card" data-price="77811"  data-item="MOBILELEGEND-300 Diamond">
                <h3>MOBILELEGEND-300</h3>
                <h1>Diamond</h1>
                <p>RP 77,811</p>
            </div>
            <div class="genshin-card" data-price="79738"  data-item="MOBILELEGEND-305 Diamond">
                <h3>MOBILELEGEND-305</h3>
                <h1>Diamond</h1>
                <p>RP 79,738</p>
            </div>
            <div class="genshin-card" data-price="89325" data-item="MOBILELEGEND-344 Diamond">
                <h3>MOBILELEGEND-344</h3>
                <h1>Diamond</h1>
                <p>RP 89,325</p>
            </div>
            <div class="genshin-card" data-price="89325"  data-item="MOBILELEGEND-344 Diamond">
                <h3>MOBILELEGEND-344</h3>
                <h1>Diamond</h1>
                <p>RP 89,325</p>
            </div>
            <div class="genshin-card" data-price="95921"  data-item="MOBILELEGEND-370 Diamond">
                <h3>MOBILELEGEND-370</h3>
                <h1>Diamond</h1>
                <p>RP 95,921</p>
            </div>
            <div class="genshin-card" data-price="100157" data-item="MOBILELEGEND-384 Diamond">
                <h3>MOBILELEGEND-384</h3>
                <h1>Diamond</h1>
                <p>RP 100,157</p>
            </div>
            <div class="genshin-card" data-price="105845"  data-item="MOBILELEGEND-408 Diamond">
                <h3>MOBILELEGEND-408</h3>
                <h1>Diamond</h1>
                <p>RP 105,845</p>
            </div>
            <div class="genshin-card" data-price="111809"  data-item="MOBILELEGEND-429 Diamond">
                <h3>MOBILELEGEND-429</h3>
                <h1>Diamond</h1>
                <p>RP 111,809</p>
            </div>
            <div class="genshin-card" data-price="132192" data-item="MOBILELEGEND-500 Diamond">
                <h3>MOBILELEGEND-500</h3>
                <h1>Diamond</h1>
                <p>RP 132,192</p>
            </div>
            <div class="genshin-card" data-price="133900"  data-item="MOBILELEGEND-541 Diamond">
                <h3>MOBILELEGEND-514</h3>
                <h1>Diamond</h1>
                <p>RP 133,900</p>
            </div>
            <div class="genshin-card" data-price="134824"  data-item="MOBILELEGEND-518 Diamond">
                <h3>MOBILELEGEND-518</h3>
                <h1>Diamond</h1>
                <p>RP 134,824</p>
            </div>
            <div class="genshin-card" data-price="138252" data-item="MOBILELEGEND-530 Diamond">
                <h3>MOBILELEGEND-530</h3>
                <h1>Diamond</h1>
                <p>RP 138,252</p>
            </div>
            <div class="genshin-card" data-price="143119"  data-item="MOBILELEGEND-568 Diamond">
                <h3>MOBILELEGEND-568</h3>
                <h1>Diamond</h1>
                <p>RP 143,119</p>
            </div>
            <div class="genshin-card" data-price="152260"  data-item="MOBILELEGEND-600 Diamond">
                <h3>MOBILELEGEND-600</h3>
                <h1>Diamond</h1>
                <p>RP 152,260</p>
            </div>
            <div class="genshin-card" data-price="168451" data-item="MOBILELEGEND-659 Diamond">
                <h3>MOBILELEGEND-659</h3>
                <h1>Diamond</h1>
                <p>RP 168,451</p>
            </div>
            <div class="genshin-card" data-price="178963"  data-item="MOBILELEGEND-706 Diamond">
                <h3>MOBILELEGEND-706</h3>
                <h1>Diamond</h1>
                <p>RP 178,963</p>
            </div>
            <div class="genshin-card" data-price="181943"  data-item="MOBILELEGEND-716 Diamond">
                <h3>MOBILELEGEND-716</h3>
                <h1>Diamond</h1>
                <p>RP 181,943</p>
            </div>
            <div class="genshin-card" data-price="194490" data-item="MOBILELEGEND-758 Diamond">
                <h3>MOBILELEGEND-758</h3>
                <h1>Diamond</h1>
                <p>RP 194,498</p>
            </div>
            <div class="genshin-card" data-price="194568"  data-item="MOBILELEGEND-760 Diamond">
                <h3>MOBILELEGEND-760</h3>
                <h1>Diamond</h1>
                <p>RP 194,568</p>
            </div>
            <div class="genshin-card" data-price="199511"  data-item="MOBILELEGEND-792 Diamond">
                <h3>MOBILELEGEND-792</h3>
                <h1>Diamond</h1>
                <p>RP 199,511</p>
            </div>
            <div class="genshin-card" data-price="219545" data-item="MOBILELEGEND-875 Diamond">
                <h3>MOBILELEGEND-875</h3>
                <h1>Diamond</h1>
                <p>RP 219,545</p>
            </div>
            <div class="genshin-card" data-price="253482"  data-item="MOBILELEGEND-1000 Diamond">
                <h3>MOBILELEGEND-1000</h3>
                <h1>Diamond</h1>
                <p>RP 253,482</p>
            </div>
            <div class="genshin-card" data-price="266663"  data-item="MOBILELEGEND-1050 Diamond">
                <h3>MOBILELEGEND-1050</h3>
                <h1>Diamond</h1>
                <p>RP 266,662</p>
            </div>
            <div class="genshin-card" data-price="289703" data-item="MOBILELEGEND-1135 Diamond">
                <h3>MOBILELEGEND-1135</h3>
                <h1>Diamond</h1>
                <p>RP 289,703</p>
            </div>
            <div class="genshin-card" data-price="292981"  data-item="MOBILELEGEND-1159 Diamond">
                <h3>MOBILELEGEND-1159</h3>
                <h1>Diamond</h1>
                <p>RP 292,981</p>
            </div>
            <div class="genshin-card" data-price="313798"  data-item="MOBILELEGEND-1220 Diamond">
                <h3>MOBILELEGEND-1220</h3>
                <h1>Diamond</h1>
                <p>RP 313,798</p>
            </div>
            <div class="genshin-card" data-price="356405" data-item="MOBILELEGEND-1412 Diamond">
                <h3>MOBILELEGEND-1412</h3>
                <h1>Diamond</h1>
                <p>RP 356,405</p>
            </div>
            <div class="genshin-card" data-price="364620"  data-item="MOBILELEGEND-1446 Diamond">
                <h3>MOBILELEGEND-1446</h3>
                <h1>Diamond</h1>
                <p>RP 364,620</p>
            </div>
            <div class="genshin-card" data-price="375279"  data-item="MOBILELEGEND-1500 Diamond">
                <h3>MOBILELEGEND-1500</h3>
                <h1>Diamond</h1>
                <p>RP 375,279</p>
            </div>
            <div class="genshin-card" data-price="403888" data-item="MOBILELEGEND-1584 Diamond">
                <h3>MOBILELEGEND-1584</h3>
                <h1>Diamond</h1>
                <p>RP 403,888</p>
            </div>
            <div class="genshin-card" data-price="465870"  data-item="MOBILELEGEND-1830 Diamond">
                <h3>MOBILELEGEND-1830</h3>
                <h1>Diamond</h1>
                <p>RP 465,870</p>
            </div>
            <div class="genshin-card" data-price="484801"  data-item="MOBILELEGEND-2010 Diamond">
                <h3>MOBILELEGEND-2010</h3>
                <h1>Diamond</h1>
                <p>RP 484,801</p>
            </div>
            <div class="genshin-card" data-price="524322" data-item="MOBILELEGEND-2195 Diamond">
                <h3>MOBILELEGEND-2195</h3>
                <h1>Diamond</h1>
                <p>RP 524,322</p>
            </div>
            <div class="genshin-card" data-price="632935"  data-item="MOBILELEGEND-2539 Diamond">
                <h3>MOBILELEGEND-2539</h3>
                <h1>Diamond</h1>
                <p>RP 632,935</p>
            </div>
            <div class="genshin-card" data-price="677617"  data-item="MOBILELEGEND-2901 Diamond">
                <h3>MOBILELEGEND-2901</h3>
                <h1>Diamond</h1>
                <p>RP 677,617</p>
            </div>
            <div class="genshin-card" data-price="728372" data-item="MOBILELEGEND-2976 Diamond">
                <h3>MOBILELEGEND-2976</h3>
                <h1>Diamond</h1>
                <p>RP 728,372</p>
            </div>
            <div class="genshin-card" data-price="753540"  data-item="MOBILELEGEND-3073 Diamond">
                <h3>MOBILELEGEND-3073</h3>
                <h1>Diamond</h1>
                <p>RP 753,540</p>
            </div>
            <div class="genshin-card" data-price="849346"  data-item="MOBILELEGEND-3688 Diamond">
                <h3>MOBILELEGEND-3688</h3>
                <h1>Diamond</h1>
                <p>RP 849,346</p>
            </div>
            <div class="genshin-card" data-price="966368" data-item="MOBILELEGEND-4020 Diamond">
                <h3>MOBILELEGEND-4020</h3>
                <h1>Diamond</h1>
                <p>RP 966,368</p>
            </div>
            <div class="genshin-card" data-price="1084051"  data-item="MOBILELEGEND-4394 Diamond">
                <h3>MOBILELEGEND-4394</h3>
                <h1>Diamond</h1>
                <p>RP 1,084,051</p>
            </div>
            <div class="genshin-card" data-price="1163382"  data-item="MOBILELEGEND-4830 Diamond">
                <h3>MOBILELEGEND-4830</h3>
                <h1>Diamond</h1>
                <p>RP 1,163,382</p>
            </div>
            <div class="genshin-card" data-price="1340134"  data-item="MOBILELEGEND-5532 Diamond">
                <h3>MOBILELEGEND-5532</h3>
                <h1>Diamond</h1>
                <p>RP 1,340,134</p>
            </div>
            <div class="genshin-card" data-price="1469264"  data-item="MOBILELEGEND-6040 Diamond">
                <h3>MOBILELEGEND-6040</h3>
                <h1>Diamond</h1>
                <p>RP 1,469,264</p>
            </div>
            <div class="genshin-card" data-price="1516884"  data-item="MOBILELEGEND-6234 Diamond">
                <h3>MOBILELEGEND-6234</h3>
                <h1>Diamond</h1>
                <p>RP 1,516,884</p>
            </div>
            <div class="genshin-card" data-price="2445246"  data-item="MOBILELEGEND-10050 Diamond">
                <h3>MOBILELEGEND-10050</h3>
                <h1>Diamond</h1>
                <p>RP 2,445,246</p>
            </div>
        </div>

        
        <div id="perpanjangCards" class="genshin-card-container" style="display: none;">
            <div class="genshin-card" data-price="26806" data-item="Weekly Diamond Pass Promo">
                <h3>Weekly Diamond</h3>
                <h1>Pass Promo</h1>
                <p>RP 26,806</p>
            </div>
            <div class="genshin-card" data-price="27532" data-item="MOBILELEGENDS Weekly Diamond Pass">
                <h3>MOBILELEGENDS</h3>
                <h1>Weekly Diamond</h1>
                <h4>Pass</h4>
                <p>RP 27,532</p>
            </div>
            <div class="genshin-card" data-price="62914" data-item="MOBILELEGENDS Coupon Pass">
                <h3>MOBILELEGENDS</h3>
                <h1>Coupon Pass</h1>
                <p>RP 62,914</p>
            </div>
            <div class="genshin-card" data-price="81561" data-item="MOBILELEGENDS Weekly Diamond Pass 3x">
                <h3>MOBILELEGENDS</h3>
                <h1>Weekly Diamond</h1>
                <h4>Pass 3x</h4>
                <p>RP 81,561</p>
            </div>
            <div class="genshin-card" data-price="135943" data-item="MOBILE LEGENDS Weekly Diamond Pass 5x ">
                <h3>MOBILE LEGENDS</h3>
                <h1>Weekly Diamond</h1>
                <h4>Pass 5x</h4>
                <p>RP 135,943</p>
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
    const server = document.querySelector(".region-dropdown").value;
    const whatsappNumber = document.getElementById('whatsappNumber').value;
    
    // Ambil harga terpilih dari localStorage
    const selectedPrice = localStorage.getItem('selectedPrice');
    
    if (whatsappNumber.trim() === '' || !selectedPrice) {
        // Tampilkan modal error
        document.getElementById('modalError').style.display = 'flex';
    } else {
        // Simpan nomor WhatsApp dan harga ke dalam localStorage
        localStorage.setItem('userId', userId);
        localStorage.setItem('server', server);
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
    window.location.href = "view_pembayaran_Mobile"; // Ganti dengan path halaman Anda yang sebenarnya
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
   
});

// Event listener untuk tombol Perpanjang
document.getElementById('perpanjangBtn').addEventListener('click', () => {
    document.getElementById('topUpCards').style.display = 'none';
    document.getElementById('perpanjangCards').style.display = 'grid'; // Ganti 'flex' dengan 'grid'
   
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

    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Bootstrap Navbar</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles */
        body {
            background-color: white;
            color: black;
            margin: 0;
            font-size: 16px;
        }
        .custom-row {
    display: flex;
    justify-content: flex-start; /* Item tetap di sebelah kiri */
    flex-wrap: nowrap; /* Mencegah card membungkus ke baris berikutnya */
    margin-top: 60px; /* Jarak antara title dan card */
    margin-left: -200px;
    position: relative; /* Untuk positioning title-container */
}



        .custom-container {
            display: flex; /* Menggunakan flexbox untuk mengatur posisi elemen */
            align-items: center; /* Pusatkan vertikal */
            flex: 0 0 300px; /* Atur lebar card menjadi 300px */
            height: 80px;
            background-color: rgba(128, 128, 128, 0.5);
            border: 1px solid rgba(128, 128, 128, 0.8);
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            padding: 10px;
            position: relative; /* Membuat posisi relatif untuk kontrol lebih lanjut */
            margin-right: 10px; /* Kurangi jarak antar card */
            margin-left: 0; /* Hapus jarak kiri */
            cursor: pointer; /* Menambahkan pointer pada card */
        }

        .custom-container-img-top {
            height: 60px;
            width: 60px;
            object-fit: cover;
            object-position: top;
            border: 3px solid navy;
            border-radius: 10%;
            margin-right: 10px; /* Jarak antara gambar dan teks */
            transition: all 0.3s ease;
        }

        .custom-container:hover {
            box-shadow: 0 0 10px 3px rgba(255, 255, 255, 0.6);
        }

        .custom-container.active {
            box-shadow: 0 0 15px 5px rgba(255, 255, 255, 0.8);
            transform: scale(1.05);
        }

        .custom-container-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: black;
            text-align: left; /* Menambahkan ini untuk membuat tulisan rata kiri */
        }

        .custom-container-title {
            font-weight: bold;
            margin: 0;
            font-size: 12px;
        }

        .custom-container-subtitle {
            font-weight: normal;
            margin: 3px 0 0 0;
            font-size: 10px;
        }

        .title-container {
            text-align: left;
            font-size: 24px;
            font-weight: bold;
            color: white;
            padding: -70px;
            border-radius: 5px;
            margin-bottom: 10px; /* Jarak antara judul dan kartu */
            justify-content: flex-start;
            margin-left: -250px; /* Atur margin kiri agar tidak tergeser oleh card */
        }
        .title-container img {
            height: 30px; /* Atur tinggi gambar sesuai kebutuhan */
            width: 30px; /* Atur lebar gambar sesuai kebutuhan */
            margin-right: -5px; /* Jarak antara gambar dan teks */
            margin-top: -10px;
        }
    </style>
</head>
<body>

    <!-- Container Card -->
    <div class="container mt-5">
    <div class="title-container">
            <img src="hot.png" alt="Ikon" /> <!-- Gambar di samping teks -->
            Game Populer
        </div>
        <div class="custom-row"> <!-- Gunakan custom-row untuk mengatur card -->

            <a href="mobile_legends" class="custom-container"> <!-- Membuat seluruh card menjadi link -->
                <img src="gambar27.png" class="custom-container-img-top" alt="PLN image" onclick="showLightEffect(this)">
                <div class="custom-container-body">
                    <h5 class="custom-container-title">Mobile Legends Bang Bang</h5>
                    <h6 class="custom-container-subtitle">Moonton</h6>
                </div>
            </a>

            <a href="free_fire" class="custom-container"> <!-- Membuat seluruh card menjadi link -->
                <img src="gambar28.png" class="custom-container-img-top" alt="PLN image" onclick="showLightEffect(this)">
                <div class="custom-container-body">
                    <h5 class="custom-container-title">Free Fire</h5>
                    <h6 class="custom-container-subtitle">Garena</h6>
                </div>
            </a>

            <a href="HonorOFKings" class="custom-container"> <!-- Membuat seluruh card menjadi link -->
                <img src="gambar29.png" class="custom-container-img-top" alt="PLN image" onclick="showLightEffect(this)">
                <div class="custom-container-body">
                    <h5 class="custom-container-title">Honor OF Kings</h5>
                    <h6 class="custom-container-subtitle">Timi</h6>
                </div>
            </a>

            <a href="Topup_JokiGame" class="custom-container"> <!-- Membuat seluruh card menjadi link -->
                <img src="gambar30.png" class="custom-container-img-top" alt="PLN image" onclick="showLightEffect(this)">
                <div class="custom-container-body">
                    <h5 class="custom-container-title">Topup & Joki Game</h5>
                    <h6 class="custom-container-subtitle">Android Via Login</h6>
                </div>
            </a>

        </div> <!-- Akhir custom-row -->
    </div>

    <!-- Optional: Add your custom JavaScript here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    function showLightEffect(image) {
        const container = image.closest('.custom-container'); // Mendapatkan container yang bersangkutan
        container.classList.add('active'); // Tambahkan efek cahaya ke container

        setTimeout(() => {
            container.classList.remove('active'); // Menghapus efek setelah 500ms
        }, 500); // 500 ms delay sebelum menghapus efek
    }
    </script>

</body>
</html>

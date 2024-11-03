<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Offcanvas with Banner</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            background-image: url('{{ asset('background.png') }}');
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            background-attachment: fixed; 
        }
        .navbar-brand {
            display: flex;
            align-items: center;
            position: relative;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            flex-grow: 1;
            transition: transform 0.3s ease;
        }
        .navbar-brand img {
            width: 40px;
            height: auto;
            margin-right: 10px;
            transition: width 0.3s ease;
        }
        .navbar-brand.shift {
            transform: translateX(330px);
        }
        .navbar-toggler {
            margin-right: 15px;
        }
        .offcanvas-body img {
            width: 120px;
            height: auto;
            display: block;
            margin: 0 auto 15px;
        }
        .offcanvas {
            padding-top: 60px;
            z-index: 1040;
        }
        .content-container {
            margin-top: 90px;
            display: flex;
            flex-direction: column; 
            justify-content: center;
            align-items: center; 
            height: auto; 
        }
        .banner-container {
            background-color: rgba(128, 128, 128, 0.3);
            padding: 10px;
            border-radius: 15px;
            box-shadow: 0 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 80%;
            margin-bottom: 20px;
        }
        .banner {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
        }
        .game-image {
            background-color: rgba(128, 128, 128, 0.3);
            padding: 5px;
            width: 190px; 
            height: 200px; 
            border-radius: 15px; 
            box-shadow: 0 0px 4px rgba(0, 0, 0, 0.2); 
            margin-top: -160px; 
            margin-right: 850px; 
            object-fit: cover; 
            object-position: top; 
        }
        .genshin-title {
            color: white;
            font-weight: bold;
            margin-top: 20px;
            margin-right: 1010px;
            font-size: 18px;
            text-align: center;
        }
        .verified-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            color: white;
        }
        .verified-text {
            font-size: 14px;
            margin-right:1000px; /* Adjusted for spacing */
        }
        .verified-icon {
            width: 16px; /* Set the width of the icon */
            height: auto; /* Maintain aspect ratio */
            margin-right: 5px; /* Optional spacing */
        }
        .Instan-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            color: white;
        }
        .Instan-text {
            font-size: 14px;
            margin-right:850px; /* Adjusted for spacing */
            margin-top: -40px;
        }
        .Instan-icon {
            width: 14px; /* Set the width of the icon */
            height: auto; /* Maintain aspect ratio */
            margin-right: 5px; /* Optional spacing */
            margin-top: -40px;
        }
        .title {
            color: rgba(255, 255, 255, 0.9);;
            margin-top: 8px;
            margin-right: 730px;
            font-size: 15px;
            text-align: center;
        }
        .title2 {
            color: rgba(255, 255, 255, 0.9);;
            margin-top: -4px;
            margin-right: 725px;
            font-size: 15px;
            text-align: center;
        }
        .title3 {
            color: rgba(255, 255, 255, 0.9);;
            margin-top: -4px;
            margin-right: 990px;
            font-size: 15px;
            text-align: center;
        }
        .title4 {
            color: rgba(255, 255, 255, 0.9);;
            margin-top: 10px;
            margin-right:920px;
            font-size: 15px;
            text-align: center;
        }
        .title5 {
            color: rgba(255, 255, 255, 0.9);;
            margin-top: -4px;
            margin-right: 952px;
            font-size: 15px;
            text-align: center;
        }
        .title6 {
            color: rgba(255, 255, 255, 0.9);;
            margin-top: -4px;
            margin-right: 920px;
            font-size: 15px;
            text-align: center;
        }
        .title7 {
            color: rgba(255, 255, 255, 0.9);;
            margin-top: -4px;
            margin-right: 870px;
            font-size: 15px;
            text-align: center;
        }
        .title9 {
            color: rgba(255, 255, 255, 0.9);;
            margin-top: -4px;
            margin-right: 775px;
            font-size: 15px;
            text-align: center;
        }

        .title10 {
            color: rgba(255, 255, 255, 0.9);;
            margin-top: -4px;
            margin-right: 760px;
            font-size: 15px;
            text-align: center;
        }
        .title11 {
            color: rgba(255, 255, 255, 0.9);;
            margin-top: -4px;
            margin-right: 660px;
            font-size: 15px;
            text-align: center;
        }
        .title12 {
            color: rgba(255, 255, 255, 0.9);;
            margin-top: -4px;
            margin-right: 915px;
            font-size: 15px;
            text-align: center;
        }
   
        .title13 {
            color: rgba(255, 0, 0, 1);
            margin-top: 10px;
            margin-right: 730px;
            font-size: 15px;
            text-align: center;
        }
        .title14 {
            color: rgba(255, 0, 0, 1);
            margin-top: -4px;
            margin-right: 910px;
            font-size: 15px;
            text-align: center;
        }
        .title8 {
            color: white;
            margin-top: 40px;
            margin-right: 660px;
            font-size: 20px;
            text-align: center;
            overflow: hidden; /* Pastikan teks tidak melampaui batas */
            white-space: nowrap; /* Mencegah teks terputus */
            max-width: 350px; /* Mengatur batas lebar */
            word-wrap: break-word;
           
         }
         .marquee {
            display: inline-block; /* Agar bisa digulirkan */
            animation: scroll 15s linear infinite; /* Mengatur durasi dan kecepatan */
        }

        @keyframes scroll {
            from {
                transform: translateX(100%); /* Mulai dari luar kanan */
            }
            to {
                transform: translateX(-100%); /* Berhenti di luar kiri */
            }
        }

        @keyframes checkmark {
    0% {
        transform: scale(1) rotate(0deg);
    }
    50% {
        transform: scale(1.1) rotate(15deg);
    }
    100% {
        transform: scale(1) rotate(0deg);
    }
}

.verifikasi-icon {
    width: 40px; /* Set the width of the icon */
    height: auto; /* Maintain aspect ratio */
    margin-right: 1050px; /* Optional spacing */
    margin-top: -70px;
    animation: checkmark 0.6s ease-in-out infinite; /* Add checking animation */
}


.data-title {
    color: white; /* Warna teks putih */
    font-size: 20px; /* Ukuran font */
    margin: 0; /* Menghilangkan margin default */
    margin-top: -510px;
    margin-left: 460px;
}

.data-nominal {
    color: white; /* Warna teks putih */
    font-size: 20px; /* Ukuran font */
    margin: 0; /* Menghilangkan margin default */
    margin-top:-180px;
    margin-left: 460px;
}

.data-kode {
    color: white; /* Warna teks putih */
    font-size: 20px; /* Ukuran font */
    margin: 0; /* Menghilangkan margin default */
    margin-top:20px;
    margin-left: 460px;
}


    </style>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="{{ asset('logo.png') }}" alt="Logo">
                Tempat Top Up Murah Terpercaya Se Universe
            </a>
            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                        <li class="nav-item">
                            <img src="{{ asset('logo.png') }}" alt="Logo">
                            <a class="nav-link active" aria-current="page" href="home_game">Semua Game</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home_harga">Daftar Harga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home_lacak">Lacak Pesanan</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false" onclick="toggleDropdown(event)">
                                Calculator MLBB
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="home_winrate">Winrate</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="home_magic">Magic Wheel</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="home_zodiac">Zodiac</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <div class="content-container">
        <div class="banner-container">
            <img src="{{ asset('backgroud1.png') }}" alt="Banner" class="banner">
        </div>
        <img src="{{ asset('gambarpulsa6.png') }}" alt="Game" class="game-image">
        <h3 class="genshin-title">by.U</h3>
        <div class="verified-container">
            <img src="{{ asset('verified_icon.png') }}" alt="Verified Icon" class="verified-icon"> <!-- Replace with the path to your verified icon -->
            <span class="verified-text">Verified</span>
        </div>
        <div class="Instan-container">
            <img src="{{ asset('Instan_icon.png') }}" alt="Instan Icon" class="Instan-icon"> <!-- Replace with the path to your verified icon -->
            <span class="Instan-text">Instan</span>
        </div>
        <h3 class="title">Beli pulsa reguler,paket data, dan masa aktif by.U</h3>
        <h3 class="title2">harga paling murah. Cara beli pulsa dan data by.U</h3>
        <h3 class="title3">termurah :</h3>
        <h3 class="title4">1. Masukkan No HP</h3>
        <h3 class="title5">2. Pilih Nominal</h3>
        <h3 class="title6">3. Pilih Pembayaran</h3>
        <h3 class="title7">4. Masukkan No WhatsApp</h3>
        <h3 class="title9">5. Klik Order Now & lakukan Pembayaran</h3>
        <h3 class="title10">6. Pulsa otomatis masuk ke nomer HP Anda</h3>
        <h3 class="title13">Pastikan Nomor Aktif dan Benar, Kesalahan Bukan</h3>
        <h3 class="title14">Tanggung Jawab Kami!!</h3>
        <h3 class="title8">
            <span class="marquee">
                Proses Otomatis | Open 24 Jam Nonstop | Terimakasih telah berbelanja!
            </span>
        </h3>
        <div class="verifikasi-container">
            <img src="{{ asset('verifikasi_icon.png') }}" alt="verifikasi Icon" class="verifikasi-icon"> <!-- Replace with the path to your verified icon -->
        </div>
    </div>
   
    <!-- Tambahkan bagian ini di dalam .content-container -->
    <div class="data-container">
        <h4 class="data-title">@include('form_byU') </h4>
    </div> 

    
    </div>
   
</div>

    <!-- JavaScript -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        function toggleDropdown(event) {
            event.preventDefault();
            const dropdownMenu = event.target.nextElementSibling;

            if (dropdownMenu.classList.contains('show')) {
                dropdownMenu.classList.remove('show');
            } else {
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => menu.classList.remove('show'));
                dropdownMenu.classList.add('show');
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            var offcanvasElement = document.getElementById('offcanvasDarkNavbar');
            var navbarBrand = document.querySelector('.navbar-brand');

            offcanvasElement.addEventListener('show.bs.offcanvas', function () {
                navbarBrand.classList.add('shift');
            });

            offcanvasElement.addEventListener('hide.bs.offcanvas', function () {
                navbarBrand.classList.remove('shift');
            });
        });
    </script>
</body>
</html> 
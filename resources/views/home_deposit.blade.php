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
            margin-right: 920px;
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
            margin-right: 1000px; /* Adjusted for spacing */
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
        /* Dropdown styles */
        .dropdown-menu {
            min-width: 150px;
        }
        .data-card2 {
    color: white; /* Warna teks putih */
    font-size: 20px; /* Ukuran font */
    margin: 0; /* Menghilangkan margin default */
    margin-top: -200px;
    margin-left: 500px;
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
            <div class="dropdown">
            <img src="{{ asset('user.png') }}" alt="Menu" class="navbar-dropdown-icon" style="cursor:pointer; width: 30px; height: 30px; margin-right: 10px;" data-bs-toggle="dropdown" aria-expanded="false">

            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ url('home_dasboard') }}">Dashboard</a></li>
                <li><a class="dropdown-item" href="{{ url('home_deposit') }}">IDR 0</a></li>
                <li><a class="dropdown-item" href="{{ url('login') }}">Keluar</a></li>
            </ul>

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
    <div class="data-container">
        <h4 class="data-card2">@include('deposit') </h4>
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

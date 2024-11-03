<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Document')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
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
        .dropdown-menu {
            display: none;
            background-color: #343a40;
            position: absolute;
            top: 100%;
            left: 0;
            padding: 10px;
            border-radius: 0.25rem;
            z-index: 1050;
        }
        .login-icon-container {
            position: relative;
            display: flex;
            align-items: center;
            margin-left: auto;
        }
        .login-icon {
            width: 30px;
            height: auto;
            cursor: pointer;
            margin-left: 100px;
        }
        .login-dropdown {
            display: none; /* Hide dropdown initially */
            position: absolute;
            top: 100%;
            right: 0;
            background-color: white;
            border-radius: 0.25rem;
            margin-top: 10px;
            padding: 5px; /* Reduce padding for horizontal layout */
            z-index: 1050;
            flex-direction: column; /* Stack items vertically */
        }
        .login-dropdown.show {
            display: flex; /* Show dropdown in flex mode when toggled */
        }
        .login-dropdown .dropdown-item {
            color: #fff;
            text-decoration: none;
            padding: 8px 16px;
            display: block;
        }
        .login-dropdown .dropdown-item:hover {
            background-color: #495057;
        }
        .content-container {
            margin-top: 20px;
        }
        .data-card {
    color: white; /* Warna teks putih */
    font-size: 20px; /* Ukuran font */
    margin: 0; /* Menghilangkan margin default */
    margin-top: -80px;
    margin-left: -200px;
}
.data-card2 {
    color: white; /* Warna teks putih */
    font-size: 20px; /* Ukuran font */
    margin: 0; /* Menghilangkan margin default */
    margin-top: -300px;
    margin-left: -200px;
}
.navbar {
    height: 80px; /* Adjust this value as needed */
    width: 99%; /* Full width */
    padding: 0 15px; /* Add horizontal padding */
}


    </style>
</head>
<body>

    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="{{ asset('logo.png') }}" alt="Logo">
                Tempat Top Up Murah Terpercaya Se Universe
            </a>

            <!-- Login Icon with Dropdown -->
            <div class="login-icon-container">
    <a href="#" title="Masuk" onclick="toggleLoginDropdown(event)">
        <img src="{{ asset('masuk.png') }}" alt="Masuk" class="login-icon">
    </a>
    <!-- Dropdown Menu -->
    <ul class="login-dropdown">
        <div style="text-align: center; margin-bottom: 10px;"> <!-- Centered content -->
            <img src="{{ asset('logo.png') }}" alt="Logo" style="width: 50px; height: auto;"> <!-- Logo -->
            <div style="font-weight: bold; font-size: 16px; margin-top: 5px;">Masuk atau Daftar?</div> <!-- Title -->
        </div>
        <div style="display: flex; justify-content: center; gap: 10px;"> <!-- Flex container for cards -->
            <div style="background-color: orange; border-radius: 5px; "> <!-- Adjusted for padding -->
                <li style="list-style: none;"><a class="dropdown-item" href="login">Masuk</a></li>
            </div>
            <div style="background-color: navy; border-radius: 5px; "> <!-- Adjusted for padding -->
                <li style="list-style: none;"><a class="dropdown-item" href="register">Daftar</a></li>
            </div>
        </div>
    </ul>
</div>

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
    
    <div class="container mt-5 pt-5 content-container">
        @include('banner') 
        @yield('content') 
    </div>
    <div class="data-container">
        <h4 class="data-card">@include('populer') </h4>
    </div> 
    <div class="data-container">
        <h4 class="data-card2">@include('menu') </h4>
    </div> 

    <!-- Link ke file JavaScript Bootstrap menggunakan asset() -->
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

        function toggleLoginDropdown(event) {
            event.preventDefault();
            const dropdown = document.querySelector('.login-icon-container .login-dropdown');
            dropdown.classList.toggle('show');
        }

        // Close dropdowns if clicked outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.login-icon-container')) {
                document.querySelector('.login-dropdown.show')?.classList.remove('show');
            }
            if (!event.target.closest('.nav-item')) {
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => menu.classList.remove('show'));
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            var offcanvasElement = document.getElementById('offcanvasDarkNavbar');
            var navbarBrand = document.querySelector('.navbar-brand');
            
            offcanvasElement.addEventListener('show.bs.offcanvas', function () {
                navbarBrand.classList.add('shift');
                document.body.classList.add('offcanvas-open');
            });

            offcanvasElement.addEventListener('hide.bs.offcanvas', function () {
                navbarBrand.classList.remove('shift');
                document.body.classList.remove('offcanvas-open');
            });
        });
    </script>
</body>
</html>

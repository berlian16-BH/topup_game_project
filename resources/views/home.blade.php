<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Document')</title>
    <!-- Link ke file CSS Bootstrap menggunakan asset() -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        html, body {
            height: 100%; /* Pastikan body dan html memiliki tinggi 100% */
            margin: 0; /* Menghapus margin default */
        }
        body {
            background-image: url('{{ asset('background.png') }}');
            background-size: cover; /* Menutupi seluruh area */
            background-position: center; /* Posisi gambar di tengah */
            background-repeat: no-repeat; /* Tidak mengulang gambar */
            background-attachment: fixed; /* Membuat latar belakang tetap */
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
        .dropdown-menu.show {
            display: block;
        }
        .dropdown-item {
            color: #fff;
            text-decoration: none;
            padding: 8px 16px;
            display: block;
        }
        .dropdown-item:hover {
            background-color: #495057;
        }
        .dropdown-divider {
            border-top: 1px solid #6c757d;
            margin: 5px 0;
        }
        .content-container {
            margin-top: 20px; /* Jarak atas untuk area konten */
        }
        .banner {
            margin-bottom: 20px; /* Jarak bawah antara banner dan menu */
        }
    </style>
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
                            <a class="nav-link active" aria-current="page" href="#">Semua Game</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Daftar Harga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lacak Pesanan</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false" onclick="toggleDropdown(event)">
                                Calculator MLBB
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Winrate</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Magic Wheel</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Zodiac</a></li>
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

    <div class="container mt-5 pt-5 content-container">
        @include('menu') 
        @yield('content') 
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
                // Close other open dropdowns
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => menu.classList.remove('show'));
                dropdownMenu.classList.add('show');
            }
        }

        // Close dropdowns if clicked outside
        document.addEventListener('click', function(event) {
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

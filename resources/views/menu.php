<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Kotak dan Navbar dengan Efek Neon</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            overflow-x: hidden; /* Mencegah scroll horizontal */
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .main-navbar {
            display: flex;
            gap: 15px;
            margin: 20px 0;
            justify-content: center; /* Center the navbar items horizontally */
            width: 100%; /* Ensure navbar takes full width */
            max-width: 900px; /* Optional: set max width for better control */
            box-sizing: border-box; /* Ensure padding and borders are included in the width */
        }

        .main-navbar .nav-item {
            position: relative;
            text-decoration: none;
            color: #fff; /* Warna teks putih */
            font-size: 20px;
            padding: 10px 20px;
            border-radius: 50px;
            background-color: transparent; /* Menghapus latar belakang */
            border: 2px solid black;
            transition: color 0.3s, background-color 0.3s, box-shadow 0.3s, transform 0.3s;
            cursor: pointer;
            overflow: hidden;
        }

        .main-navbar .nav-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.2); /* Efek latar belakang saat hover */
            transform: scaleX(0);
            transform-origin: bottom left;
            transition: transform 0.3s;
        }

        .main-navbar .nav-item:hover, .main-navbar .nav-item:focus {
            color: #fff; /* Warna teks tetap putih saat hover */
            background-color: rgba(255, 255, 255, 0.2); /* Latar belakang semi-transparan saat hover */
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.8), 0 0 20px rgba(255, 255, 255, 0.6);
            transform: translateY(-5px);
        }

        .main-navbar .nav-item:hover::before, .main-navbar .nav-item:focus::before {
            transform: scaleX(1);
        }

        .main-navbar .nav-item.active {
            color: #000; /* Warna teks untuk item aktif */
            background-color: rgba(255, 255, 255, 0.4); /* Latar belakang semi-transparan untuk item aktif */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.8), 0 0 20px rgba(0, 0, 0, 0.6);
        }

        .content {
            width: 100%;
            max-width: 200px; /* Adjust width as needed */
            text-align: center;
            margin-top: 20px;
        }

        .card {
            border-radius: 20px; /* Ubah nilai untuk membuat sudut lebih oval atau bulat */
            box-shadow: 0 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 200px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: box-shadow 0.3s, transform 0.6s, background-color 0.3s, border 0.3s;
            border: 1px solid rgba(0, 0, 0, 0.1);
            background-color: rgba(208, 208, 208, 0.5); /* Latar belakang transparan */
        }

        .card:hover, .card:focus {
            background-color: rgba(176, 176, 176, 0.5); /* Warna transparan saat hover */
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.8), 0 0 40px rgba(255, 255, 255, 0.6);
            transform: scale(1.05);
            border: 1px solid rgba(0, 0, 0, 0.3);
        }

        .no-transition {
            transition: none !important;
        }
    </style>
</head>
<body>
    <div class="main-navbar">
        <span class="nav-item" data-target="list_game">Game Lainnya</span>
        <span class="nav-item" data-target="list_pulsa">Pulsa</span>
        <span class="nav-item" data-target="list_voucher">Voucher</span>
        <span class="nav-item" data-target="list_liveapp">LiveApp</span>
        <span class="nav-item" data-target="list_pln">PLN</span>
    </div>
    <div id="content" class="content">
        <!-- Konten akan dimuat di sini -->
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var navItems = document.querySelectorAll('.nav-item');

            // Function to load content
            function loadContent(target) {
                if (target === 'list_game') {
                    fetch('/list_game')
                        .then(response => response.text())
                        .then(data => {
                            document.getElementById('content').innerHTML = data;
                        })
                        .catch(error => {
                            document.getElementById('content').innerHTML = '<p>Error loading content.</p>';
                        });
                } else if (target === 'list_voucher') {
                    fetch('/list_voucher')
                        .then(response => response.text())
                        .then(data => {
                            document.getElementById('content').innerHTML = data;
                        })
                        .catch(error => {
                            document.getElementById('content').innerHTML = '<p>Error loading Pulsa content.</p>';
                        });
                }
                else if (target === 'list_pulsa') {
                    fetch('/list_pulsa')
                        .then(response => response.text())
                        .then(data => {
                            document.getElementById('content').innerHTML = data;
                        })
                        .catch(error => {
                            document.getElementById('content').innerHTML = '<p>Error loading Pulsa content.</p>';
                        });
                }
                else if (target === 'list_liveapp') {
                    fetch('/list_liveapp')
                        .then(response => response.text())
                        .then(data => {
                            document.getElementById('content').innerHTML = data;
                        })
                        .catch(error => {
                            document.getElementById('content').innerHTML = '<p>Error loading Pulsa content.</p>';
                        });
                }
                else if (target === 'list_pln') {
                    fetch('/list_pln')
                        .then(response => response.text())
                        .then(data => {
                            document.getElementById('content').innerHTML = data;
                        })
                        .catch(error => {
                            document.getElementById('content').innerHTML = '<p>Error loading Pulsa content.</p>';
                        });
                }
                 else {
                    document.getElementById('content').innerHTML = '<p>Konten untuk ' + target + '</p>';
                }
            }

            // Set default content
            var defaultNavItem = document.querySelector('.nav-item[data-target="list_game"]');
            if (defaultNavItem) {
                defaultNavItem.classList.add('active');
                loadContent('list_game');
            }

            // Add click event listener for navigation items
            navItems.forEach(function(navItem) {
                navItem.addEventListener('click', function() {
                    var target = this.getAttribute('data-target');

                    // Remove 'active' class from all nav items
                    navItems.forEach(function(item) {
                        item.classList.remove('active');
                    });

                    // Add 'active' class to the clicked nav item
                    this.classList.add('active');

                    // Load content for the clicked item
                    loadContent(target);
                });
            });
        });
    </script>
</body>
</html>

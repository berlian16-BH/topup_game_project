<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Bootstrap Navbar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles */
        body {
            background-color: white;
            color: black;
            margin: 0;
            font-size: 16px;
        }

        .custom-card {
            position: relative;
            width: 210px;
            height: 250px; /* Menetapkan tinggi tetap untuk card */
            background-color: rgba(128, 128, 128, 0.5);
            border: 1px solid rgba(128, 128, 128, 0.8);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            margin: 0 550px; /* Menambahkan margin 10px di kiri dan kanan */
           
        }

        .blue-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 128, 0.5); /* Navy blue color */
            border-radius: 15px; /* Match the card border radius */
            z-index: 1; /* Ensure it appears above the card content */
            opacity: 0; /* Initially hidden */
            transition: opacity 0.3s ease; /* Smooth transition */
        }

        .custom-card-img-top {
            height: 180px; /* Ukuran gambar yang konsisten */
            width: 100%;
            object-fit: cover;
            object-position: top;
            border-bottom: 1px solid rgba(128, 128, 128, 0.8);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .custom-card:hover {
            box-shadow: 0 0 15px 5px rgba(255, 255, 255, 0.6);
        }

        .custom-card.active {
            box-shadow: 0 0 20px 10px rgba(255, 255, 255, 0.8);
            transform: scale(1.05);
        }

        .custom-card-body {
            text-align: center;
            color: black;
            padding: 10px; /* Padding yang lebih kecil untuk menyesuaikan ruang */
        }

        .custom-card-title {
            font-size: 16px;
            margin: 0;
        }

        .custom-card-subtitle {
            font-weight: normal;
            margin: 0;
        }

        /* Add custom margin for card spacing */
        .card-container {
            margin-bottom: 20px; /* Adjust this value to increase/decrease space */
        }

        .row {
            display: flex;
            justify-content: flex-start; /* Mengatur item di sebelah kiri */
            flex-wrap: wrap; /* Membungkus card ke baris berikutnya jika diperlukan */
            margin-right: 500px;
        }
    </style>
</head>
<body>

    <!-- Card Container -->
    <div class="container mt-5">
        <div class="row">
            <!-- Kartu 1 -->
            <div class="col-md-2 mb-3 card-container">
                <a href="garena" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambarvoucher1.png" class="custom-card-img-top" alt="unipin" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">Garena Shell(ID)</h5>
                            <h6 class="custom-card-subtitle">Garene</h6>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Kartu 2 -->
            <div class="col-md-2 mb-3 card-container">
                <a href="unipin" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambarvoucher2.png" class="custom-card-img-top" alt="unipin" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">Unipin(ID)</h5>
                            <h6 class="custom-card-subtitle">Unipin</h6>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Kartu 3 -->
            <div class="col-md-2 mb-3 card-container">
                <a href="RazerGold" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambarvoucher3.png" class="custom-card-img-top" alt="unipin" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">Razer Gold(ID)</h5>
                            <h6 class="custom-card-subtitle">Razer Inc.</h6>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Kartu 4 -->
            <div class="col-md-2 mb-3 card-container">
                <a href="GooglePlay" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambarvoucher4.png" class="custom-card-img-top" alt="Google Play Indonesia" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">Google Play Indonesia</h5>
                            <h6 class="custom-card-subtitle">Google Play</h6>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Kartu 5 -->
            <div class="col-md-2 mb-3 card-container">
                <a href="steam" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambarvoucher5.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">Steam Wallet(IDR)</h5>
                            <h6 class="custom-card-subtitle">Stem.</h6>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Kartu 6 -->
            <div class="col-md-2 mb-3 card-container">
                <a href="POINTBLANK" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambarvoucher6.png" class="custom-card-img-top" alt="POINT BLANK" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">POINT BLANK</h5>
                            <h6 class="custom-card-subtitle">Zeppeto</h6>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Kartu 7 -->
            <div class="col-md-2 mb-3 card-container">
                <a href="Roblox" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambarvoucher7.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">Roblox</h5>
                            <h6 class="custom-card-subtitle">Voucher</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function showLightEffect(event, link) {
            event.preventDefault(); // Prevent default link behavior
            const card = link.querySelector('.custom-card'); // Get the card within the link
            const overlay = card.querySelector('.blue-overlay'); // Get the overlay

            card.classList.add('active'); // Add light effect to card
            overlay.style.opacity = 1; // Show the blue overlay

            setTimeout(() => {
                overlay.style.opacity = 0; // Hide overlay after 300ms
                card.classList.remove('active'); // Remove effect after 500ms
                window.location.href = link.getAttribute('href'); // Redirect after animation
            }, 500); // Match this duration with CSS transition duration
        }
    </script>
</body>
</html>

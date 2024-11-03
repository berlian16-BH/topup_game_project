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
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .container {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            gap: 20px;
            position: relative;
        }

        .pembelian-container {
            max-width: 1000px;
            background-color: rgba(128, 128, 128, 0.3); /* Semi-transparent gray */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.4); /* Softer shadow with transparency */
            max-height: 1400px;
            width: 90%;
            margin-top: 180px;
            margin-left: 190px;

        }

        .pembelian-item {
            margin-bottom: 5px;
            padding: 5px;
            border-radius: 5px;
        }

        .summary-card {
    margin-bottom: 10px;
    padding: 10px;
    background-color: rgba(128, 128, 128, 0.3); /* Semi-transparent gray */
    border-radius: 10px;
    display: flex;
    flex-direction: row;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.4); /* Softer shadow with transparency */
    justify-content: space-between;
    align-items: center;
    width: 90%;
    max-width: 300%;
    overflow: hidden;
    margin-right: -1000px;
    margin-left: 510px;
    margin-top: 100px;
}


        .summary-card p {
            flex: 1;
            margin: 0 12px;
            text-align: left;
            font-size: 13px; /* Adjust the size as needed */
        }

        h2 {
            text-align: center;
            font-size: 12px; /* Adjust the size as needed */
        }

        button1 {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button1:hover {
            background-color: #45a049;
        }

        .image-display img {
            width: 100%;
            max-width: 300px;
            display: none;
        }

        .line-above {
            border-top: 1px solid #ccc;
            margin-bottom: 10px;
            width: 100%;
        }

        .voucher-separator {
            border-top: 1px solid #ccc;
            margin: 10px 0;
        }

        .total-pembayaran {
            font-weight: bold;
            margin-top: 10px;
        }

        .product-info {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .product-info img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .payment-status-card {
            padding: 20px;
            text-align: center;
            width: 300px;
            margin: 10px;
            position: absolute;
            left: 70px;
            top:100px;
        }

        .payment-status-card strong {
            font-size: 1.5em;
            color: #c00;
        }

        .countdown {
            font-weight: bold;
            font-size: 1.5em;
            margin-top: 10px;
        }

        /* Menambahkan gaya untuk menampilkan nomor OVO */
        .ovo-number {
            font-weight: bold;
            color: white; /* Warna biru untuk nomor OVO */
        }
        .shopeepay-number {
            font-weight: bold;
            color: white; /* Warna biru untuk nomor OVO */
        }
        .countdown-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px; /* Jarak antar kartu */
}

.card {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 10px;
    text-align: center;
    width: 80px; /* Lebar kartu */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.card span {
    font-size: 2em; /* Ukuran font untuk angka */
    font-weight: bold;
}

.label {
    font-size: 0.8em; /* Ukuran font untuk label */
    color: #777;
}
    
.white-text {
    color: white;
}
.white-text1 {
    color: white;
    margin-top: 10px;
}
.container {
    position: relative;
    height: 400px; /* Adjust as needed */
}

.white-text2 {
    color: white;
    margin-top: 20px;
    position: absolute;
    top: 70%; /* Positions halfway down the container */
    transform: translateY(-70%); /* Centers the text vertically */
    text-align: center;
    margin-left: 500px;
}
.green-text {
    color: #25D366; /* WhatsApp green color */
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


    <div class="container">
        <div class="payment-status-card">
            <p><strong>Belum Bayar</strong></p>
            <p class="white-text"> Selesaikan Pembayaran Sebelum Waktu Habis</p>
            <div class="countdown-container">
    <div class="card">
        <span id="hours">03</span>
        <div class="label">Jam</div>
    </div>
    <div class="card">
        <span id="minutes">00</span>
        <div class="label">Menit</div>
    </div>
    <div class="card">
        <span id="seconds">00</span>
        <div class="label">Detik</div>
    </div>
</div>

            <p class="white-text1">Agar Pesanan Kamu Tidak Expired</p>
            <p class="white-text">Kode Bayar / Nomor VA / QRIS:</p>
            <div class="pembelian-item" id="paymentResult"></div>
            <div class="image-display">
                <img id="displayedImage" src="" alt="Selected Payment Method">
            </div>
            <!-- Menambahkan elemen untuk menampilkan nomor OVO -->
            <div id="ovoNumberDisplay" class="ovo-number" style="display:none;">0987658765454</div>
<div id="danaNumberDisplay" class="dana-number" style="display:none;">12345678967</div>
<div id="shopeepayCodeDisplay" class="shopeepay-number" style="display:none;">00000000000</div>
<div id="briCodeDisplay" class="bri-number" style="display:none;">11111111111111111</div>
<div id="bniCodeDisplay" class="bni-number" style="display:none;">22222222222222222</div> <!-- Kode BNI -->
<div id="cimbCodeDisplay" class="cimb-number" style="display:none;">33333333333333333</div> <!-- Kode CIMB -->
<div id="permataCodeDisplay" class="permata-number" style="display:none;">44444444444444444</div> <!-- Kode Permata -->
<div id="mandiriCodeDisplay" class="mandiri-number" style="display:none;">55555555555555555</div> <!-- Kode Mandiri -->
<div id="maybankCodeDisplay" class="maybank-number" style="display:none;">66666666666666666</div> <!-- Kode MayBank -->
<div id="alfamartCodeDisplay" class="alfamart-number" style="display:none;"></div> <!-- Kode Alfamart/Pegadaian/KantorPos -->
<div id="vazzuniverseCodeDisplay" class="vazzuniverse-number" style="display:none;">88888888888888888</div> <!-- Kode VAZZUNIVERSE -->


        </div>

        <div class="summary-card">
            <p class="white-text">
                <strong>Metode Pembayaran:</strong>
                <span id="paymentMethodDisplay"></span>
            </p>
            <p class="white-text">
                <strong>Tanggal/Waktu Pembelian:</strong>
                <span id="purchaseDateDisplay"></span>
            </p >
            <p class="white-text">
                <strong>Nomor Invoice:</strong>
                <span id="invoiceNumberDisplay"></span>
            </p>
            <p class="white-text">
                <strong>Status Pesanan:</strong>
                <span id="orderStatusDisplay"></span>
            </p>
        </div>

        <div class="pembelian-container">
            <div class="product-info">
                <img src="gambar27.png" alt="Genshin" />
                <span class="white-text">Mobile Legends Bang Bang</span>
            </div>

            <div class="pembelian-item">
                <div class="line-above"></div>
                <p class="white-text"><strong>User ID:</strong> <span id="userIdDisplay"></span></p>
            </div>

            <div class="pembelian-item">
                <p class="white-text"><strong>Server:</strong> <span id="serverDisplay"></span></p>
            </div>

            <div class="pembelian-item">
                <p class="white-text"><strong>Nomor WhatsApp:</strong> <span id="whatsappNumberDisplay"></span></p>
            </div>

            <div class="pembelian-item">
                <p class="white-text"><strong>Harga:</strong> <span id="priceDisplay"></span></p>
            </div>

            <div class="pembelian-item">
                <p class="white-text"><strong>Item:</strong> <span id="itemName"></span></p>
            </div>

            <div class="pembelian-item">
                <p class="white-text"><strong>Kode Voucher:</strong> <span id="voucherCodeDisplay"></span></p>
            </div>

            <div class="voucher-separator"></div>

            <div class="white-text" >
                <strong>Total Pembayaran:</strong> <span id="totalPaymentDisplay"></span>
            </div>
           
        </div>
    </div>

    <<div class="container">
    <p class="white-text2">Jika Kamu Mengalami Kendala Pembayaran Atau Adanya Keluhan Terkait Pembayaran Anda Dapat Menghubungi Kami Melalui <span class="green-text">WhatsApp</span></p>
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

        function updateDisplay() {
            const userId = localStorage.getItem('userId');
            const server = localStorage.getItem('server');
            const whatsappNumber = localStorage.getItem('whatsappNumber');
            const selectedPrice = localStorage.getItem('selectedPrice');
            const itemName = localStorage.getItem('itemName');
            const paymentMethod = localStorage.getItem('paymentMethod');
            const voucherCode = localStorage.getItem('voucherCode');
            const purchaseDate = new Date().toLocaleString();
            const invoiceNumber = localStorage.getItem('invoiceNumber') || generateInvoiceNumber();
            const orderStatus = localStorage.getItem('orderStatus') || 'Pending';
            const totalPayment = selectedPrice ? selectedPrice : '-';

            if (!localStorage.getItem('invoiceNumber')) {
                localStorage.setItem('invoiceNumber', invoiceNumber);
            }

            // Menghapus data lama jika kosong
            localStorage.removeItem('voucherCode');
            localStorage.removeItem('selectedPrice');
            localStorage.removeItem('server');

            // Menampilkan data ke elemen HTML
            document.getElementById('userIdDisplay').textContent = userId ? userId : '-';
            document.getElementById('serverDisplay').textContent = server ? server : '-';
            document.getElementById('whatsappNumberDisplay').textContent = whatsappNumber ? whatsappNumber : '-';
            document.getElementById('priceDisplay').textContent = selectedPrice ? selectedPrice : '-';
            document.getElementById('itemName').textContent = itemName ? itemName : '-';
            document.getElementById('voucherCodeDisplay').textContent = voucherCode ? voucherCode : '-';
            document.getElementById('purchaseDateDisplay').textContent = purchaseDate;
            document.getElementById('invoiceNumberDisplay').textContent = invoiceNumber;
            document.getElementById('orderStatusDisplay').textContent = orderStatus;
            document.getElementById('totalPaymentDisplay').textContent = totalPayment;

            // Memperbarui metode pembayaran
            document.getElementById('paymentMethodDisplay').textContent = paymentMethod;
const paymentResult = document.getElementById('paymentResult');
const imageDisplay = document.getElementById('displayedImage');
const ovoNumberDisplay = document.getElementById('ovoNumberDisplay');
const danaNumberDisplay = document.getElementById('danaNumberDisplay'); // Elemen untuk nomor Dana
const shopeepayCodeDisplay = document.getElementById('shopeepayCodeDisplay'); // Elemen untuk kode ShopeePay
const briCodeDisplay = document.getElementById('briCodeDisplay'); // Elemen untuk kode BRI
const bniCodeDisplay = document.getElementById('bniCodeDisplay'); // Elemen untuk kode BNI
const cimbCodeDisplay = document.getElementById('cimbCodeDisplay'); // Elemen untuk kode CIMB
const permataCodeDisplay = document.getElementById('permataCodeDisplay'); // Elemen untuk kode Permata
const mandiriCodeDisplay = document.getElementById('mandiriCodeDisplay'); // Elemen untuk kode Mandiri
const maybankCodeDisplay = document.getElementById('maybankCodeDisplay'); // Elemen untuk kode MayBank
const alfamartCodeDisplay = document.getElementById('alfamartCodeDisplay'); // Elemen untuk kode Alfamart/Pegadaian/KantorPos
const vazzuniverseCodeDisplay = document.getElementById('vazzuniverseCodeDisplay'); // Elemen untuk kode VAZZUNIVERSE
const errorDisplay = document.getElementById('errorDisplay');

// Menampilkan elemen yang sesuai berdasarkan metode pembayaran
if (paymentMethod === 'Ovo') {
    imageDisplay.style.display = 'none'; // Tidak menampilkan gambar untuk OVO
    ovoNumberDisplay.style.display = 'block'; // Menampilkan nomor OVO
    // Menyembunyikan elemen lain
    danaNumberDisplay.style.display = 'none';
    shopeepayCodeDisplay.style.display = 'none';
    briCodeDisplay.style.display = 'none';
    bniCodeDisplay.style.display = 'none';
    cimbCodeDisplay.style.display = 'none';
    permataCodeDisplay.style.display = 'none';
    mandiriCodeDisplay.style.display = 'none';
    maybankCodeDisplay.style.display = 'none';
    alfamartCodeDisplay.style.display = 'none';
    vazzuniverseCodeDisplay.style.display = 'none';
    errorDisplay.style.display = 'none'; // Sembunyikan pesan kesalahan
} else if (paymentMethod === 'Qris') {
    imageDisplay.src = 'qris.png'; // Ganti dengan path logo QRIS Anda
    imageDisplay.style.display = 'block'; // Menampilkan gambar untuk QRIS
    // Menyembunyikan elemen lain
    ovoNumberDisplay.style.display = 'none';
    danaNumberDisplay.style.display = 'none';
    shopeepayCodeDisplay.style.display = 'none';
    briCodeDisplay.style.display = 'none';
    bniCodeDisplay.style.display = 'none';
    cimbCodeDisplay.style.display = 'none';
    permataCodeDisplay.style.display = 'none';
    mandiriCodeDisplay.style.display = 'none';
    maybankCodeDisplay.style.display = 'none';
    alfamartCodeDisplay.style.display = 'none';
    vazzuniverseCodeDisplay.style.display = 'none';
    errorDisplay.style.display = 'none'; // Sembunyikan pesan kesalahan
} else if (paymentMethod === 'Dana') {
    imageDisplay.style.display = 'none'; // Tidak menampilkan gambar untuk Dana
    danaNumberDisplay.style.display = 'block'; // Menampilkan nomor Dana
    // Menyembunyikan elemen lain
    ovoNumberDisplay.style.display = 'none';
    shopeepayCodeDisplay.style.display = 'none';
    briCodeDisplay.style.display = 'none';
    bniCodeDisplay.style.display = 'none';
    cimbCodeDisplay.style.display = 'none';
    permataCodeDisplay.style.display = 'none';
    mandiriCodeDisplay.style.display = 'none';
    maybankCodeDisplay.style.display = 'none';
    alfamartCodeDisplay.style.display = 'none';
    vazzuniverseCodeDisplay.style.display = 'none';
    errorDisplay.style.display = 'none'; // Sembunyikan pesan kesalahan
} else if (paymentMethod === 'ShopeePay') {
    imageDisplay.style.display = 'none'; // Tidak menampilkan gambar untuk ShopeePay
    shopeepayCodeDisplay.style.display = 'block'; // Menampilkan kode ShopeePay
    // Menyembunyikan elemen lain
    ovoNumberDisplay.style.display = 'none';
    danaNumberDisplay.style.display = 'none';
    briCodeDisplay.style.display = 'none';
    bniCodeDisplay.style.display = 'none';
    cimbCodeDisplay.style.display = 'none';
    permataCodeDisplay.style.display = 'none';
    mandiriCodeDisplay.style.display = 'none';
    maybankCodeDisplay.style.display = 'none';
    alfamartCodeDisplay.style.display = 'none';
    vazzuniverseCodeDisplay.style.display = 'none';
    errorDisplay.style.display = 'none'; // Sembunyikan pesan kesalahan
} else if (paymentMethod === 'BRI') {
    imageDisplay.style.display = 'none'; // Tidak menampilkan gambar untuk BRI
    briCodeDisplay.style.display = 'block'; // Menampilkan kode BRI
    // Menyembunyikan elemen lain
    ovoNumberDisplay.style.display = 'none';
    danaNumberDisplay.style.display = 'none';
    shopeepayCodeDisplay.style.display = 'none';
    bniCodeDisplay.style.display = 'none';
    cimbCodeDisplay.style.display = 'none';
    permataCodeDisplay.style.display = 'none';
    mandiriCodeDisplay.style.display = 'none';
    maybankCodeDisplay.style.display = 'none';
    alfamartCodeDisplay.style.display = 'none';
    vazzuniverseCodeDisplay.style.display = 'none';
    errorDisplay.style.display = 'none'; // Sembunyikan pesan kesalahan
} else if (paymentMethod === 'BNI') {
    imageDisplay.style.display = 'none'; // Tidak menampilkan gambar untuk BNI
    bniCodeDisplay.style.display = 'block'; // Menampilkan kode BNI
    // Menyembunyikan elemen lain
    ovoNumberDisplay.style.display = 'none';
    danaNumberDisplay.style.display = 'none';
    shopeepayCodeDisplay.style.display = 'none';
    briCodeDisplay.style.display = 'none';
    cimbCodeDisplay.style.display = 'none';
    permataCodeDisplay.style.display = 'none';
    mandiriCodeDisplay.style.display = 'none';
    maybankCodeDisplay.style.display = 'none';
    alfamartCodeDisplay.style.display = 'none';
    vazzuniverseCodeDisplay.style.display = 'none';
    errorDisplay.style.display = 'none'; // Sembunyikan pesan kesalahan
} else if (paymentMethod === 'CIMB') {
    imageDisplay.style.display = 'none'; // Tidak menampilkan gambar untuk CIMB
    cimbCodeDisplay.style.display = 'block'; // Menampilkan kode CIMB
    // Menyembunyikan elemen lain
    ovoNumberDisplay.style.display = 'none';
    danaNumberDisplay.style.display = 'none';
    shopeepayCodeDisplay.style.display = 'none';
    briCodeDisplay.style.display = 'none';
    bniCodeDisplay.style.display = 'none';
    permataCodeDisplay.style.display = 'none';
    mandiriCodeDisplay.style.display = 'none';
    maybankCodeDisplay.style.display = 'none';
    alfamartCodeDisplay.style.display = 'none';
    vazzuniverseCodeDisplay.style.display = 'none';
    errorDisplay.style.display = 'none'; // Sembunyikan pesan kesalahan
} else if (paymentMethod === 'Permata') {
    imageDisplay.style.display = 'none'; // Tidak menampilkan gambar untuk Permata
    permataCodeDisplay.style.display = 'block'; // Menampilkan kode Permata
    // Menyembunyikan elemen lain
    ovoNumberDisplay.style.display = 'none';
    danaNumberDisplay.style.display = 'none';
    shopeepayCodeDisplay.style.display = 'none';
    briCodeDisplay.style.display = 'none';
    bniCodeDisplay.style.display = 'none';
    cimbCodeDisplay.style.display = 'none';
    mandiriCodeDisplay.style.display = 'none';
    maybankCodeDisplay.style.display = 'none';
    alfamartCodeDisplay.style.display = 'none';
    vazzuniverseCodeDisplay.style.display = 'none';
    errorDisplay.style.display = 'none'; // Sembunyikan pesan kesalahan
} else if (paymentMethod === 'Mandiri') {
    imageDisplay.style.display = 'none'; // Tidak menampilkan gambar untuk Mandiri
    mandiriCodeDisplay.style.display = 'block'; // Menampilkan kode Mandiri
    // Menyembunyikan elemen lain
    ovoNumberDisplay.style.display = 'none';
    danaNumberDisplay.style.display = 'none';
    shopeepayCodeDisplay.style.display = 'none';
    briCodeDisplay.style.display = 'none';
    bniCodeDisplay.style.display = 'none';
    cimbCodeDisplay.style.display = 'none';
    permataCodeDisplay.style.display = 'none';
    maybankCodeDisplay.style.display = 'none';
    alfamartCodeDisplay.style.display = 'none';
    vazzuniverseCodeDisplay.style.display = 'none';
    errorDisplay.style.display = 'none'; // Sembunyikan pesan kesalahan
} else if (paymentMethod === 'MayBank') {
    imageDisplay.style.display = 'none'; // Tidak menampilkan gambar untuk MayBank
    maybankCodeDisplay.style.display = 'block'; // Menampilkan kode MayBank
    // Menyembunyikan elemen lain
    ovoNumberDisplay.style.display = 'none';
    danaNumberDisplay.style.display = 'none';
    shopeepayCodeDisplay.style.display = 'none';
    briCodeDisplay.style.display = 'none';
    bniCodeDisplay.style.display = 'none';
    cimbCodeDisplay.style.display = 'none';
    permataCodeDisplay.style.display = 'none';
    mandiriCodeDisplay.style.display = 'none';
    alfamartCodeDisplay.style.display = 'none';
    vazzuniverseCodeDisplay.style.display = 'none';
    errorDisplay.style.display = 'none'; // Sembunyikan pesan kesalahan
} else if (paymentMethod === 'Alfamart/Pengadaian/KantorPos') {
    imageDisplay.style.display = 'none'; // Tidak menampilkan gambar untuk Alfamart
    alfamartCodeDisplay.style.display = 'block'; // Menampilkan kode Alfamart

    // Menghasilkan angka acak antara 100000 dan 999999
    const randomCode = Math.floor(100000 + Math.random() * 900000);
    alfamartCodeDisplay.textContent = ` ${randomCode}`;

    // Menyembunyikan elemen lain
    ovoNumberDisplay.style.display = 'none';
    danaNumberDisplay.style.display = 'none';
    shopeepayCodeDisplay.style.display = 'none';
    briCodeDisplay.style.display = 'none';
    bniCodeDisplay.style.display = 'none';
    cimbCodeDisplay.style.display = 'none';
    permataCodeDisplay.style.display = 'none';
    mandiriCodeDisplay.style.display = 'none';
    maybankCodeDisplay.style.display = 'none';
    vazzuniverseCodeDisplay.style.display = 'none';
    errorDisplay.style.display = 'none'; // Sembunyikan pesan kesalahan

} else if (paymentMethod === 'VAZZUNIVERSE') {
    imageDisplay.style.display = 'none'; // Tidak menampilkan gambar untuk VAZZUNIVERSE
    vazzuniverseCodeDisplay.style.display = 'block'; // Menampilkan kode VAZZUNIVERSE
    // Menyembunyikan elemen lain
    ovoNumberDisplay.style.display = 'none';
    danaNumberDisplay.style.display = 'none';
    shopeepayCodeDisplay.style.display = 'none';
    briCodeDisplay.style.display = 'none';
    bniCodeDisplay.style.display = 'none';
    cimbCodeDisplay.style.display = 'none';
    permataCodeDisplay.style.display = 'none';
    mandiriCodeDisplay.style.display = 'none';
    maybankCodeDisplay.style.display = 'none';
    alfamartCodeDisplay.style.display = 'none';
    errorDisplay.style.display = 'none'; // Sembunyikan pesan kesalahan
} else {
    paymentResult.textContent = 'Metode pembayaran tidak valid';
    errorDisplay.style.display = 'block'; // Menampilkan pesan kesalahan
    // Menyembunyikan semua elemen kode
    ovoNumberDisplay.style.display = 'none';
    danaNumberDisplay.style.display = 'none';
    shopeepayCodeDisplay.style.display = 'none';
    briCodeDisplay.style.display = 'none';
    bniCodeDisplay.style.display = 'none';
    cimbCodeDisplay.style.display = 'none';
    permataCodeDisplay.style.display = 'none';
    mandiriCodeDisplay.style.display = 'none';
    maybankCodeDisplay.style.display = 'none';
    alfamartCodeDisplay.style.display = 'none';
    vazzuniverseCodeDisplay.style.display = 'none';
}

        }

        // Fungsi untuk menghasilkan nomor invoice
        function generateInvoiceNumber() {
            return 'INV-' + Math.floor(Math.random() * 1000000);
        }

        // Memanggil fungsi updateDisplay ketika halaman dimuat
        document.addEventListener('DOMContentLoaded', updateDisplay);
      // Mengatur durasi countdown dalam detik (3 jam = 3 * 60 * 60 = 10800 detik)
let duration = 3 * 60 * 60; // 3 jam

// Mendapatkan elemen jam, menit, dan detik
const hoursDisplay = document.getElementById('hours');
const minutesDisplay = document.getElementById('minutes');
const secondsDisplay = document.getElementById('seconds');

// Fungsi untuk memperbarui tampilan countdown
function updateCountdown() {
    // Menghitung jam, menit, dan detik
    const hours = Math.floor(duration / 3600);
    const minutes = Math.floor((duration % 3600) / 60);
    const seconds = duration % 60;

    // Menampilkan waktu
    hoursDisplay.textContent = String(hours).padStart(2, '0');
    minutesDisplay.textContent = String(minutes).padStart(2, '0');
    secondsDisplay.textContent = String(seconds).padStart(2, '0');

    // Mengurangi durasi
    if (duration > 0) {
        duration--;
    } else {
        clearInterval(countdownInterval); // Menghentikan interval jika sudah 0
    }
}

// Memperbarui countdown setiap detik
const countdownInterval = setInterval(updateCountdown, 1000);

// Menampilkan countdown pertama kali
updateCountdown();

    </script>
</body>
</html> 

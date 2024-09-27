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
            padding: 0;
            width: 70px;
            height: 30px;
            color: #333;
            text-align: center;
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            position: relative;
        }

        .top-up-white-card p {
            margin: 0;
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 12px;
            color: white;
        }

        .genshin-card-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            gap: 20px;
        }

        .genshin-card {
            background-color: #ADD8E6;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.9);
            border-radius: 8px;
            padding: 10px;
            width: 250px;
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

        /* Gaya untuk menampilkan harga */
        .price-display {
    font-size: 20px; /* Ukuran font untuk harga */
    color: white; /* Warna teks untuk harga */
    margin-bottom: 10px; /* Jarak bawah untuk harga */
    text-align: right; /* Rata kiri */
    position: relative; /* Penataan posisi relatif */
    float: right; /* Mengapungkan ke kiri */
    margin-right: 20px; /* Jarak antara harga dan judul */
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
            padding: 5px;
            color: white; 
            position: relative; /* Add this for absolute positioning */
        }

        .inner-card h6 {
            margin: 0; 
            font-size: 16px; 
        }

        .arrow {
            width: 15px;
            height: auto; 
            vertical-align: middle; 
        }

        .arrow-up {
            transform: rotate(-180deg); 
            width: 10px;
        }

        .card-container {
            display: flex; /* Use flexbox to align cards side by side */
            gap: 20px; /* Space between the cards */
        }

        .additional-card {
            display: none;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px;
            margin-top: 20px;
            color: black;
            display: flex;
            flex-direction: column; /* Align items vertically */
            align-items: flex-start; /* Align items to the start */
            width: 180px; /* Default width for additional cards (shortened) */
            transition: box-shadow 0.3s ease; /* Smooth transition for the glow effect */
        }



        .shopeepay-card {
            width: 20px; /* Adjust width for ShopeePay */
            height: 120px; /* Adjust height for ShopeePay */
            padding: 15px; /* Adjust padding for ShopeePay */
        }

        .additional-card img {
            width: 90px; /* Adjust the size of the QRIS image */
            margin-bottom: 10px; /* Adjust margin below the image */
            margin-top: -20px; /* Add space above the image */
        }

        .underline-qris {
            width: 100%;
            height: 2px;
            background-color: black;
            margin: 10px 0; /* Add margin for spacing */
            margin-top: -30px;
        }

        .additional-card h6 {
            margin: 10px 0; /* Adjust margin for spacing */
            font-size: 12px;
            margin-top: 5px;
            font-weight: normal; /* Ensure the text is not bold */
        }

        .additional-card p {
            margin: 0; /* Reset margin */
            padding-top: -10px; /* Add space between heading and paragraph */
            font-size: 12px;
        }

        /* Glow effect class */
        .glow {
            box-shadow: 0 0 10px rgba(0, 0, 0, 1), 0 0 20px rgba(255, 255, 255, 1), 0 0 30px rgba(255, 255, 255, 1);
        }
        .color-2 img.qris-image {
            width: 70px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 20px; /* Align it to the right */
            left: 300px;
        }

        .color-2 img.ovo-image {
            width: 70px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 520px; /* Align it to the right */
            left: 350px;
        }
        .color-2 img.dana-image {
            width: 80px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 520px; /* Align it to the right */
            left: 400px;
        }
        .color-2 img.shopeepay-image {
            width: 110px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 520px; /* Align it to the right */
            left: 450px;
        }
        .red-text {
    color: red; /* Menetapkan warna teks menjadi merah */
}

        
    </style>
</head>
<body>
    <div class="top-up-card">
        
        <h2>
            <img src="two.png" alt="Icon" class="icon-left">Pilih Nominal Top Up
        </h2>

        <div class="underline"></div> 
        <div class="top-up-white-card">
            <p>Top Up</p>
        </div>

        <div class="genshin-card-container">
            <div class="genshin-card" data-price="58437">
                <h3>Genshin Impact</h3>
                <h1>Blessing of the</h1>
                <h4>Welkin Moon</h4>
                <p>RP 58,437</p>
            </div>
            <div class="genshin-card" data-price="116614">
                <h3>Genshin Impact</h3>
                <h1>Blessing of the</h1>
                <h4>Welkin Moon 2x</h4>
                <p>RP 116,614</p>
            </div>
            <div class="genshin-card" data-price="174907">
                <h3>Genshin Impact</h3>
                <h1>Blessing of the</h1>
                <h4>Welkin Moon 3x</h4>
                <p>RP 174,907</p>
            </div>
        </div>

        <div class="genshin-card-container">
            <div class="genshin-card" data-price="175745">
                <h3>Genshin Impact</h3>
                <h1>980+110 Genesis</h1>
                <h4>Crystals</h4>
                <p>RP 175,745</p>
            </div>
            <div class="genshin-card" data-price="230775">
                <h3>Genshin Impact</h3>
                <h1>Blessing of the</h1>
                <h4>Welkin Moon 4x</h4>
                <p>RP 230,775</p>
            </div>
            <div class="genshin-card" data-price="292082">
                <h3>Genshin Impact</h3>
                <h1>Blessing of the</h1>
                <h4>Welkin Moon 5x</h4>
                <p>RP 292,082</p>
            </div>
        </div>
        
        <div class="genshin-card-container second-container">
            <div class="genshin-card" data-price="384417">
                <h3>Genshin Impact</h3>
                <h1>1980+260 Genesis</h1>
                <h4>Crystals</h4>
                <p>RP 384,417</p>
            </div>
            <div class="genshin-card" data-price="597395">
                <h3>Genshin Impact</h3>
                <h1>3280+600 Genesis</h1>
                <h4>Crystals</h4>
                <p>RP 597,395</p>
            </div>
        </div>
    </div>



    <div class="payment-card">
        <div class="text-container">
            <h5><img src="three.png" alt="Icon"> Pilih Bayaran</h5>
           
            <div class="underline-payment"></div> 
        </div>

        <div class="inner-card">
        <div class="price-display" id="selected-price">RP 0</div> 
            <div class="color-1">
           
                <h6> E-Wallet</h6>
                
                <div class="card-container">
                    <div id="additionalText1" class="additional-card" onclick="toggleGlow(this)">
                        <img src="qris.png">
                        <div class="underline-qris"></div> 
                        <h6>QRIS ( All Payment )</h6>
                        <p>Dicek Otomatis</p>
                    </div>
                    <div id="additionalText2" class="additional-card" onclick="toggleGlow(this)">
                        <img src="ovo.png">
                        <div class="underline-qris"></div> 
                        <h6>OVO</h6>
                        <p>Dicek Otomatis</p>
                    </div>
                    <div id="additionalText3" class="additional-card" onclick="toggleGlow(this)">
                        <img src="dana.png">
                        <div class="underline-qris"></div> 
                        <h6>DANA</h6>
                        <p>Dicek Otomatis</p>
                    </div>
                </div>
                <div class="card-container">
                    <div id="additionalText4" class="additional-card" onclick="toggleGlow(this)">
                        <img src="shopeepay.png">
                        <div class="underline-qris"></div> 
                        <h6>shopeepay</h6>
                        <p>Dicek Otomatis</p>
                    </div>
                    
                </div>
            </div>
            <div class="color-2" onclick="toggleImages()">
                <span></span> 
                <img src="qris.png" alt="QRIS" class="qris-image"> <!-- Added QRIS Image Here -->
                <img src="ovo.png" alt="QRIS" class="ovo-image"> <!-- Added QRIS Image Here -->
                <img src="dana.png" alt="QRIS" class="dana-image"> <!-- Added QRIS Image Here -->
                <img src="shopeepay.png" alt="QRIS" class="shopeepay-image"> <!-- Added QRIS Image Here -->
                <img src="arrow.png" alt="Arrow" id="arrow" class="arrow"> 
                
            </div>


        </div>
    </div>
    <script>
    // Fungsi untuk format harga dengan titik sebagai pemisah ribuan
    function formatPrice(price) {
        return price.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    // Mendapatkan semua card
    const cards = document.querySelectorAll('.genshin-card');
    const priceDisplay = document.getElementById('selected-price'); // Mendapatkan elemen harga

    // Menambahkan event listener untuk setiap card
    cards.forEach(card => {
        card.addEventListener('click', () => {
            // Menghapus kelas aktif dari semua card
            cards.forEach(c => c.classList.remove('active'));
            // Menambahkan kelas aktif pada card yang diklik
            card.classList.add('active');
            // Mengambil harga dari atribut data-price dan menampilkannya
            const price = card.getAttribute('data-price');
            priceDisplay.textContent = `RP ${formatPrice(price)}`; // Update harga yang ditampilkan
        });
    });



    function toggleImages() {
            const text1 = document.getElementById('additionalText1');
            const text2 = document.getElementById('additionalText2');
            const text3 = document.getElementById('additionalText3');
            const text4 = document.getElementById('additionalText4');
            const arrow = document.getElementById('arrow');

            if (text1.style.display === 'none' || text1.style.display === '') {
                text1.style.display = 'flex'; 
                text2.style.display = 'flex'; 
                text3.style.display = 'flex'; 
                text4.style.display = 'flex'; 
                arrow.classList.add('arrow-up'); 
            } else {
                text1.style.display = 'none'; 
                text2.style.display = 'none'; 
                text3.style.display = 'none'; 
                text4.style.display = 'none'; 
                arrow.classList.remove('arrow-up'); 
            }
        }

        function toggleGlow(card) {
            // Remove glow class from all additional cards
            const allCards = document.querySelectorAll('.additional-card');
            allCards.forEach(c => c.classList.remove('glow'));

            // Add glow class to the clicked card
            card.classList.add('glow');
        }

        // Initialize: Hide additional cards
        window.onload = function() {
            const allCards = document.querySelectorAll('.additional-card');
            allCards.forEach(c => c.style.display = 'none'); // Hide all additional cards on load
        }

        function toggleGlow(card) {
    // Remove glow class from all additional cards
    const allCards = document.querySelectorAll('.additional-card');
    allCards.forEach(c => {
        c.classList.remove('glow');
        
        // Remove red-text class from all paragraphs
        const p = c.querySelector('p');
        if (p) {
            p.classList.remove('red-text');
        }
    });

    // Add glow class to the clicked card
    card.classList.add('glow');

    // Add red-text class to the paragraph of the clicked card
    const p = card.querySelector('p');
    if (p) {
        p.classList.add('red-text');
    }
}
    </script>
</body>
</html>

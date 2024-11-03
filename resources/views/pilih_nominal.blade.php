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

        /* CSS untuk menampilkan harga yang dipilih */
        .selected-price {
            float: right;
            font-size: 18px;
            color: greenyellow;
        }



        /*pilih bayaran */


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
            font-size: 12px; 
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



        
    </style>
</head>
<body>
    <div class="top-up-card">
        <h2>
            <img src="two.png" alt="Icon" class="icon-left">Pilih Nominal Top Up
            
        </h2>
        
        <div class="underline"></div> 
         <!-- Tempat untuk menampilkan harga yang dipilih -->
    
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

        <div class="inner-card eWallet-card">
            <div class="color-1">
            <div class="selected-price" id="selected-price-1"></div>
                <h6> E-Wallet</h6>
                <div class="card-container" id="cardContainer1">
                    <div id="additionalText1" class="additional-card" onclick="toggleGlow(this)">
                        <img src="qris.png">
                        <div class="underline-qris"></div> 
                        <h7>QRIS ( All Payment )</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                    <div id="additionalText2" class="additional-card" onclick="toggleGlow(this)">
                        <img src="ovo.png">
                        <div class="underline-qris"></div> 
                        <h7>OVO</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                    <div id="additionalText3" class="additional-card" onclick="toggleGlow(this)">
                        <img src="dana.png">
                        <div class="underline-qris"></div> 
                        <h7>DANA</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                    <div id="additionalText4" class="additional-card" onclick="toggleGlow(this)">
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
                    <div id="additionalText1" class="additional-card" onclick="toggleGlow(this)">
                        <img src="bni.png">
                        <div class="underline-qris"></div> 
                        <h7>BNI Virtual Account</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                    <div id="additionalText2" class="additional-card" onclick="toggleGlow(this)">
                        <img src="BRI.png">
                        <div class="underline-qris"></div> 
                        <h7>BRI Virtual Account</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                    <div id="additionalText3" class="additional-card" onclick="toggleGlow(this)">
                        <img src="CIMB.png">
                        <div class="underline-qris"></div> 
                        <h7>CIMB Virtual Account</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                    <div id="additionalText4" class="additional-card" onclick="toggleGlow(this)">
                        <img src="Permata.png">
                        <div class="underline-qris"></div> 
                        <h7>PERMATA Virtual Account</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                    <div id="additionalText4" class="additional-card" onclick="toggleGlow(this)">
                        <img src="mandiri.png">
                        <div class="underline-qris"></div> 
                        <h7>Mandiri Virtual Account</h7>
                        <p class="auto-check">Dicek Otomatis</p>
                    </div>
                    <div id="additionalText4" class="additional-card" onclick="toggleGlow(this)">
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
                    <div id="additionalText1" class="additional-card" onclick="toggleGlow(this)">
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
                    <div id="additionalText1" class="additional-card" onclick="toggleGlow(this)">
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

    
   
    <script>
    // Fungsi untuk format harga dengan titik sebagai pemisah ribuan
    function formatPrice(price) {
        return price.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    // Mendapatkan semua card
    const cards = document.querySelectorAll('.genshin-card');
    const selectedPrice1 = document.getElementById('selected-price-1');
    const selectedPrice2 = document.getElementById('selected-price-2');


   // Fungsi untuk memformat harga
function formatPrice(price) {
    return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(price);
}

// Menambahkan event listener untuk setiap card
cards.forEach(card => {
    card.addEventListener('click', () => {
        // Menghapus kelas aktif dari semua card
        cards.forEach(c => c.classList.remove('active'));
        // Menambahkan kelas aktif pada card yang diklik
        card.classList.add('active');
        
        // Mendapatkan harga dari atribut data-price
        const price = card.getAttribute('data-price');
        const formattedPrice = formatPrice(price);
        
        // Menampilkan harga yang dipilih pada semua elemen dengan kelas selected-price
        const selectedPrices = document.querySelectorAll('.selected-price');
        selectedPrices.forEach(priceElement => {
            priceElement.textContent = `${formattedPrice}`;
        });
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

    function toggleGlow(card) {
        const allCards = document.querySelectorAll('.additional-card');

        // Reset all cards
        allCards.forEach(c => {
            c.classList.remove('glow'); // Remove glow effect
            c.querySelector('.auto-check').classList.remove('highlighted'); // Reset text color
        });

        // Apply glow effect and change text color for the clicked card
        card.classList.add('glow'); // Add glow effect on the clicked card
        const autoCheckText = card.querySelector('.auto-check');
        autoCheckText.classList.add('highlighted'); // Change text color to red
    }
    </script>
</body>
</html>

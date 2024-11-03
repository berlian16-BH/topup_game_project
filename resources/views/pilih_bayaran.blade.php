<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Pembayaran</title>
    <style>
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
            width: 250px; /* Adjust width for ShopeePay */
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
            left: 350px;
        }

        .color-2 img.ovo-image {
            width: 70px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 520px; /* Align it to the right */
            left: 400px;
        }
        .color-2 img.dana-image {
            width: 80px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 520px; /* Align it to the right */
            left: 450px;
        }
        .color-2 img.shopeepay-image {
            width: 110px; /* Adjust width as needed */
            height: auto; /* Keep the aspect ratio */
            position: absolute; /* Position it absolutely */
            right: 520px; /* Align it to the right */
            left: 500px;
        }
        .red-text {
    color: red; /* Menetapkan warna teks menjadi merah */
}

    </style>
</head>
<body>

    <div class="payment-card">
        <div class="text-container">
            <h5><img src="three.png" alt="Icon"> Pilih Bayaran</h5>
            <div class="underline-payment"></div> 
        </div>

        <div class="inner-card">
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
                        <h6>Shopeepay</h6>
                         
                    </div>
                </div>
            </div>
            <div class="color-2" onclick="toggleImages1()">
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
function toggleImages1() {
            const additionalCards = document.querySelectorAll('.additional-card');
            const arrow = document.getElementById('arrow');
            additionalCards.forEach(card => {
                card.style.display = card.style.display === 'none' ? 'flex' : 'none';
            });
            arrow.classList.toggle('arrow-up'); // Menambahkan rotasi untuk panah
        }

        function toggleGlow(element) {
            element.classList.toggle('glow');
        }

        // Mengatur semua kartu tambahan untuk disembunyikan saat pertama kali dimuat
        document.querySelectorAll('.additional-card').forEach(card => {
            card.style.display = 'none'; 
        });
        
    </script>

</body>
</html>

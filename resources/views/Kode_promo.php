<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Diskon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .diskon-card {
            background-color: rgba(128, 128, 128, 0.3);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 700px;
            color: #333;
            display: flex;
            flex-direction: column;
            margin-top: 20px;
            position: relative;
        }

        .diskon-image {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            cursor: pointer;
        }

        .diskon-text {
            font-size: 18px;
            color: white;
            margin-bottom: -5px;
        }

        .diskon-divider {
            width: 100%;
            height: 2px;
            background-color: #ddd;
            margin: 10px 0;
        }

        .flex-container {
            display: flex;
            align-items: center;
        }

        .voucher-input-container {
            display: flex;
            align-items: center;
            margin-top: 20px;
            width: 95%;
        }

        .voucher-input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            flex: 1;
            margin-right: 10px;
            width: 100%;
            max-width: 600px;
        }

        .apply-button {
            padding: 10px 15px;
            font-size: 16px;
            background-color: rgba(128, 128, 128, 0.3);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 150px;
        }

        /* Modal Styles */
        .notifikasi-modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            background-color: rgba(0, 0, 0, 0.5); /* Black background with opacity */
            justify-content: center;
            align-items: center;
        }

        .modalContent {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            width: 300px;
            color: black;
        }

        .closeButton {
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px; /* Space between buttons */
        }

        .notification {
            margin-top: 10px;
            font-size: 16px;
            display: flex; /* Use flexbox for centering */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            height: 40px; /* Set a height for the notification box */
        }

        .success {
            color: green; /* Green color for success message */
        }

        .error {
            color: red; /* Red color for error message */
        }


        .instruction {
            margin-top: 20px; /* Jarak atas untuk instruksi */
            margin-right: 10px;
            font-size: 14px; /* Ukuran font untuk instruksi */
            color: white; /* Warna teks untuk instruksi */
        }
        
    </style>
</head>
<body>
<div class="diskon-card">
        <div class="flex-container">
            <img src="four.png" alt="Gambar Diskon" class="diskon-image">
            <span class="diskon-text">Kode Diskon</span>
        </div>

        <div class="diskon-divider"></div>

        <div class="voucher-input-container">
            <input type="text" class="voucher-input" placeholder="Masukan Kode Voucher" id="voucherCode">
            <button class="apply-button" id="applyButton">Pakai Voucher</button>
        </div>
        <p class="instruction">Masukan Kode Voucher jika ada.</p>

        <!-- Modal Notifikasi -->
        <div id="modal" class="notifikasi-modal">
            <div class="modalContent">
                <p id="modalMessage" class="notification"></p>
                <button class="closeButton" id="closeModalButton">Tutup</button>
            </div>
        </div>
    </div>
    <script>
        const applyButton = document.getElementById('applyButton');
        const voucherCodeInput = document.getElementById('voucherCode');
        const modal = document.getElementById('modal');
        const modalMessage = document.getElementById('modalMessage');
        const closeModalButton = document.getElementById('closeModalButton');

        const showModal = (message, isSuccess) => {
            modalMessage.textContent = message;
            modalMessage.className = `notification ${isSuccess ? 'success' : 'error'}`;
            modal.style.display = 'flex'; // Show the modal
        };

        const applyVoucher = () => {
            const voucherCode = voucherCodeInput.value.trim();
            if (voucherCode) {
                localStorage.setItem('voucherCode', voucherCode); // Save voucher code to localStorage
                showModal('Voucher berhasil digunakan!', true);
            } else {
                showModal('Voucher tidak ditemukan.', false);
            }
        };

        applyButton.addEventListener('click', applyVoucher); // Add event listener for the button

        // Close modal event
        closeModalButton.addEventListener('click', () => {
            modal.style.display = 'none'; // Hide the modal
        });
    </script>
</body>
</html>

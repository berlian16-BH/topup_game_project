<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .menuCard {
            background-color: rgba(128, 128, 128, 0.3);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 700px;
            color: #333;
            text-align: center;
            position: relative;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .menuCard h1 {
            margin: 0;
            font-size: 20px;
            color: white;
            display: flex;
            align-items: center;
        }

        .menuCard h1 img {
            width: 30px;
            height: auto;
            margin-right: 10px;
            font-weight: bold;
        }

        .menuUnderline {
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background-color: white;
            margin: 10px auto;
        }

        .menuInput {
            margin-top: 20px;
            padding: 10px;
            width: 98%;
            border-radius: 100px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .menuInstruction {
            margin-top: 10px;
            margin-right: 310px;
            font-size: 14px;
            color: white;
            text-align: right;
        }

        .menuButton {
            background-color: rgba(128, 128, 128, 0.3);
            color: white;
            border: none;
            border-radius: 100px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            width: 98%;
        }

        .menuButton:hover {
            background-color: rgba(128, 128, 128, 0.5);
        }

        /* Modal Styles */
        .modal {
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
            margin-top: 10px; /* Menambahkan jarak antara tombol Beli Sekarang dan tombol Tutup */
        }

        .successButton {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px; /* Menambahkan jarak antara tombol Beli Sekarang dan tombol Tutup */
        }
    </style>
    <script>
        function validateInput() {
            const input = document.getElementById("whatsappNumber").value;
            const modalError = document.getElementById("modalError");
            const modalSuccess = document.getElementById("modalSuccess");

            if (input === "") {
                modalError.style.display = "flex"; // Show the error modal
            } else {
                modalSuccess.style.display = "flex"; // Show the success modal
            }
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.style.display = "none"; // Hide the modal
        }

        function goToPayment() {
            // Redirect to the view_pembayaran page
            window.location.href = "view_pembayaran.html"; // Replace with your actual page path
        }
    </script>
</head>
<body>
    <div class="menuCard">
        <h1>
            <img src="five.png" alt="Icon"> Nomor WhatsApp</h1>
        <div class="menuUnderline"></div>

        <!-- Form untuk Nomor WhatsApp -->
        <input type="text" class="menuInput" placeholder="628xx" id="whatsappNumber">

        <!-- Instruksi di bawah form -->
        <p class="menuInstruction">Bukti pembelianmu akan kami kirimkan ke WhatsApp.</p>

        <!-- Tombol untuk submit -->
        <button class="menuButton" onclick="validateInput()">Beli Sekarang</button>
    </div>

    <!-- Modal Box Error -->
    <div id="modalError" class="modal">
        <div class="modalContent">
            <p>Pastikan anda sudah mengisi semua data yang diperlukan.</p>
            <button class="closeButton" onclick="closeModal('modalError')">Tutup</button>
        </div>
    </div>

    <!-- Modal Box Success -->
    <div id="modalSuccess" class="modal">
        <div class="modalContent">
            <p>Pembelian berhasil!</p>
            <button class="successButton" onclick="goToPayment()">Beli Sekarang</button>
            <button class="closeButton" onclick="closeModal('modalSuccess')">Tutup</button>
        </div>
    </div>
</body>
</html>

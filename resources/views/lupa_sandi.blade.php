<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan Nomor WhatsApp</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('background.png'); /* Gambar latar belakang */
            background-size: cover; /* Menyesuaikan ukuran gambar dengan ukuran viewport */
            background-repeat: no-repeat; /* Tidak mengulangi gambar */
            background-position: center; /* Memusatkan gambar */
        }
        .input-container {
            width: 400px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.4); /* Latar belakang putih dengan transparansi */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .input-container h2 {
            margin-bottom: 10px;
            font-size: 28px;
            text-align: start;
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }
        .forgot-password {
            font-size: 16px;
            text-align: start;
            color: white;
            margin-bottom: 15px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }
        .validation-message {
            text-align: center;
            color: #d9534f;
            font-size: 14px;
            margin-bottom: 10px;
            display: none;
        }
        hr {
            border: none;
            height: 2px;
            background-color: white;
            margin: 0 0 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group input {
            width: 94%;
            padding: 10px;
            border: 1px solid white;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
        .logo {
            display: block;
            margin: 10 auto 10px;
            width: 80px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="input-container">
        <img src="logo.png" alt="Logo" class="logo"> <!-- Tambahkan logo di sini -->
        <h2>Lupa Kata Sandi</h2>
        <div class="forgot-password">Masukkan Nomor WhatsApp yang terdaftar.</div>
        <hr>
        <form id="whatsapp-form">
            <div class="validation-message" id="validation-message">Harap masukkan nomor WhatsApp yang terdaftar.</div>
            <div class="form-group">
                <input type="tel" id="whatsapp-number" name="whatsapp-number" placeholder="Nomor WhatsApp" required>
            </div>
            <div class="form-group">
                <button type="button" onclick="submitForm()">Sumbit</button>
            </div>
        </form>
    </div>

    <script>
    function submitForm() {
        const whatsappNumber = document.getElementById("whatsapp-number").value;
        const validationMessage = document.getElementById("validation-message");

        // Validasi nomor WhatsApp
        if (!whatsappNumber) {
            validationMessage.style.display = "block"; // Tampilkan pesan validasi
            return;
        } else {
            validationMessage.style.display = "none"; // Sembunyikan pesan validasi jika input valid
        }

        // Redirect ke halaman login setelah input valid
        window.location.href = 'login'; // Ganti 'login.html' dengan URL halaman login Anda
    }
    </script>
</body>
</html>

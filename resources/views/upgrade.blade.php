<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upgrade Membership</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }
        .upgrade-container {
            width: 500px;
            padding: 20px;
            background-color: rgba(128, 128, 128, 0.5);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }
        .upgrade-container h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .separator {
            border-bottom: 2px solid white; /* Garis di bawah judul berwarna putih */
            margin: 10px 0 20px; /* Ruang di sekitar garis */
        }
        .membership-info {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
            display: flex; /* Use flexbox layout */
            align-items: center; /* Center items vertically */
        }
        .form-group label {
            flex: 1; /* Allow label to take up space */
            font-size: 16px;
            margin-right: 10px; /* Add some space between label and input */
            font-weight: bold; /* Menjadikan teks label bold */
        }
        .form-group input {
            flex: 2; /* Allow input to take up more space */
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .upgrade-button {
            width: 90%;
            padding: 10px;
            font-size: 16px;
            background-color: rgba(128, 128, 128, 0.5);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Remove underline from link */
            display: inline-block; /* Make button behave like a block element */
        }
        .upgrade-button:hover {
            background-color: rgba(128, 128, 128, 0.5);
        }
        .notification {
            color: red; /* Warna teks notifikasi */
            margin-bottom: 10px; /* Ruang di bawah notifikasi */
            display: none; /* Sembunyikan notifikasi secara default */
        }
    </style>
</head>
<body>
    <div class="upgrade-container">
        <h2>Upgrade Membership</h2>
        <div class="separator"></div>

        <div class="notification" id="notification"></div> <!-- Notifikasi validasi -->
      
        <div class="form-group">
            <input type="number" id="deposit" placeholder="  Platinum : Rp. 100.000 / Deposit Min 100.000,-" min="100000" required>
        </div>

        <a class="upgrade-button" id="whatsapp-link" href="#">Beli Membership</a>
    </div>

    <script>
        document.getElementById('whatsapp-link').onclick = function() {
            const deposit = document.getElementById("deposit").value;
            const notification = document.getElementById("notification");

            // Reset notifikasi
            notification.style.display = 'none';
            notification.textContent = '';

            // Validasi jumlah deposit
            if (deposit < 100000) {
                notification.textContent = "Jumlah deposit minimum adalah Rp. 100.000,-";
                notification.style.display = 'block'; // Tampilkan notifikasi
                return;
            }

            // Ganti dengan nomor telepon dan pesan sesuai kebutuhan
            const phoneNumber = '6281234567890'; // Nomor WhatsApp tanpa tanda '+'
            const message = `Saya ingin mengupgrade ke Platinum dengan deposit sebesar Rp. ${deposit}`;
            const whatsappLink = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

            // Buka WhatsApp
            window.open(whatsappLink, '_blank');
        };
    </script>
</body>
</html>

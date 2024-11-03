<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            height: 100vh;
            margin: 0;
        }
      
        .sidebar {
            width: 200px;
            display: flex;
            flex-direction: column;
            padding: 20px;
            position: fixed;
            top: 50px;
            left: 0;
            height: 100%;
            z-index: 1000;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
            margin-bottom: 10px;
            transition: background-color 0.2s, color 0.2s;
        }

        .main-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .card {
            background-color: rgba(128, 128, 128, 0.5);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: left;
            margin: 10px 0;
            width: 900px;
            margin-right: 400px;
            margin-left: -200px;
            margin-top: 300px;
            color: #ccc;
        }
        .card1 {
            background-color: rgba(128, 128, 128, 0.5);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: left;
            margin: 10px 0;
            width: 900px;
            margin-right: 400px;
            margin-left: -200px;
            margin-top: 10px;
            color: #000;
        }
        .card2 {
            background-color: #add8e6;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: left;
            margin: 10px 0;
            width: 900px;
            margin-right: 400px;
            margin-left: -200px;
            margin-top: 300px;
            color: #000;
        }
        .card h2, .card1 h2 {
            margin: 0 0 10px 0;
            color: white;
            padding-bottom: 5px;
            border-bottom: 2px solid white;
            width: 100%;
        }
        .whatsapp-link {
            color: #25D366;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.2s;
        }
        .whatsapp-link:hover {
            color: #128C7E;
        }
        .operational-info {
            font-size: 14px;
            color: #666;
            margin-top: 10px;
            overflow: hidden;
            white-space: nowrap;
        }
        .moving-text {
            display: inline-block;
            animation: moveText 10s linear infinite;
            color: black;
            font-size: 24px;
        }
        @keyframes moveText {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        .input-card {
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-top: 10px;
        }
        .input-card input, .input-card select {
            margin: 10px 0;
            padding: 10px;
            width: 500%;
            max-width: 850px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .input-card button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            align-self: flex-start;
        }
        .input-card button:hover {
            background-color: #45a049;
        }
        .history-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            color: #ccc;
        }
        .history-table th, .history-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
            color: #ccc;
        }
        .history-table th {
            background-color: rgba(128, 128, 128, 0.5);
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <a href="home_dasboard" onclick="redirectToAccount()">Akun</a>
        <a href="home_deposit" onclick="redirectToDeposit()">Deposit</a>
        <a href="login" onclick="redirectToLogout()">Keluar</a>
    </div>

    <div class="main-content">
        <div class="card2">
            <p>Silakan konfirmasi ke <a href="https://wa.me/youradminnumber" class="whatsapp-link" target="_blank">WhatsApp Admin (KLIK)</a> setelah melakukan transfer.</p>
        </div>

        <div class="card2 operational-info">
            <p class="moving-text">Pukul 09:00 - 22:00 WIB (Lewat Jam Operasional Akan Diproses Keesokan Hari.)</p>
        </div>

        <div class="card input-card">
            <h2>Deposit</h2>
            <form id="depositForm">
                <select name="metode" required>
                    <option value="" disabled selected>Pilih Metode</option>
                    <option value="BCA">BCA (MANUAL)</option>
                    <option value="OVO">OVO (MANUAL)</option>
                    <option value="DANA">DANA (MANUAL)</option>
                    <option value="SHOPEEPAY">SHOPEEPAY (MANUAL)</option>
                    <option value="GOPAY">GOPAY (MANUAL)</option>
                    <option value="BRI">BRI (MANUAL)</option>
                </select>
                <input type="number" name="jumlah" placeholder="Jumlah" required>
                <button type="submit">Submit</button>
            </form>
        </div>

        <div class="card1">
            <h2>Riwayat Deposit</h2>
            <table class="history-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Jumlah</th>
                        <th>Metode</th>
                        <th>No Pembayaran</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody id="historyTableBody">
                    <!-- Deposit history will be populated here -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const depositForm = document.getElementById('depositForm');
        const historyTableBody = document.getElementById('historyTableBody');
        let idCounter = 1;

        depositForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const metode = depositForm.metode.value;
            const jumlah = depositForm.jumlah.value;
            const noPembayaran = `PAY${idCounter}`;
            const status = 'Pending';
            const tanggal = new Date().toLocaleString();

            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>${idCounter}</td>
                <td>${jumlah}</td>
                <td>${metode}</td>
                <td>${noPembayaran}</td>
                <td>${status}</td>
                <td>${tanggal}</td>
            `;
            historyTableBody.appendChild(newRow);
            idCounter++;
            depositForm.reset();
        });

        function redirectToAccount() {
            window.location.href = 'home_dasboard';
        }
        function redirectToDeposit() {
            window.location.href = 'home_deposit';
        }
        function redirectToLogout() {
            window.location.href = 'login';
        }
    </script>
</body>
</html>

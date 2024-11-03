<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Win Rate Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
      background-color: #f9f9f9;
    }
    .container {
      background-color: rgba(128, 128, 128, 0.5);
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 30px;
      width: 700px; /* Mengubah lebar card menjadi 500px */
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: center; /* Mengatur agar semua elemen berada di tengah */
    }
    .form-group {
      width: 100%; /* Membuat form-group mengisi lebar penuh */
      margin: 10px 0; /* Memberikan margin antara grup form */
      text-align: left; /* Mengatur teks label ke kiri */
    }
    label {
      display: block; /* Menjadikan label sebagai block agar berada di atas input */
      margin-bottom: 5px; /* Memberikan jarak antara label dan input */
    }
    input {
      width: 100%; /* Lebar input, bisa disesuaikan */
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }
    button {
      background-color: rgba(128, 128, 128, 0.5); /* Warna abu-abu transparan */
      color: white;
      border: none;
      padding: 10px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    button:hover {
      background-color: rgba(128, 128, 128, 0.7); /* Warna abu-abu transparan lebih gelap saat hover */
    }
    .result {
      margin-top: 20px;
     
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Calculator Winrate Mobile Legends</h2>

    <div class="form-group">
      <label for="totalMatches">Total Pertandingan Anda</label>
      <input type="number" id="totalMatches" placeholder="contoh : 351" min="0" required>
    </div>
    
    <div class="form-group">
      <label for="currentWins">Jumlah Kemenangan Anda</label>
      <input type="number" id="currentWins" placeholder="contoh : 51.4%" min="0" required>
    </div>
    
    <div class="form-group">
      <label for="desiredWinRate">Win Rate yang Anda Inginkan (%)</label>
      <input type="number" id="desiredWinRate" placeholder="contoh : 70%" min="0" max="100" required>
    </div>
    
    <button onclick="calculateWins()">Hasil</button>
    <div class="result" id="result"></div>
  </div>

  <script>
    function calculateWins() {
      const totalMatches = parseFloat(document.getElementById('totalMatches').value);
      const currentWins = parseFloat(document.getElementById('currentWins').value);
      const desiredWinRate = parseFloat(document.getElementById('desiredWinRate').value);

      if (!isNaN(totalMatches) && !isNaN(currentWins) && !isNaN(desiredWinRate)) {
        let n = -1; // Mulai dari -1 untuk menghitung kemenangan tambahan
        let currentWinRate = (currentWins / totalMatches) * 100;

        // Loop untuk menemukan jumlah kemenangan tambahan yang diperlukan
        do {
          n++;
          currentWinRate = ((currentWins + n) / (totalMatches + n)) * 100;
        } while (desiredWinRate > currentWinRate);

        // Menampilkan hasil sesuai format yang diminta
        document.getElementById('result').innerText = `Anda memerlukan sekitar ${n} win tanpa lose untuk mendapatkan win rate ${desiredWinRate}%.`;
      } else {
        document.getElementById('result').innerText = "Silakan masukkan angka yang valid.";
      }
    }
  </script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transaction Table</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
  <style>
    /* Styling for the card container */
    body {
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
    }

    /* Styling for alternating row colors */
    .table tbody tr:nth-child(odd) {
      background-color: rgba(240, 240, 240, 0.1); /* Light gray for odd rows */
    }

    /* Styling for status labels with card appearance */
    .status-card {
      padding: 5px 10px;
      border-radius: 5px;
      color: #fff;
      font-weight: bold;
      display: inline-block;
    }
    .status-success {
      background-color: #28a745;
    }
    .status-batal {
      background-color: #dc3545;
    }
    .status-pending {
      background-color: #ffc107;
      color: #333;
    }

    /* Adding borders to the table and cells */
    .table {
     
      width: 100%;
      background-color: rgba(240, 240, 240, 0.1); /* Light gray with 70% opacity */
    }
    .table th, .table td {
      border: 1px solid gainsboro;
      padding: 8px;
      background-color: rgba(240, 240, 240, 0.7); /* White with 90% opacity for better readability */
      font-size: 14px; 
    }
    .thead-dark th {
      background-color: rgba(240, 240, 240, 0.7); /* Dark gray with 90% opacity */
      color: black;
    }

    /* Styling for header and description */
    .header {
      text-align: left; /* Set text alignment to left */
      margin-top: 20px;
      padding: 0 20px; /* Add padding to left and right */
    }

    /* Styling for search section */
    .search-container {
      margin-bottom: 20px;
      padding: 0 20px; /* Add padding to left and right */
      display: flex;
      align-items: center;
    }
    .search-container input {
      flex: 1;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 20px 0 0 20px; /* Rounded corners for input */
      font-size: 16px;
    }
    .search-container button {
      background-color: rgba(240, 240, 240, 0.7);
      border: none;
      color: white;
      padding: 8px 15px;
      border-radius: 0 20px 20px 0; /* Rounded corners for button */
      cursor: pointer;
    }
    .search-container button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="header">
    <p>LACAK PESANAN DENGAN NOMOR INVOICE</p>
    <div class="search-container">
      <input type="text" id="searchInvoice" placeholder="contoh VA1111158ZZ">
      <button onclick="searchTransaction()"><i class="fas fa-search"></i></button>
    </div>
    <h2>10 Transaksi Terakhir</h2>
    <p>Ini adalah 10 transaksi terakhir dari semua pengguna. Informasi yang tersedia mencakup tanggal transaksi, no transaksi, harga, dan status.</p>
  </div>

  <table class="table table-hover table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Date</th>
        <th scope="col">Invoice</th>
        <th scope="col">Item</th>
        <th scope="col">Price</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody id="transactionTableBody">
      <tr>
        <td>2024-10-28 16:10:26</td>
        <td>VA1****58ZZ</td>
        <td>MOBILE LEGENDS Weekly Diamond Pass</td>
        <td>Rp 26.519</td>
        <td><span class="status-card status-success">Success</span></td>
      </tr>
      <tr>
        <td>2024-10-28 14:42:38</td>
        <td>VA1****30ZZ</td>
        <td>MOBILELEGEND - 19 Diamond</td>
        <td>Rp 5.423</td>
        <td><span class="status-card status-success">Success</span></td>
      </tr>
      <tr>
        <td>2024-10-28 11:11:53</td>
        <td>VA1****49ZZ</td>
        <td>Telkomsel Data Flash 1 GB 30 Hari</td>
        <td>Rp 12.120</td>
        <td><span class="status-card status-success">Success</span></td>
      </tr>
      <tr>
        <td>2024-10-28 10:43:39</td>
        <td>VA1****07ZZ</td>
        <td>MOBILELEGEND - 5 Diamond</td>
        <td>Rp 1.388</td>
        <td><span class="status-card status-batal">Batal</span></td>
      </tr>
      <tr>
        <td>2024-10-28 10:35:00</td>
        <td>VA1****82ZZ</td>
        <td>MOBILELEGEND - 5 Diamond</td>
        <td>Rp 1.388</td>
        <td><span class="status-card status-batal">Batal</span></td>
      </tr>
      <tr>
        <td>2024-10-28 10:31:44</td>
        <td>VA1****72ZZ</td>
        <td>MOBILELEGEND - 5 Diamond</td>
        <td>Rp 1.388</td>
        <td><span class="status-card status-pending">Pending</span></td>
      </tr>
      <tr>
        <td>2024-10-28 10:05:13</td>
        <td>VA1****17ZZ</td>
        <td>MOBILE LEGENDS Weekly Diamond Pass 4x</td>
        <td>Rp 106.090</td>
        <td><span class="status-card status-success">Success</span></td>
      </tr>
      <tr>
        <td>2024-10-28 09:57:19</td>
        <td>VA0****97ZZ</td>
        <td>MOBILE LEGENDS Weekly Diamond Pass 4x</td>
        <td>Rp 109.998</td>
        <td><span class="status-card status-pending">Pending</span></td>
      </tr>
      <tr>
        <td>2024-10-27 23:10:50</td>
        <td>VA2****59ZZ</td>
        <td>Honor of Kings Weekly Card</td>
        <td>Rp 11.394</td>
        <td><span class="status-card status-success">Success</span></td>
      </tr>
      <tr>
        <td>2024-10-27 20:19:24</td>
        <td>VA2****25ZZ</td>
        <td>MOBILELEGEND - 240 Diamond</td>
        <td>Rp 61.067</td>
        <td><span class="status-card status-success">Success</span></td>
      </tr>
    </tbody>
  </table>

  <script>
    function searchTransaction() {
      const input = document.getElementById('searchInvoice').value.toLowerCase();
      const rows = document.querySelectorAll('#transactionTableBody tr');
      rows.forEach(row => {
        const invoice = row.cells[1].textContent.toLowerCase();
        row.style.display = invoice.includes(input) ? '' : 'none';
      });
    }
  </script>
</body>
</html>

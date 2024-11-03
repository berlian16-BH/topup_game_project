<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
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

        .dashboard-wrapper {
            margin-left: 220px;
            padding: 20px;
            width: calc(100% - 220px);
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: -140px;
        }
        .cards-wrapper {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            flex-wrap: wrap;
        }
        .dashboard-container {
            padding: 20px;
            background-color: rgba(128, 128, 128, 0.5);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            text-align: left;
            flex: 1;
            min-width: 250px;
            max-width: 500px;
        }
        .user-info {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .user-info img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .user-info div {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .edit-profile-card {
            background-color: black;
            border: 1px solid black;
            border-radius: 10px;
            padding: 10px;
            margin-top: 15px;
            text-align: center;
        }
        .edit-profile {
            color: white;
            cursor: pointer;
            text-decoration: none;
           
        }
        .phone-container {
            margin-top: 10px;
        }
        .phone-divider {
            border-top: 1px solid #ccc;
            margin: 5px 0;
        }
        .info-card {
            background-color: rgb(173, 216, 230);
            color: white;
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 10px;
            text-align: center;
            min-width: 100px;
            margin-left: 15px;
        }
        .balance {
            text-align: center;
        }
        .balance-card h2 {
            font-size: 16px;
            text-align: center;
        }
        .balance-card p {
            font-size: 20px;
            color: orange;
            text-align: center;
        }
        .upgrade-card {
            padding: 10px;
            background-color: orange;
            border: 1px solid #b3d7ff;
            border-radius: 8px;
            max-width: 300px;
            flex: 1;
            display: flex;
            flex-direction: column;
            height: 150px;
            margin-left: auto;
        }
        .upgrade-card a {
            color: white;
            text-decoration: underline;
            cursor: pointer;
        }
        .history-card {
            background-color: rgba(128, 128, 128, 0.5);
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 15px;
            margin-top: 15px;
            text-align: left;
            width: 800px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid white;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: black;
        }
        .pagination {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .search-container {
    display: flex;
    align-items: center; /* Ubah ke center untuk meratakan elemen di tengah */
    margin-top: 10px;
}

#search-input {
    padding: 5px;
    border-radius: 4px;
    border: 1px solid #ccc;
    margin-left: auto; /* Menggeser input ke kanan */
    margin-right: 100px /* Menghapus margin kanan */
}

        .entries-select {
            margin-right: 450px;
        }
        .additional-card {
        padding: 50px; /* Mengurangi padding untuk membuatnya lebih kecil */
        background-color: rgba(128, 128, 128, 0.5);
        border: 1px solid rgba(128, 128, 128, 0.5);
        border-radius: 8px;
        margin-top: 15px;
        width: 480px; /* Mengurangi lebar untuk membuatnya lebih kecil */
        display: flex;
        justify-content: space-between;
        align-items: start;
    }
    .additional-card p {
        color: orange; /* Mengubah warna teks menjadi oranye */
        font-size: 35px; /* Mengatur ukuran font agar lebih kecil */
        margin-right: 10px;
        margin-top: 50px; /* Menghapus margin untuk mengurangi ukuran total */
        
    }
    .additional-card h2 {
        color: white; /* Mengubah warna teks menjadi oranye */
        font-size: 20px; /* Mengatur ukuran font agar lebih kecil */
        margin: -30px; /* Menghapus margin untuk mengurangi ukuran total */
      
    }
       
    </style>
</head>
<body>
<div class="sidebar">
    <a href="home_dasboard" class="link-account" onclick="redirectToAccount()">Akun</a>
    <a href="home_deposit" class="link-deposit" onclick="redirectToDeposit()">Deposit</a>
    <a href="login" class="link-logout" onclick="redirectToLogout()">Keluar</a>
</div>
<div class="dashboard-wrapper">
    <div class="cards-wrapper">
    <div class="dashboard-container">
        <div class="user-info">
            <img src="profile-user.png" alt="User Image">
            <div>
                <p><span id="display-username"></span></p>
                <p>Member</p>
            </div>
            <div class="info-card">
                <span class="home_editprofil" onclick="redirectToEditProfile()">Edit Profil</span>
            </div>
        </div>
        <div class="phone-container">
            <div class="phone-divider"></div>
            <p><span id="display-phone"></span></p>
        </div>
    </div>

        <div class="upgrade-card">
            <p>Dapatkan harga lebih murah dengan Upgrade Membership!</p>
            <div class="info-card">
                <span class="home_upgrade" onclick="redirectToUpgrade()">Upgrade Sekarang</span>
            </div>
        </div>
    </div>

    <div class="additional-card">
        <div>
            <h2>Saldo IDR</h2>
            <p>Rp 0</p>
        </div>
        <div class="info-card">
            <span class="home_deposit" onclick="redirectToDeposit()">Deposit</span>
        </div>
    </div>

    <div class="history-card">
        <h3>History</h3>
        <div class="search-container">
            <select id="entries-select" class="entries-select" onchange="changeEntriesPerPage()">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
            </select>
            <input type="text" id="search-input" placeholder="Search..." style="margin-left: 10px;">
        </div>
        <table>
            <thead>
                <tr>
                    <th>Invoice</th>
                    <th>Layanan</th>
                    <th>Target</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody id="history-table-body">
                <!-- History entries will be populated here -->
            </tbody>
        </table>
        <div class="pagination">
            <button onclick="previousPage()" id="prev-button">Previous</button>
            <span id="page-info">Page 1 of 1</span>
            <button onclick="nextPage()" id="next-button">Next</button>
        </div>
    </div>
</div>

<script>
    
        function displayUserInfo() {
            const username = localStorage.getItem("username");
            const phone = localStorage.getItem("phone");

            // Tampilkan data pada elemen dashboard
            document.getElementById("display-username").innerText = username ? username : "Nama Pengguna";
            document.getElementById("display-phone").innerText = phone ? phone : "No WA";
        }

        // Fungsi untuk berpindah ke halaman edit profil
        function redirectToEditProfile() {
            window.location.href = 'edit-profile'; // Sesuaikan URL halaman edit profil
        }
    

        // Memanggil fungsi displayUserInfo saat halaman dimuat
        window.onload = displayUserInfo;
    
    function redirectToAccount() {
        window.location.href = 'home_dasboard';
    }

    function redirectToDeposit() {
        window.location.href = 'home_deposit';
    }

    function redirectToDeposit() {
        window.location.href = 'home_deposit';
    }

    function redirectToLogout() {
        window.location.href = 'login';
    }

    function redirectToEditProfile() {
        window.location.href = 'home_editprofil';
    }
    
  
    function redirectToUpgrade() {
        window.location.href = 'home_upgrade';
    }
   
</script>
</body>
</html>

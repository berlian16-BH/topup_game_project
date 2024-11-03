<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View/Edit Data</title>
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
        .view-edit-container {
            width: 500px;
            padding: 20px;
            background-color:rgba(128, 128, 128, 0.5);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .view-edit-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        .notification {
            margin-bottom: 15px;
            padding: 10px;
            background-color: #e7f3fe;
            color: #31708f;
            border: 1px solid #b3e5fc;
            border-radius: 5px;
            display: none; /* Hidden by default */
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
    color: white;
}
        .form-group input {
            flex: 2; /* Allow input to take up more space */
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .save-button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: rgba(128, 128, 128, 0.5);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
          
        }
        .save-button:hover {
            background-color:rgba(128, 128, 128, 0.5);
        }
    </style>
</head>
<body>
    <div class="view-edit-container">

        <div class="notification" id="notification"></div> <!-- Notification area -->

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" id="name" placeholder="Nama" value="">
        </div>
        
        <div class="form-group">
            <label for="username">Nama Pengguna</label>
            <input type="text" id="username" placeholder="Nama Pengguna" value="">
        </div>
        
        <div class="form-group">
            <label for="phone">No WhatsApp</label>
            <input type="tel" id="phone" placeholder="No WA" value="">
        </div>

        <div class="form-group">
            <label for="password">Kata Sandi</label>
            <input type="text" id="password" placeholder="Kata Sandi" value=""> <!-- Ganti tipe menjadi text -->
        </div>
        
        <button class="save-button" onclick="saveData()">Simpan</button>
    </div>

    <script>
        // Load data from localStorage
        document.getElementById("name").value = localStorage.getItem("name") || "";
        document.getElementById("username").value = localStorage.getItem("username") || "";
        document.getElementById("phone").value = localStorage.getItem("phone") || "";
        document.getElementById("password").value = ""; // Mengosongkan input kata sandi

        function saveData() {
            // Get updated values from inputs
            const name = document.getElementById("name").value;
            const username = document.getElementById("username").value;
            const phone = document.getElementById("phone").value;
            const password = document.getElementById("password").value;

            // Validate inputs
            if (!name || !username || !phone || !password) {
                showNotification("Semua kolom harus diisi!", "error");
                return;
            }

            // Save updated data to localStorage
            localStorage.setItem("name", name);
            localStorage.setItem("username", username);
            localStorage.setItem("phone", phone);
            localStorage.setItem("password", password); // Save the password

            showNotification("Berhasil mengedit profile!", "success");
        }

        function showNotification(message, type) {
            const notification = document.getElementById("notification");
            notification.textContent = message;
            notification.style.display = "block"; // Show the notification

            // Optional: Change notification style based on type
            notification.style.backgroundColor = type === "success" ? "#e7f3fe" : "#f8d7da";
            notification.style.color = type === "success" ? "#31708f" : "#721c24";
            notification.style.border = type === "success" ? "1px solid #b3e5fc" : "1px solid #f5c6cb";

            // Automatically hide the notification after 3 seconds
            setTimeout(() => {
                notification.style.display = "none";
            }, 3000);
        }
    </script>
</body>
</html>

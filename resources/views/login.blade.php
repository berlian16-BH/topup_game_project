<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('background.png');
            background-size: cover;
            background-position: center;
        }
        .login-container {
            width: 400px;
            padding: 20px;
            background-color: rgba(128, 128, 128, 0.5);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            font-size: 30px;
            color: white;
            text-align: start;
            font-weight: bold;
        }
        .login-container img {
            display: block;
            margin: 0 auto 30px auto; /* Center and add space below */
            max-width: 150px; /* Set a max width for the logo */
            
        }
        .login-container p {
            font-size: 15px;
            text-align: start;
            margin-bottom: 20px;
            color: white;
            line-height: 1.6;
        }
        .form-group {
            margin-bottom: 15px;
            position: relative;
        }
        .form-group input[type="text"], .form-group input[type="password"] {
            width: 95%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
        .checkbox-container {
            display: flex;
            align-items: center;
            font-size: 14px;
            justify-content: space-between;
        }
        .checkbox-group {
            display: flex;
            align-items: center;
            color: white;
        }
        .checkbox-container input {
            margin-right: 8px;
        }
        .forgot-password {
            font-size: 10px;
            color: white;
            text-decoration: none;
            margin-left: 10px;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
        .password-icon {
            position: absolute;
            right: 10px;
            top: 5px;
            cursor: pointer;
            width: 24px;
            height: 24px;
        }
        .separator {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 20px 0;
            font-size: 14px;
            color: white;
        }
        .separator::before, .separator::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #ccc;
        }
        .separator:not(:empty)::before {
            margin-right: 10px;
        }
        .separator:not(:empty)::after {
            margin-left: 10px;
        }
        .signup-button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 10px;
        }
        .signup-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Logo di atas judul -->
        <img src="logo.png" alt="Logo" />
        <h2>Masuk</h2>
        <p>Masuk menggunakan Akun terdaftar Kamu.</p>
        
        <div class="form-group">
            <input type="text" id="username" name="username" placeholder="Nama Pengguna" required>
        </div>
        <div class="form-group">
            <input type="password" id="password" name="password" placeholder="Kata Sandi" required>
            <img src="mata_tertutup.png" class="password-icon" id="password-icon" onclick="togglePassword()">
        </div>
        <div class="form-group checkbox-container">
            <div class="checkbox-group">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">Saya setuju mengikuti syarat dan ketentuan!</label>
            </div>
            <a href="lupa_sandi" class="forgot-password">Lupa Kata Sandi?</a>
        </div>
        <div class="form-group">
            <button type="submit" onclick="window.location.href='home1'">masuk</button>
        </div>
      
        <!-- Separator with text -->
        <div class="separator">Belum punya akun?</div>
        
        <!-- Signup button -->
        <button class="signup-button" onclick="window.location.href='register'">Daftar Sekarang</button>
    </div>

    <script>
    function togglePassword() {
        const passwordField = document.getElementById("password");
        const passwordIcon = document.getElementById("password-icon");
        if (passwordField.type === "password") {
            passwordField.type = "text";
            passwordIcon.src = "mata_terbuka.png"; // Shows the open eye icon
        } else {
            passwordField.type = "password";
            passwordIcon.src = "mata_tertutup.png"; // Shows the closed eye icon
        }
    }
    function validateLogin(event) {
            event.preventDefault(); // Prevent form submission

            const username = document.getElementById("login-username").value;
            const password = document.getElementById("login-password").value;
            const errorMessageDiv = document.getElementById("error-message");

            // Retrieve stored values from localStorage
            const storedUsername = localStorage.getItem("username");
            const storedPassword = localStorage.getItem("password");

            // Check if credentials match
            if (username === storedUsername && password === storedPassword) {
                // Redirect to a dashboard or welcome page after successful login
                window.location.href = 'dashboard.html'; // Change this to your desired page
            } else {
                errorMessageDiv.innerHTML = "Nama pengguna atau kata sandi salah.";
            }
        }
    </script>
</body>
</html>

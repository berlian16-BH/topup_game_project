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
            min-height: 100vh; /* Flexibility for different screen sizes */
            margin: 0;
            background-image: url('background.png');
            background-size: cover;
            background-position: center;
        }

        .login-container {
    width: 90%; /* Responsive width */
    max-width: 550px; /* Increased fixed max width */
    padding: 20px; /* Padding for content */
    background-color: rgba(128, 128, 128, 0.7); /* Slightly darker */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Darker shadow */
    border-radius: 10px; /* Rounded corners */
    overflow: hidden; /* Remove overflow */
    margin: 20px; /* Margin to ensure spacing */
}


        .login-container h2 {
            margin-bottom: 30px;
            font-size: 36px;
            color: white;
            text-align: start;
            font-weight: bold;
        }

        .login-container img {
            display: block;
            margin: 0 auto 30px auto;
            max-width: 200px; /* Logo size */
        }

        .login-container p {
            font-size: 16px;
            text-align: start;
            margin-bottom: 25px;
            color: white;
            line-height: 1.6;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group input {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 12px; /* Rounded corners */
            font-size: 18px;
            width: 97%; /* Full width for better responsiveness */
        }

        .name-group input {
            width: 48%;
            margin-right: 4%;
            padding: 12px;
            font-size: 18px;
        }

        .name-group input:last-child {
            margin-right: 0;
        }

        .form-group button {
            width: 100%;
            padding: 12px;
            font-size: 18px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 12px; /* Rounded corners */
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            font-size: 16px;
            justify-content: flex-start; /* Align to the start */
            white-space: nowrap; /* Prevent wrapping */
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            color: white;
        }

        .checkbox-container input {
            margin-right: 5px; /* Margin for checkbox */
        }

        .forgot-password {
            font-size: 12px;
            color: white;
            text-decoration: none;
            margin-left: 10px;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .password-icon {
            position: absolute;
            right: 15px;
            top: 10px;
            cursor: pointer;
            width: 28px; /* Icon size */
            height: 28px; /* Icon size */
        }

        .separator {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 30px 0; /* Separator margin */
            font-size: 16px;
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
            padding: 12px;
            font-size: 18px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 12px; /* Rounded corners */
            cursor: pointer;
            margin-top: 10px;
        }

        .signup-button:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="logo.png" alt="Logo" />
        <h2>Daftar</h2>
        <p>Mohon masukan data pendaftaran dengan valid.</p>
        <div class="error-message" id="error-message"></div> <!-- Tempat untuk pesan kesalahan -->
        <form id="registration-form">
            <div class="form-group name-group" style="display: flex;">
                <input type="text" id="name" name="name" placeholder="Nama" required>
                <input type="text" id="username" name="username" placeholder="Nama Pengguna" required>
            </div>

            <div class="form-group">
                <input type="tel" id="phone" name="phone" placeholder="No WA" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Kata Sandi" required>
                <img src="mata_tertutup.png" class="password-icon" id="password-icon" onclick="togglePassword()" alt="Toggle Password Visibility">
            </div>
            <div class="form-group checkbox-container">
                <div class="checkbox-group">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">Saya setuju dengan Syarat & Ketentuan.</label>
                </div>
            </div>
           
            <button type="button" class="signup-button" onclick="validateForm()">Daftar Sekarang</button>
          
            <div class="separator">Sudah punya akun?</div>
            
            <div class="form-group">
                <button type="button" onclick="window.location.href='login'">Masuk Sekarang</button>
            </div>
        </form>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById("password");
            const passwordIcon = document.getElementById("password-icon");
            if (passwordField.type === "password") {
                passwordField.type = "text"; // Show the password
                passwordIcon.src = "mata_terbuka.png"; // Change to open eye icon
            } else {
                passwordField.type = "password"; // Hide the password
                passwordIcon.src = "mata_tertutup.png"; // Change back to closed eye icon
            }
        }

        function validateForm() {
            const name = document.getElementById("name").value;
            const username = document.getElementById("username").value;
            const phone = document.getElementById("phone").value;
            const password = document.getElementById("password").value;
            const terms = document.getElementById("terms").checked;
            const errorMessageDiv = document.getElementById("error-message");

            let errorMessage = "";

            if (!name) errorMessage += "Harap isi kolom nama!<br>";
            if (!username) errorMessage += "Harap isi kolom username!<br>";
            if (!phone) errorMessage += "No WA harus di isi!<br>";
            if (!password) errorMessage += "Password harus di isi!<br>";
            if (!terms) errorMessage += "Anda harus setuju dengan syarat & ketentuan.<br>";

            if (errorMessage) {
                errorMessageDiv.innerHTML = errorMessage;
                return false;
            } else {
                errorMessageDiv.innerHTML = "";
            }

            // Menyimpan data ke localStorage
            localStorage.setItem("name", name);
            localStorage.setItem("username", username);
            localStorage.setItem("phone", phone);
            localStorage.setItem("password", password); // Menyimpan kata sandi
            // Redirect ke halaman dashboard
            window.location.href = 'login';
        }
    </script>
</body>
</html>

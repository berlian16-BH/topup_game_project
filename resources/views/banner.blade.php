<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto-Sliding Banner Carousel</title>
    <!-- Link ke file CSS Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        .container {
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: flex-start; /* Align to the top */
            height: 70vh; /* Full viewport height */
            padding-top: 40px; /* Space from the top */
            background-size: cover; /* Menutupi seluruh area */
            background-position: center; /* Posisi gambar di tengah */
            background-repeat: no-repeat; /* Tidak mengulang gambar */
        }
        .carousel {
            width: 100%; /* Set the width of the carousel to 100% of the container */
            max-width: 1200px; /* Adjust the maximum width as needed */
            border-radius: 15px; /* Set rounded corners for the carousel */
            overflow: hidden; /* Hide overflowed content */
            border: 5px solid #fff; /* White border around the carousel */
        }
        .carousel-item {
            position: relative; /* Set position relative for absolute positioning of card */
            overflow: hidden; /* Hide overflowed content */
            border-radius: 15px; /* Set rounded corners for each carousel item */
            border: 2px solid #fff; /* White border around each carousel item */
        }
        .carousel-item img {
            width: 100%; /* Make the image fit the carousel width */
            height: 400px; /* Adjust the height of the image */
            object-fit: cover; /* Ensure image covers the carousel area */
            border-radius: 15px; /* Set rounded corners for the image */
        }
        .carousel-card {
            position: absolute; /* Position card at the bottom of the carousel item */
            bottom: 10px;
            left: 0;
            right: 0;
            padding: 15px;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            color: white;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <!-- Tambahkan lebih banyak tombol indikator jika ada lebih banyak slide -->
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('banner1.png') }}" class="d-block w-100" alt="Banner 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('banner2.png') }}" class="d-block w-100" alt="Banner 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('banner3.png') }}" class="d-block w-100" alt="Banner 3">
                </div>
                <!-- Tambahkan lebih banyak item carousel jika ada lebih banyak slide -->
            </div>
        </div>
      
    </div>
   
    <!-- Link ke file JavaScript Bootstrap -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    
</body>
</html>

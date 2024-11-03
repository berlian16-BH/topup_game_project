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
            justify-content: center;
            align-items: flex-start;
            height: 70vh;
            padding-top: 40px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .carousel {
            width: 100%;
            max-width: 1200px;
            border-radius: 15px;
            overflow: hidden;
            border: 5px solid #fff;
        }
        .carousel-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            border: 2px solid #fff;
        }
        .carousel-item img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 15px;
        }
        .carousel-card {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            padding: 15px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
            </div>
           
        </div>
    </div>

    <!-- Link ke file JavaScript Bootstrap -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Bootstrap Navbar</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Optional: Add your custom CSS here -->
    <style>
    /* Custom styles */
    body {
        background-color: white; /* Latar belakang putih */
        color: black; /* Warna teks hitam untuk kontras yang lebih baik */
        margin: 0;
        font-size: 16px;
    }

    .custom-card {
    position: relative;
    width: 210px;
    background-color: rgba(128, 128, 128, 0.5);
    border: 1px solid rgba(128, 128, 128, 0.8);
    border-radius: 15px;
    overflow: hidden;
    transition: all 0.3s ease;

    /* Jarak khusus untuk setiap sisi */
    margin-top: 0px;     /* Jarak atas */
    margin-right: 700px;   /* Jarak kanan */
    margin-bottom: 0px;  /* Jarak bawah */
    margin-left: 400px;    /* Jarak kiri */
    left: -850px;
}



    .custom-card-img-top {
        height: 180px; /* Tinggi gambar */
        width: 100%; /* Pastikan gambar menutupi lebar card */
        object-fit: cover; /* Memastikan gambar menutupi area tanpa distorsi */
        object-position: top; /* Tampilkan bagian atas gambar */
        border-bottom: 1px solid rgba(128, 128, 128, 0.8); /* Border bawah gambar */
        cursor: pointer; /* Menambahkan kursor pointer untuk menunjukkan gambar dapat diklik */
        transition: all 0.3s ease; /* Transisi untuk efek cahaya dan transformasi */
    }

    .custom-card:hover {
    box-shadow: 0 0 15px 5px rgba(255, 255, 255, 0.6); /* Cahaya saat hover */
}
.custom-card.active {
    box-shadow: 0 0 20px 10px rgba(255, 255, 255, 0.8); /* Efek cahaya lebih kuat saat klik */
    transform: scale(1.05); /* Membesar sedikit */
}
    .custom-card-img-top.active {
        box-shadow: 0 0 20px 10px rgba(255, 255, 255, 0.8); /* Efek cahaya putih saat klik */
        transform: scale(1.1); /* Membesar gambar sedikit */
    }

    .custom-card-body {
        text-align: center; /* Pusatkan teks */
        color: black; /* Warna teks hitam untuk kontras yang lebih baik */
        padding: 30px; /* Padding dalam card */
    }

    .custom-card-title {
        font-weight: bold; /* Teks tebal */
        margin: 0; /* Hapus margin default */
    }

    .custom-card-subtitle {
        font-weight: normal; /* Berat font default */
        margin: 0; /* Hapus margin default */
    }

    .row {
        display: flex; /* Menggunakan Flexbox */
        justify-content: flex-start; /* Mengatur posisi card ke kiri */
        gap: 0px; /* Menambahkan jarak antar card */
    }
    .custom-card-title {
    font-weight: bold; /* Teks tebal */
    margin: 0; /* Hapus margin default */
    font-size: 10px; /* Tambahkan ukuran font untuk judul */
}

.custom-card-subtitle {
    font-weight: normal; /* Berat font default */
    margin: 0; /* Hapus margin default */
    font-size: 13px; /* Tambahkan ukuran font untuk subtitle */
}


   
    </style>
</head>
<body>

    <!-- Card Container -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2 mb-3">
            <a href="Genshin_Impact">
              <div class="custom-card card-1">
                    <img src="gambar1.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Genshin Impact</h5>
                        <h6 class="custom-card-subtitle">Mihoyo</h6>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman3.html">
              <div class="custom-card card-2">
                    <img src="gambar2.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Valorant</h5>
                        <h6 class="custom-card-subtitle">Riot Games</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman3.html">
              <div class="custom-card card-3">
                    <img src="gambar3.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Honkai: Star Rall</h5>
                        <h6 class="custom-card-subtitle">Mihoyo</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman4.html">
              <div class="custom-card card-4">
                    <img src="gambar4.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">PUBG Mobile</h5>
                        <h6 class="custom-card-subtitle">Tencent</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-5">
                    <img src="gambar5.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Sausage Man</h5>
                        <h6 class="custom-card-subtitle">X.D.Network</h6>
                    </div>
                </div>
             </a>
            </div>

            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-6">
                    <img src="gambar6.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Ragnarok M: Eternal Love</h5>
                        <h6 class="custom-card-subtitle">Gravity Interactive</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-7">
                    <img src="gambar7.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">League of Legends</h5>
                        <h6 class="custom-card-subtitle">Riot Games</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-8">
                    <img src="gambar8.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Super Sus</h5>
                        <h6 class="custom-card-subtitle">PIProductions</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-9">
                    <img src="gambar9.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Arena of Valor </h5>
                        <h6 class="custom-card-subtitle">Tencent Garena</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-10">
                    <img src="gambar10.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Dragon Raja</h5>
                        <h6 class="custom-card-subtitle">ZLOONG</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-11">
                    <img src="gambar11.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Undawn</h5>
                        <h6 class="custom-card-subtitle">Garena</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-12">
                    <img src="gambar12.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Call of Duty Mobile</h5>
                        <h6 class="custom-card-subtitle">Garena</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-13">
                    <img src="gambar13.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Lords Mobile</h5>
                        <h6 class="custom-card-subtitle">IGG.COM</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-14">
                    <img src="gambar14.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Lifeater Credits</h5>
                        <h6 class="custom-card-subtitle">NetEase Games</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-15">
                    <img src="gambar15.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Marvel SuperWar</h5>
                        <h6 class="custom-card-subtitle">NetEase Games</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-16">
                    <img src="gambar16.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Tom and Jerry :Chase</h5>
                        <h6 class="custom-card-subtitle">NetEase Games</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-17">
                    <img src="gambar17.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">FIFA MOBILE</h5>
                        <h6 class="custom-card-subtitle">EA Sport</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-18">
                    <img src="gambar18.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Metal Slug Awakening</h5>
                        <h6 class="custom-card-subtitle">Vnggames</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-19">
                    <img src="gambar19.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Eggy Party</h5>
                        <h6 class="custom-card-subtitle">NetEase Games</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-20">
                    <img src="gambar20.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">One Punchman :The Strongest</h5>
                        <h6 class="custom-card-subtitle">FingerFun</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-21">
                    <img src="gambar21.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">BLOODSTRIKE</h5>
                        <h6 class="custom-card-subtitle">NetEase</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-22">
                    <img src="gambar22.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Zepeto</h5>
                        <h6 class="custom-card-subtitle">Zepeto</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-23">
                    <img src="gambar23.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Love and Deepspace</h5>
                        <h6 class="custom-card-subtitle">InfoldPte.Lrd.</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-24">
                    <img src="gambar24.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Stumble Guys</h5>
                        <h6 class="custom-card-subtitle">Kitka Games</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-25">
                    <img src="gambar25.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Ace Racer</h5>
                        <h6 class="custom-card-subtitle">NetEase</h6>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-2 mb-3">
             <a href="halaman5.html">
              <div class="custom-card card-26">
                    <img src="gambar26.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(this)">
                    <div class="custom-card-body">
                        <h5 class="custom-card-title">Rise of Kingdom</h5>
                        <h6 class="custom-card-subtitle">Lilth Games</h6>
                    </div>
                </div>
             </a>
            </div>
        </div>
    </div>

    <!-- Optional: Add your custom JavaScript here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
   function showLightEffect(image) {
    const card = image.closest('.custom-card'); // Mendapatkan card yang bersangkutan
    card.classList.add('active'); // Tambahkan efek cahaya ke card

    setTimeout(() => {
        card.classList.remove('active'); // Menghapus efek setelah 500ms
    }, 500); // 500 ms delay sebelum menghapus efek
}
    </script>
   
</body>
</html>

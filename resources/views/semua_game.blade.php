<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Bootstrap Navbar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles */
        body {
            background-color: white;
            color: black;
            margin: 0;
            font-size: 16px;
        }

        .custom-card {
            position: relative;
            width: 210px;
            height: 250px;
            background-color: rgba(128, 128, 128, 0.5);
            border: 1px solid rgba(128, 128, 128, 0.8);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;s
        }

        .blue-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 128, 0.5);
            border-radius: 15px;
            z-index: 1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .custom-card-img-top {
            height: 180px;
            width: 100%;
            object-fit: cover;
            object-position: top;
            border-bottom: 1px solid rgba(128, 128, 128, 0.8);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .custom-card:hover {
            box-shadow: 0 0 15px 5px rgba(255, 255, 255, 0.6);
        }

        .custom-card.active {
            box-shadow: 0 0 20px 10px rgba(255, 255, 255, 0.8);
            transform: scale(1.05);
        }

        .custom-card-body {
            text-align: center;
            color: black;
            padding: 10px;
        }

        .custom-card-title {
            font-size: 12px;
            margin: 0;
        }

        .custom-card-subtitle {
            font-weight: normal;
            margin: 0;
            font-size: 13px;
        }

        .card-container {
            margin-bottom: 10px;
        }

        .row {
            display: flex;
            justify-content: flex-start;
            flex-wrap: wrap;
            gap: 40px; /* Mengatur jarak antar kartu */
            margin: 0; /* Menghapus margin yang menyebabkan jarak berlebih */
            margin-top: 40px;
        }

        .heading-title {
            text-align: left; /* Aligned to the left */
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: navy;
        }

        /* Styles for the left side titles */
        .sidebar {
            flex: 1;
            margin-left: 30px; /* Jarak antara sidebar dan kartu */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .sidebar h3, .sidebar h4 {
            cursor: pointer; /* Add pointer cursor to indicate clickable */
            transition: text-shadow 0.3s ease; /* Add transition for glow effect */
        }

        .sidebar h3 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            color: white;
        }

        .sidebar h4 {
            font-size: 22px; /* Size for "Temukan Game" */
            font-weight: bold;
            margin-bottom: 20px; /* Space below the title */
            color: white; /* Color for "Temukan Game" */
        }

        .heading-container {
            display: flex;
            align-items: center; /* Align items vertically centered */
            gap: 20px; /* Space between headings */
            margin-left: 800px;
        }

        .glow {
            text-shadow: 0 0 10px rgba(255, 255, 0, 1), 0 0 20px rgba(255, 255, 0, 1);
        }

        /* Active heading style */
        .active-heading {
        color: white; /* Warna teks putih */
        font-weight: bold; /* Membuat teks tebal */
        text-shadow: 
        0 0 5px rgba(128, 128, 128, 0.1),  /* Cahaya putih lembut */
        0 0 10px rgba(255, 255, 255, 0.6), /* Cahaya putih lebih terang */
        0 0 15px rgba(255, 255, 255, 0.4); /* Cahaya putih yang menyebar */
    }

    </style>
</head>
<body>

    <div class="container mt-5 d-flex">
        <div class="sidebar">
            <h4>Temukan Game</h4> <!-- Added "Temukan Game" here -->
            <div class="heading-container">
                <h3 id="bestSellerHeading" onclick="showCategory('bestseller', this)">Best Seller</h3>
                <h3 id="otherGameHeading" onclick="showCategory('other', this)">Game Lainnya</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" id="gameCards">
            <!-- Card 1 (Best Seller) -->
            <div class="col-md-2 mb-3 card-container bestseller">
                <a href="mobile_legends" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar27.png" class="custom-card-img-top" alt="Honkai: Star Rail" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Mobile Legends Bang Bang</h5>
                        <h6 class="custom-card-subtitle">Moonton</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container bestseller">
                <a href="free_fires" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar28.png" class="custom-card-img-top" alt="Honkai: Star Rail" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Free Fire</h5>
                        <h6 class="custom-card-subtitle">Garena</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container bestseller">
                <a href="HonorOFKings" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar29.png" class="custom-card-img-top" alt="Honkai: Star Rail" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Honor OF Kings</h5>
                        <h6 class="custom-card-subtitle">Timi</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container bestseller">
                <a href="Topup_JokiGame" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar30.png" class="custom-card-img-top" alt="Honkai: Star Rail" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Topup & Joki Game</h5>
                        <h6 class="custom-card-subtitle">Android Via Login</h6>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 2 (Game Lainnya) -->
            <div class="col-md-2 mb-3 card-container other" style="display: none;">
                <a href="Genshin_Impact" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar1.png" class="custom-card-img-top" alt="Genshin Impact" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Genshin Impact</h5>
                        <h6 class="custom-card-subtitle">Mihoyo</h6>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 3 (Game Lainnya) -->
            <div class="col-md-2 mb-3 card-container other" style="display: none;">
                <a href="Valorant" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar2.png" class="custom-card-img-top" alt="Valorant" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Valorant</h5>
                        <h6 class="custom-card-subtitle">Riot Games</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container other" style="display: none;">
                <a href="Honkai" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar3.png" class="custom-card-img-top" alt="unipin" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Honkai: Star Rall</h5>
                        <h6 class="custom-card-subtitle">Mihoyo</h6>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Kartu 4 -->
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="Pubg" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar4.png" class="custom-card-img-top" alt="Google Play Indonesia" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">PUBG Mobile</h5>
                        <h6 class="custom-card-subtitle">Tencent</h6>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Kartu 5 -->
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="Sausage_Man" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar5.png" class="custom-card-img-top" alt="Valorant image" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Sausage Man</h5>
                        <h6 class="custom-card-subtitle">X.D.Network</h6>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Kartu 6 -->
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="ragnarok" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar6.png" class="custom-card-img-top" alt="POINT BLANK" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Ragnarok M: Eternal Love</h5>
                        <h6 class="custom-card-subtitle">Gravity Interactive</h6>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Kartu 7 -->
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="league" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar7.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">League of Legends</h5>
                        <h6 class="custom-card-subtitle">Riot Games</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="supersus" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar8.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Super Sus</h5>
                        <h6 class="custom-card-subtitle">PIProductions</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="arena" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar9.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Arena of Valor </h5>
                        <h6 class="custom-card-subtitle">Tencent Garena</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="dragon" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar10.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Dragon Raja</h5>
                        <h6 class="custom-card-subtitle">ZLOONG</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="undawn" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar11.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Undawn</h5>
                        <h6 class="custom-card-subtitle">Garena</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="cod" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar12.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Call of Duty Mobile</h5>
                        <h6 class="custom-card-subtitle">Garena</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="lordsmobile" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar13.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Lords Mobile</h5>
                        <h6 class="custom-card-subtitle">IGG.COM</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="lifeaftercredits" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar14.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Lifeater Credits</h5>
                        <h6 class="custom-card-subtitle">NetEase Games</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="marvel" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar15.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Marvel SuperWar</h5>
                        <h6 class="custom-card-subtitle">NetEase Games</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="tomandjerry" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar16.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Tom and Jerry :Chase</h5>
                        <h6 class="custom-card-subtitle">NetEase Games</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="fifa" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar17.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">FIFA MOBILE</h5>
                        <h6 class="custom-card-subtitle">EA Sport</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="metal" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar18.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Metal Slug Awakening</h5>
                        <h6 class="custom-card-subtitle">Vnggames</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="eggyparty" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar19.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Eggy Party</h5>
                        <h6 class="custom-card-subtitle">NetEase Games</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="onepunchman" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar20.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">One Punchman :The Strongest</h5>
                        <h6 class="custom-card-subtitle">FingerFun</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="BLOODSTRIKE" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar21.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">BLOODSTRIKE</h5>
                        <h6 class="custom-card-subtitle">NetEase</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="zepeto" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar22.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Zepeto</h5>
                        <h6 class="custom-card-subtitle">Zepeto</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="LoveandDeepspace" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar23.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Love and Deepspace</h5>
                        <h6 class="custom-card-subtitle">InfoldPte.Lrd.</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="StumbleGuys" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar24.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Stumble Guys</h5>
                        <h6 class="custom-card-subtitle">Kitka Games</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="AceRacer" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar25.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Ace Racer</h5>
                        <h6 class="custom-card-subtitle">NetEase</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 mb-3 card-container  other" style="display: none;">
                <a href="RiseofKingdom" onclick="showLightEffect(event, this)">
                    <div class="custom-card card-4">
                        <div class="blue-overlay"></div>
                        <img src="gambar26.png" class="custom-card-img-top" alt="Roblox" onclick="showLightEffect(event, this.parentElement)">
                        <div class="custom-card-body">
                        <h5 class="custom-card-title">Rise of Kingdom</h5>
                        <h6 class="custom-card-subtitle">Lilth Games</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Function to show the selected category
        function showCategory(category, headingElement) {
            const cards = document.querySelectorAll('.card-container');
            cards.forEach(card => {
                // Hide all cards initially
                card.style.display = 'none';
                const customCard = card.querySelector('.custom-card');
                // Reset the active class and overlay opacity
                customCard.classList.remove('active');
                const overlay = customCard.querySelector('.blue-overlay');
                overlay.style.opacity = '0';
            });
            
            // Show the selected category cards
            if (category === 'bestseller') {
                document.querySelectorAll('.bestseller').forEach(card => {
                    card.style.display = 'block'; // Show Best Seller cards
                });
            } else if (category === 'other') {
                document.querySelectorAll('.other').forEach(card => {
                    card.style.display = 'block'; // Show Game Lainnya cards
                });
            }

            // Set active heading style
            if (category === 'bestseller') {
                headingElement.classList.add('active-heading');
                document.getElementById('otherGameHeading').classList.remove('active-heading');
            } else {
                headingElement.classList.add('active-heading');
                document.getElementById('bestSellerHeading').classList.remove('active-heading');
            }
        }

        // Function to show light effect on card
        function showLightEffect(event, link) {
            event.preventDefault(); // Prevent default link behavior
            const card = link.querySelector('.custom-card'); // Get the card within the link
            const overlay = card.querySelector('.blue-overlay'); // Get the overlay

            card.classList.add('active'); // Add light effect to card
            overlay.style.opacity = 1; // Show the blue overlay

            setTimeout(() => {
                overlay.style.opacity = 0; // Hide overlay after 300ms
                card.classList.remove('active'); // Remove effect after 500ms
                window.location.href = link.getAttribute('href'); // Redirect after animation
            }, 500); // Match this duration with CSS transition duration
        }
    </script>
</body>
</html>
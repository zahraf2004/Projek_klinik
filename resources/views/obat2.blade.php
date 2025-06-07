<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Klinik - Filter Obat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }
        
        /* Navbar Styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 15px 5%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .logo-icon {
            background-color: #2d7bf4;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 20px;
        }
        
        .logo-text {
            font-size: 22px;
            font-weight: 700;
            color: #2d7bf4;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
            gap: 30px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            font-size: 16px;
            position: relative;
            transition: color 0.3s;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        
        .nav-links a:hover, 
        .nav-links a.active {
            color: #2d7bf4;
        }
        
        .nav-links a:hover::after,
        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: #2d7bf4;
            border-radius: 2px;
        }
        
        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
        }
        
        .profile-pic {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #2d7bf4, #6a11cb);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
        }
        
        .profile-name {
            font-weight: 500;
            font-size: 16px;
        }
        
        /* Dropdown menu */
        .dropdown {
            position: relative;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            border-radius: 8px;
            z-index: 1;
            top: 35px;
            left: 0;
            overflow: hidden;
        }
        
        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s;
            font-size: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .dropdown-content a:hover {
            background-color: #f1f5ff;
            color: #2d7bf4;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        /* Hamburger Menu */
        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 24px;
            color: #333;
        }
        
        /* Content Styles */
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .header h1 {
            font-size: 36px;
            color: #2d7bf4;
            margin-bottom: 10px;
        }
        
        .header p {
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 50px;
        }
        
        .service-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(45, 123, 244, 0.15);
        }
        
        .card-img {
            height: 160px;
            background: linear-gradient(135deg, #2d7bf4, #6a11cb);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 64px;
        }
        
        .card-content {
            padding: 20px;
        }
        
        .card-content h3 {
            color: #2d7bf4;
            margin-bottom: 10px;
        }
        
        .card-content p {
            color: #666;
            margin-bottom: 15px;
            font-size: 15px;
        }
        
        .btn {
            display: inline-block;
            background: #2d7bf4;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.3s;
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            background: #1a66e0;
        }
        
        /* Search & Filter Styles */
        .search-section {
            padding: 0 65px;
            margin-bottom: 30px;
        }
        
        .search {
            display: flex;
            margin-bottom: 30px;
            position: relative;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s;
            padding-right: 50px;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #2d7bf4;
            box-shadow: 0 0 0 3px rgba(45, 123, 244, 0.2);
        }
        
        .search-btn {
            position: absolute;
            right: 5px;
            top: 5px;
            background: #2d7bf4;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 8px 15px;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .search-btn:hover {
            background: #1a66e0;
        }
        
        .Judul h1 {
            font-size: 30px;
            font-weight: bold;
            color: #2d7bf4;
            margin-bottom: 20px;
        }
        
        .filter {
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 40px;
        }
        
        .filter-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #333;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .filter-title i {
            color: #2d7bf4;
        }
        
        .filter2 {
            display: flex;
            flex-wrap: wrap;
            gap: 15px 30px;
        }
        
        .Check {
            display: flex;
            align-items: center;
            position: relative;
            padding-left: 35px;
            cursor: pointer;
            font-size: 16px;
            user-select: none;
            transition: all 0.2s;
            height: 30px;
        }
        
        .Check:hover {
            color: #2d7bf4;
        }
        
        /* Hide the browser's default checkbox */
        .Check input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }
        
        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            left: 0;
            height: 24px;
            width: 24px;
            background-color: #f0f4ff;
            border: 1px solid #d0d9e7;
            border-radius: 5px;
            transition: all 0.2s;
        }
        
        /* On mouse-over, add a grey background color */
        .Check:hover input ~ .checkmark {
            background-color: #e1e9ff;
            border-color: #a9c0f5;
        }
        
        /* When the checkbox is checked, add a blue background */
        .Check input:checked ~ .checkmark {
            background-color: #2d7bf4;
            border-color: #2d7bf4;
        }
        
        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }
        
        /* Show the checkmark when checked */
        .Check input:checked ~ .checkmark:after {
            display: block;
        }
        
        /* Style the checkmark/indicator */
        .Check .checkmark:after {
            left: 8px;
            top: 4px;
            width: 6px;
            height: 12px;
            border: solid white;
            border-width: 0 3px 3px 0;
            transform: rotate(45deg);
        }
        
        /* Product Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
            padding: 0 65px;
        }
        
        .product-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .product-img {
            height: 180px;
            background: #f0f7ff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .product-img img {
            max-width: 100%;
            max-height: 140px;
            object-fit: contain;
        }
        
        .product-content {
            padding: 20px;
        }
        
        .product-category {
            color: #2d7bf4;
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .product-name {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }
        
        .product-price {
            font-size: 20px;
            font-weight: 700;
            color: #2d7bf4;
            margin-bottom: 15px;
        }
        
        .product-rating {
            display: flex;
            align-items: center;
            gap: 5px;
            margin-bottom: 15px;
            color: #ffb300;
        }
        
        .add-to-cart {
            display: flex;
            justify-content: center;
            padding: 10px;
            background: #2d7bf4;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.3s;
            width: 100%;
        }
        
        .add-to-cart:hover {
            background: #1a66e0;
        }
        
        .add-to-cart i {
            margin-right: 8px;
        }
        
        /* Responsive styles */
        @media (max-width: 992px) {
            .nav-links {
                gap: 20px;
            }
            
            .filter2 {
                gap: 15px 20px;
            }
        }
        
        @media (max-width: 768px) {
            .navbar {
                padding: 15px;
            }
            
            .nav-links {
                position: fixed;
                top: 70px;
                left: -100%;
                background: white;
                width: 100%;
                flex-direction: column;
                align-items: center;
                padding: 20px 0;
                gap: 15px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                transition: left 0.3s;
            }
            
            .nav-links.active {
                left: 0;
            }
            
            .nav-links li {
                width: 100%;
                text-align: center;
            }
            
            .nav-links a {
                padding: 12px 0;
                justify-content: center;
            }
            
            .hamburger {
                display: block;
            }
            
            .profile-name {
                display: none;
            }
            
            .dropdown-content {
                position: static;
                box-shadow: none;
                width: 100%;
                border-radius: 0;
            }
            
            .search-section,
            .products-grid {
                padding: 0 20px;
            }
            
            .filter {
                padding: 15px;
            }
            
            .Judul h1 {
                font-size: 24px;
            }
            
            .filter2 {
                gap: 10px;
            }
            
            .Check {
                font-size: 14px;
                padding-left: 30px;
            }
            
            .checkmark {
                height: 20px;
                width: 20px;
            }
            
            .Check .checkmark:after {
                left: 7px;
                top: 3px;
                width: 5px;
                height: 10px;
            }
        }
        
        @media (max-width: 480px) {
            .filter2 {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <div class="logo-icon">
                <i class="fas fa-heartbeat"></i>
            </div>
            <div class="logo-text">KLINIK+</div>
        </div>
        
        <ul class="nav-links">
            <li><a href="#" class="active">Beranda</a></li>
            <li><a href="#">Riwayat</a></li>
            <li class="dropdown">
                <a href="#">Layanan <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a href="#"><i class="fas fa-pills"></i> Obat & Vitamin</a>
                    <a href="#"><i class="fas fa-heart"></i> Kesehatan Seksual</a>
                    <a href="#"><i class="fas fa-capsules"></i> Vitamin & Suplemen</a>
                    <a href="#"><i class="fas fa-baby"></i> Perawatan Bayi</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#">Tentang <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a href="#"><i class="fas fa-info-circle"></i> Tentang Kami</a>
                    <a href="#"><i class="fas fa-map-marker-alt"></i> Lokasi Klinik</a>
                    <a href="#"><i class="fas fa-phone-alt"></i> Kontak</a>
                    <a href="#"><i class="fas fa-question-circle"></i> FAQ</a>
                </div>
            </li>
        </ul>
        
        <div class="user-profile">
            <div class="profile-pic">TL</div>
            <div class="profile-name">Tisa Lufloni</div>
        </div>
        
        <div class="hamburger" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
    </nav>

    <!-- Filter Section -->
    <div class="search-section">
        <div class="search">
            <input class="form-control" id="choices-text-preset-values" type="text" placeholder="Cari obat, vitamin, atau kategori...">
            <button class="search-btn" type="button">
                <i class="fas fa-search"></i>
            </button>
        </div>
        
        <div class="Judul">
            <h1>Obat & Vitamin Berdasarkan Kategori</h1>
        </div>
        
        <div class="filter">
            <div class="filter-title">
                <i class="fas fa-filter"></i> Filter Kategori
            </div>
            <div class="filter2">
                <label class="Check">Obat & Perawatan
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                </label>
                <label class="Check">Kesehatan Seksual
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="Check">Vitamin & Suplemen
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                </label>
                <label class="Check">Asma 
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="Check">Ibu & Anak
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="Check">Kecantikan
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="Check">Kesehatan Jantung
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="Check">Diabetes
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
    </div>

    <!-- Products Grid -->
    <div class="products-grid">
        <div class="product-card">
            <div class="product-img">
                <img src="https://via.placeholder.com/150/2d7bf4/ffffff?text=Vitamin+C" alt="Vitamin C">
            </div>
            <div class="product-content">
                <div class="product-category">Vitamin & Suplemen</div>
                <div class="product-name">Vitamin C 1000mg</div>
                <div class="product-price">Rp 85.000</div>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(142)</span>
                </div>
                <button class="add-to-cart">
                    <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                </button>
            </div>
        </div>
        
        <div class="product-card">
            <div class="product-img">
                <img src="https://via.placeholder.com/150/2d7bf4/ffffff?text=Paracetamol" alt="Paracetamol">
            </div>
            <div class="product-content">
                <div class="product-category">Obat & Perawatan</div>
                <div class="product-name">Paracetamol 500mg</div>
                <div class="product-price">Rp 25.000</div>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span>(89)</span>
                </div>
                <button class="add-to-cart">
                    <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                </button>
            </div>
        </div>
        
        <div class="product-card">
            <div class="product-img">
                <img src="https://via.placeholder.com/150/2d7bf4/ffffff?text=Asma" alt="Obat Asma">
            </div>
            <div class="product-content">
                <div class="product-category">Asma</div>
                <div class="product-name">Salbutamol Inhaler</div>
                <div class="product-price">Rp 120.000</div>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>(56)</span>
                </div>
                <button class="add-to-cart">
                    <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                </button>
            </div>
        </div>
        
        <div class="product-card">
            <div class="product-img">
                <img src="https://via.placeholder.com/150/2d7bf4/ffffff?text=Vitamin+D" alt="Vitamin D">
            </div>
            <div class="product-content">
                <div class="product-category">Vitamin & Suplemen</div>
                <div class="product-name">Vitamin D3 1000IU</div>
                <div class="product-price">Rp 95.000</div>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                    <span>(78)</span>
                </div>
                <button class="add-to-cart">
                    <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                </button>
            </div>
        </div>
    </div>

    <script>
        // Toggle mobile menu
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.querySelector('.nav-links');
        
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            
            // Change hamburger icon
            const icon = hamburger.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.navbar') && navLinks.classList.contains('active')) {
                navLinks.classList.remove('active');
                const icon = hamburger.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
        
        // Search functionality
        const searchInput = document.getElementById('choices-text-preset-values');
        const searchBtn = document.querySelector('.search-btn');
        
        searchBtn.addEventListener('click', () => {
            if (searchInput.value.trim() !== '') {
                alert(`Mencari: ${searchInput.value}`);
                // Implement your search logic here
            }
        });
        
        searchInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                if (searchInput.value.trim() !== '') {
                    alert(`Mencari: ${searchInput.value}`);
                    // Implement your search logic here
                }
            }
        });
    </script>
</body>
</html>
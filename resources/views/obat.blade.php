<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Pratama Dokter Yanti</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<body>
    <div id="navbar-wrapper">
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('img/Logo2.png') }}" alt="logo" height="40px" >
        </div>
        <ul class="nav-links">
            <li><a href="#" class="active">Beranda</a></li>
            <li><a href="#">Riwayat</a></li>
            <li class="dropdown">
                <a href="#">Layanan <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a href="#"><i class="fas fa-pills"></i> Konsultasi Dokter Online</a>
                    <a href="#"><i class="fas fa-heart"></i> Atur Janji Temu</a>
                    <a href="#"><i class="fas fa-capsules"></i> Layanan Kesehatan</a>
                    <a href="#"><i class="fas fa-baby"></i> KB</a>
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
            <i class="fa-solid fa-circle-user fa-2xl"></i>
            <div class="profile-name">Tisa Lufloni</div>
        </div>
        
        <div class="hamburger" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
    </nav>

    <!-- filter obat -->
     <div class="search">
        <input class="form-control" id="choices-text-preset-values" type="text" placeholder="Cari obat, vitamin, atau kategori..." />
        <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
        </button>
    </div>
    <div class="Judul">
        <h1>Obat & Vitamin Berdasarkan Kategori</h1>
    </div>
    <div class="filter">
        <div class="filter2">
            <label class="Check">Obat & perawatan
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <label class="Check">Kesehatan Seksual
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <label class="Check">Vitamin & Suplemen
                <input type="checkbox">
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
            <label class="Check">Diabetess
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
        </div>

    </div>
    
    
    <!-- Content -->
    <!-- Products Grid -->
    <div class="products-grid">
        <div class="product-card">
            <div class="product-img">
                <img src="https://via.placeholder.com/150/2d7bf4/ffffff?text=Vitamin+C" alt="Vitamin C">
            </div>
            <div class="product-content">
                <div class="product-category">Vitamin & Suplemen</div>
                <div class="product-name">Vitamin C 1000mg</div>
                <div class="product-price">Tablet</div>
                <button class="add-to-cart">
                    <i class="fa-solid fa-circle-info"></i>Informasi Produk
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
                <div class="product-price">Tablet</div>
                <button class="add-to-cart">
                    <i class="fa-solid fa-circle-info"></i>Informasi Produk
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
                <div class="product-price">Inhaler</div>
                <button class="add-to-cart">
                    <i class="fa-solid fa-circle-info"></i>Informasi Produk
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
                <div class="product-price">Tablet</div>
                <button class="add-to-cart">
                    <i class="fa-solid fa-circle-info"></i>Informasi Produk
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
</div>
</body>
</html>
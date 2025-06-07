<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Pratama Dokter Yanti</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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

    <!-- Content -->
    <div class="container">
        <div class="header">
            <h1>Layanan Klinik</h1>
            <p>Kami menyediakan berbagai layanan kesehatan terbaik dengan tim profesional dan fasilitas modern untuk kebutuhan kesehatan Anda</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="card-img">
                    <i class="fas fa-pills"></i>
                </div>
                <div class="card-content">
                    <h3>Obat & Vitamin</h3>
                    <p>Berbagai jenis obat dan vitamin dengan kualitas terbaik untuk menjaga kesehatan Anda.</p>
                    <a href="#" class="btn">Lihat Produk</a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="card-img">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="card-content">
                    <h3>Kesehatan Seksual</h3>
                    <p>Layanan konsultasi dan perawatan kesehatan seksual dengan privasi terjamin.</p>
                    <a href="#" class="btn">Lihat Layanan</a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="card-img">
                    <i class="fas fa-capsules"></i>
                </div>
                <div class="card-content">
                    <h3>Vitamin & Suplemen</h3>
                    <p>Suplemen nutrisi untuk mendukung kesehatan dan kebugaran sehari-hari.</p>
                    <a href="#" class="btn">Lihat Produk</a>
                </div>
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
    </script>
</div>
</body>
</html>
<!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <a href="/dashboard"><img src="{{ asset('img/Logo2.png') }}" alt="logo" height="40px" ></a>
        </div>
        <ul class="nav-links">
            <li><a href="/dashboard" class="">Beranda</a></li>
            <li><a href="/riwayat">Riwayat</a></li>
            <li class="dropdown">
                <a href="#">Layanan <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a href="/chatify"><i class="fas fa-stethoscope"></i> Konsultasi Dokter Online</a>
                    <a href="#"><i class="fa-regular fa-calendar"></i> Atur Janji Temu</a>
                    <a href="#"><i class="fas fa-capsules"></i> Layanan Kesehatan</a>
                    <a href="#"><i class="fas fa-baby"></i> KB</a>
                    <a href="#"><i class="fa-solid fa-flask"></i> Cek LAB</a>
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
            <div class="profile-name">Tias Lufiani</div>
        </div>
        
        <div class="hamburger" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
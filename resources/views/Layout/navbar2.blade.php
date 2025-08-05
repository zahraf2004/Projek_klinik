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
                    <a href="/pilih-Dokter"><i class="fas fa-stethoscope"></i> Konsultasi Dokter Online</a>
                    <a href="/riwayat"><i class="fa-regular fa-calendar"></i> Atur Janji Temu</a>
                    <a href="/layanan-kami"><i class="fas fa-capsules"></i> Layanan Kesehatan</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#">Tentang <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a href="/tentang-kami"><i class="fas fa-info-circle"></i> Tentang Kami</a>
                    <a href="/kontak-kami"><i class="fas fa-phone-alt"></i> Kontak</a>
                </div>
            </li>
        </ul>
        
        @guest
            <a href="{{ route('login') }}" class="btn ">Masuk</a>
        @endguest
        @auth
            <!-- Dropdown Profil -->
            <div class="user-dropdown">
                <div class="user-profile" id="profileDropdownBtn">
                    <i class="fa-solid fa-circle-user fa-2xl"></i>
                    <div class="profile-name">{{ Auth::user()->name }}</div>
                    <i class="fas fa-caret-down"></i>
                </div>
                
                <div class="dropdown-menu" id="profileDropdownMenu">
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </div>
            </div>
        @endauth
        
        <div class="hamburger" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
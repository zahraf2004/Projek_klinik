<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi Dokter Online - Klinik Pratama</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
            --primary: #1a73e8;
            --primary-dark: #0d47a1;
            --secondary: #f5f9ff;
            --accent: #34a853;
            --text: #202124;
            --text-light: #5f6368;
            --border: #dadce0;
            --card-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }
        
        body {
            background-color: #f8f9fa;
            color: var(--text);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .logo-icon {
            font-size: 28px;
            color: white;
        }
        
        .logo-text {
            font-size: 24px;
            font-weight: 700;
        }
        
        .nav-links {
            display: flex;
            gap: 25px;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: opacity 0.3s;
        }
        
        .nav-links a:hover {
            opacity: 0.8;
        }
        
        .doctor-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .doctor-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-weight: bold;
            font-size: 20px;
        }
        
        .doctor-details h3 {
            font-size: 18px;
            margin-bottom: 5px;
        }
        
        .doctor-details p {
            font-size: 14px;
            opacity: 0.9;
        }
        
        /* Main Layout */
        .main-content {
            display: flex;
            gap: 30px;
            margin: 30px 0;
        }
        
        .left-column {
            flex: 1;
            min-width: 300px;
        }
        
        .right-column {
            flex: 1;
            min-width: 300px;
        }
        
        .section-card {
            background-color: white;
            border-radius: 16px;
            padding: 30px;
            box-shadow: var(--card-shadow);
            margin-bottom: 30px;
        }
        
        .section-title {
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--primary);
            color: var(--primary-dark);
            font-size: 24px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .section-title i {
            font-size: 28px;
            color: var(--primary);
        }
        
        /* Telemedicine Section */
        .telemedicine-content {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .telemedicine-image {
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            margin: 15px 0;
        }
        
        .telemedicine-image i {
            font-size: 120px;
            color: var(--primary);
            opacity: 0.7;
        }
        
        .benefits-list {
            margin-top: 15px;
            list-style: none;
        }
        
        .benefits-list li {
            padding: 12px 0;
            padding-left: 35px;
            position: relative;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .benefits-list li:last-child {
            border-bottom: none;
        }
        
        .benefits-list li:before {
            content: "\f00c";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 12px;
            color: var(--accent);
            background-color: rgba(52, 168, 83, 0.1);
            width: 26px;
            height: 26px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Doctors Section */
        .doctors-section {
            position: sticky;
            top: 100px;
        }
        
        .doctors-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }
        
        .doctor-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #eaeaea;
            display: flex;
            flex-direction: column;
        }
        
        .doctor-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }
        
        .doctor-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 20px 15px;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .doctor-avatar-sm {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-weight: bold;
            font-size: 24px;
            flex-shrink: 0;
        }
        
        .doctor-info-sm {
            flex: 1;
        }
        
        .doctor-name {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .doctor-specialty {
            font-size: 14px;
            opacity: 0.9;
        }
        
        .doctor-info-card {
            padding: 15px;
        }
        
        .info-item {
            display: flex;
            margin-bottom: 12px;
        }
        
        .info-icon {
            color: var(--primary);
            width: 25px;
            font-size: 16px;
            margin-top: 3px;
        }
        
        .info-text {
            flex: 1;
        }
        
        .info-text h4 {
            font-size: 14px;
            margin-bottom: 3px;
            color: var(--primary-dark);
        }
        
        .info-text p {
            font-size: 13px;
            color: var(--text-light);
        }
        
        .action-buttons {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }
        
        .btn {
            display: inline-block;
            padding: 8px 12px;
            border-radius: 8px;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            flex: 1;
            border: none;
            font-size: 13px;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
        }
        
        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }
        
        .btn-outline:hover {
            background-color: rgba(26, 115, 232, 0.1);
        }
        
        /* Search Section */
        .search-container {
            background: white;
            border-radius: 12px;
            padding: 15px;
            box-shadow: var(--card-shadow);
            margin-bottom: 20px;
            display: flex;
            gap: 10px;
        }
        
        .search-container input {
            flex: 1;
            padding: 12px 15px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 15px;
        }
        
        .search-container button {
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px 20px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .search-container button:hover {
            background-color: var(--primary-dark);
        }
        
        /* Stats Section */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 20px;
        }
        
        .stat-card {
            background: var(--secondary);
            border-radius: 12px;
            padding: 15px;
            text-align: center;
            border: 1px solid #e0e0e0;
        }
        
        .stat-value {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
        }
        
        .stat-label {
            font-size: 14px;
            color: var(--text-light);
        }
        
        /* Responsive */
        @media (max-width: 900px) {
            .main-content {
                flex-direction: column;
            }
            
            .doctors-section {
                position: static;
            }
            
            .doctors-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
        }
        
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 15px;
            }
            
            .nav-links {
                justify-content: center;
                flex-wrap: wrap;
            }
            
            .doctor-info {
                justify-content: center;
            }
            
            .doctors-grid {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 480px) {
            .search-container {
                flex-direction: column;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-content">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-hospital"></i>
                </div>
                <div class="logo-text">Klinik Pratama</div>
            </div>
            
            <div class="nav-links">
                <a href="#"><i class="fas fa-home"></i> Beranda</a>
                <a href="#"><i class="fas fa-history"></i> Riwayat</a>
                <a href="#"><i class="fas fa-concierge-bell"></i> Layanan</a>
                <a href="#"><i class="fas fa-info-circle"></i> Tentang</a>
            </div>
            
            <div class="doctor-info">
                <div class="doctor-avatar">DY</div>
                <div class="doctor-details">
                    <h3>Dr. Yanti</h3>
                    <p>Dokter Umum</p>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="main-content">
            <!-- Kolom Kiri: Penjelasan Konsultasi -->
            <div class="left-column">
                <section class="section-card">
                    <h2 class="section-title"><i class="fas fa-laptop-medical"></i> Periplasan Telemedicine</h2>
                    
                    <div class="telemedicine-content">
                        <p>Telemedicine adalah layanan konsultasi kesehatan jarak jauh menggunakan teknologi komunikasi. Dengan telemedicine, Anda dapat berkonsultasi dengan dokter tanpa harus datang langsung ke klinik.</p>
                        
                        <div class="telemedicine-image">
                            <i class="fas fa-video"></i>
                        </div>
                        
                        <h3 style="margin: 15px 0; color: var(--primary-dark);">Manfaat Telemedicine:</h3>
                        <ul class="benefits-list">
                            <li>Konsultasi dari rumah tanpa perlu antri</li>
                            <li>Menghemat waktu dan biaya transportasi</li>
                            <li>Akses ke dokter spesialis lebih mudah</li>
                            <li>Lebih aman dari risiko penularan penyakit</li>
                            <li>Resep obat langsung dikirim ke apotek pilihan Anda</li>
                            <li>Rekam medis digital yang terintegrasi</li>
                        </ul>
                    </div>
                </section>
                
                <section class="section-card">
                    <h2 class="section-title"><i class="fas fa-chart-line"></i> Statistik Penggunaan</h2>
                    
                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-value">4.8/5</div>
                            <div class="stat-label">Rating Pengguna</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-value">98%</div>
                            <div class="stat-label">Kepuasan Pasien</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-value">15k+</div>
                            <div class="stat-label">Konsultasi/Bulan</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-value">50+</div>
                            <div class="stat-label">Dokter Tersedia</div>
                        </div>
                    </div>
                </section>
            </div>
            
            <!-- Kolom Kanan: Daftar Dokter -->
            <div class="right-column">
                <div class="doctors-section">
                    <div class="search-container">
                        <input type="text" placeholder="Cari dokter berdasarkan nama atau spesialisasi...">
                        <button><i class="fas fa-search"></i> Cari</button>
                    </div>
                    
                    <div class="section-card">
                        <h2 class="section-title"><i class="fas fa-user-md"></i> Dokter Tersedia</h2>
                        
                        <div class="doctors-grid">
                            <!-- Doctor 1 -->
                            <div class="doctor-card">
                                <div class="doctor-header">
                                    <div class="doctor-avatar-sm">RS</div>
                                    <div class="doctor-info-sm">
                                        <h3 class="doctor-name">Dr. Rina Susanti</h3>
                                        <p class="doctor-specialty">Dokter Umum</p>
                                    </div>
                                </div>
                                <div class="doctor-info-card">
                                    <div class="info-item">
                                        <div class="info-icon"><i class="fas fa-star"></i></div>
                                        <div class="info-text">
                                            <h4>Rating</h4>
                                            <p>4.9 (1,245 ulasan)</p>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-icon"><i class="fas fa-clock"></i></div>
                                        <div class="info-text">
                                            <h4>Jadwal</h4>
                                            <p>Senin-Jumat: 08:00 - 15:00</p>
                                        </div>
                                    </div>
                                    <div class="action-buttons">
                                        <a href="#" class="btn btn-primary">Chat Sekarang</a>
                                        <a href="#" class="btn btn-outline">Profil</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Doctor 2 -->
                            <div class="doctor-card">
                                <div class="doctor-header">
                                    <div class="doctor-avatar-sm">DA</div>
                                    <div class="doctor-info-sm">
                                        <h3 class="doctor-name">Dr. Dedi Anggara</h3>
                                        <p class="doctor-specialty">Spesialis Anak</p>
                                    </div>
                                </div>
                                <div class="doctor-info-card">
                                    <div class="info-item">
                                        <div class="info-icon"><i class="fas fa-star"></i></div>
                                        <div class="info-text">
                                            <h4>Rating</h4>
                                            <p>4.8 (985 ulasan)</p>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-icon"><i class="fas fa-clock"></i></div>
                                        <div class="info-text">
                                            <h4>Jadwal</h4>
                                            <p>Senin-Sabtu: 10:00 - 17:00</p>
                                        </div>
                                    </div>
                                    <div class="action-buttons">
                                        <a href="#" class="btn btn-primary">Chat Sekarang</a>
                                        <a href="#" class="btn btn-outline">Profil</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Doctor 3 -->
                            <div class="doctor-card">
                                <div class="doctor-header">
                                    <div class="doctor-avatar-sm">AS</div>
                                    <div class="doctor-info-sm">
                                        <h3 class="doctor-name">Dr. Anita Sari</h3>
                                        <p class="doctor-specialty">Spesialis Kulit</p>
                                    </div>
                                </div>
                                <div class="doctor-info-card">
                                    <div class="info-item">
                                        <div class="info-icon"><i class="fas fa-star"></i></div>
                                        <div class="info-text">
                                            <h4>Rating</h4>
                                            <p>4.9 (1,120 ulasan)</p>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-icon"><i class="fas fa-clock"></i></div>
                                        <div class="info-text">
                                            <h4>Jadwal</h4>
                                            <p>Selasa-Jumat: 09:00 - 16:00</p>
                                        </div>
                                    </div>
                                    <div class="action-buttons">
                                        <a href="#" class="btn btn-primary">Chat Sekarang</a>
                                        <a href="#" class="btn btn-outline">Profil</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Doctor 4 -->
                            <div class="doctor-card">
                                <div class="doctor-header">
                                    <div class="doctor-avatar-sm">BP</div>
                                    <div class="doctor-info-sm">
                                        <h3 class="doctor-name">Dr. Bambang P.</h3>
                                        <p class="doctor-specialty">Spesialis Jantung</p>
                                    </div>
                                </div>
                                <div class="doctor-info-card">
                                    <div class="info-item">
                                        <div class="info-icon"><i class="fas fa-star"></i></div>
                                        <div class="info-text">
                                            <h4>Rating</h4>
                                            <p>4.7 (875 ulasan)</p>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-icon"><i class="fas fa-clock"></i></div>
                                        <div class="info-text">
                                            <h4>Jadwal</h4>
                                            <p>Senin-Kamis: 08:00 - 14:00</p>
                                        </div>
                                    </div>
                                    <div class="action-buttons">
                                        <a href="#" class="btn btn-primary">Chat Sekarang</a>
                                        <a href="#" class="btn btn-outline">Profil</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Doctor 5 -->
                            <div class="doctor-card">
                                <div class="doctor-header">
                                    <div class="doctor-avatar-sm">MS</div>
                                    <div class="doctor-info-sm">
                                        <h3 class="doctor-name">Dr. M. Surya</h3>
                                        <p class="doctor-specialty">Spesialis THT</p>
                                    </div>
                                </div>
                                <div class="doctor-info-card">
                                    <div class="info-item">
                                        <div class="info-icon"><i class="fas fa-star"></i></div>
                                        <div class="info-text">
                                            <h4>Rating</h4>
                                            <p>4.8 (1,050 ulasan)</p>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-icon"><i class="fas fa-clock"></i></div>
                                        <div class="info-text">
                                            <h4>Jadwal</h4>
                                            <p>Rabu-Minggu: 09:00 - 16:00</p>
                                        </div>
                                    </div>
                                    <div class="action-buttons">
                                        <a href="#" class="btn btn-primary">Chat Sekarang</a>
                                        <a href="#" class="btn btn-outline">Profil</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Doctor 6 -->
                            <div class="doctor-card">
                                <div class="doctor-header">
                                    <div class="doctor-avatar-sm">LW</div>
                                    <div class="doctor-info-sm">
                                        <h3 class="doctor-name">Dr. Lina Wijaya</h3>
                                        <p class="doctor-specialty">Dokter Gigi</p>
                                    </div>
                                </div>
                                <div class="doctor-info-card">
                                    <div class="info-item">
                                        <div class="info-icon"><i class="fas fa-star"></i></div>
                                        <div class="info-text">
                                            <h4>Rating</h4>
                                            <p>4.9 (980 ulasan)</p>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-icon"><i class="fas fa-clock"></i></div>
                                        <div class="info-text">
                                            <h4>Jadwal</h4>
                                            <p>Senin-Jumat: 10:00 - 18:00</p>
                                        </div>
                                    </div>
                                    <div class="action-buttons">
                                        <a href="#" class="btn btn-primary">Chat Sekarang</a>
                                        <a href="#" class="btn btn-outline">Profil</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Animasi untuk card dokter
        const doctorCards = document.querySelectorAll('.doctor-card');
        doctorCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-7px)';
                card.style.boxShadow = '0 12px 25px rgba(0, 0, 0, 0.15)';
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0)';
                card.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.08)';
            });
        });
        
        // Fungsi pencarian dokter
        const searchInput = document.querySelector('.search-container input');
        const searchButton = document.querySelector('.search-container button');
        
        searchButton.addEventListener('click', searchDoctors);
        searchInput.addEventListener('keyup', function(event) {
            if (event.key === 'Enter') {
                searchDoctors();
            }
        });
        
        function searchDoctors() {
            const searchTerm = searchInput.value.toLowerCase();
            const doctorCards = document.querySelectorAll('.doctor-card');
            
            doctorCards.forEach(card => {
                const doctorName = card.querySelector('.doctor-name').textContent.toLowerCase();
                const specialty = card.querySelector('.doctor-specialty').textContent.toLowerCase();
                
                if (doctorName.includes(searchTerm) || specialty.includes(searchTerm)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
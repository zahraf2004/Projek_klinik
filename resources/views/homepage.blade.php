<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Klinik Pratama</title>
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
            padding: 0 20px;
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
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(26, 115, 232, 0.8), rgba(13, 71, 161, 0.9)), url('https://images.unsplash.com/photo-1586769852836-bc069f19e1b6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 20px;
            margin-bottom: 60px;
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        
        .hero p {
            font-size: 20px;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.9;
        }
        
        /* Main Contact Section */
        .contact-main {
            display: flex;
            gap: 40px;
            margin-bottom: 60px;
            flex-wrap: wrap;
        }
        
        .contact-info {
            flex: 1;
            min-width: 300px;
        }
        
        .contact-map {
            flex: 1;
            min-width: 300px;
        }
        
        .section-card {
            background-color: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: var(--card-shadow);
            height: 100%;
        }
        
        .section-title {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--primary);
            color: var(--primary-dark);
            font-size: 28px;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .section-title i {
            font-size: 32px;
            color: var(--primary);
        }
        
        /* Contact Information */
        .contact-item {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
            align-items: flex-start;
        }
        
        .contact-icon {
            width: 60px;
            height: 60px;
            background-color: var(--secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 24px;
            flex-shrink: 0;
        }
        
        .contact-details h3 {
            font-size: 22px;
            margin-bottom: 8px;
            color: var(--primary-dark);
        }
        
        .contact-details p {
            font-size: 17px;
            color: var(--text-light);
            margin-bottom: 5px;
        }
        
        .contact-details a {
            color: var(--primary);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .contact-details a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }
        
        /* Working Hours */
        .hours-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        .hours-table tr {
            border-bottom: 1px solid #eee;
        }
        
        .hours-table tr:last-child {
            border-bottom: none;
        }
        
        .hours-table td {
            padding: 12px 0;
            font-size: 16px;
        }
        
        .hours-table td:first-child {
            font-weight: 500;
        }
        
        .hours-table td:last-child {
            text-align: right;
            color: var(--text-light);
        }
        
        /* Map Section */
        .map-container {
            height: 100%;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            background-color: #e9ecef;
            position: relative;
        }
        
        .map-overlay {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            z-index: 10;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .map-overlay-content h3 {
            margin-bottom: 10px;
            color: var(--primary-dark);
        }
        
        .map-overlay-content p {
            margin-bottom: 5px;
            color: var(--text-light);
            font-size: 14px;
        }
        
        .directions-btn {
            background-color: var(--primary);
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
            white-space: nowrap;
        }
        
        .directions-btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
        }
        
        .map-placeholder {
            width: 100%;
            height: 100%;
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
        }
        
        .map-placeholder i {
            font-size: 100px;
            color: var(--primary);
            opacity: 0.5;
        }
        
        /* Services Section */
        .services-section {
            margin-bottom: 60px;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }
        
        .service-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s;
            text-align: center;
            border-top: 4px solid var(--primary);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.1);
        }
        
        .service-icon {
            width: 80px;
            height: 80px;
            background-color: var(--secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: var(--primary);
            font-size: 32px;
        }
        
        .service-title {
            font-size: 22px;
            color: var(--primary-dark);
            margin-bottom: 15px;
        }
        
        .service-description {
            color: var(--text-light);
            margin-bottom: 20px;
        }
        
        .service-contact {
            font-weight: 600;
            color: var(--primary);
        }
        
        /* FAQ Section */
        .faq-section {
            margin-bottom: 60px;
        }
        
        .faq-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }
        
        .faq-card {
            background: white;
            border-radius: 16px;
            padding: 25px;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s;
        }
        
        .faq-card:hover {
            transform: translateY(-5px);
        }
        
        .faq-question {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 15px;
        }
        
        .faq-question i {
            color: var(--primary);
            font-size: 20px;
            margin-top: 4px;
        }
        
        .faq-question h3 {
            font-size: 18px;
            color: var(--primary-dark);
        }
        
        .faq-answer p {
            color: var(--text-light);
            line-height: 1.7;
        }
        
        /* Footer */
        footer {
            background-color: var(--text);
            color: white;
            padding: 60px 0 20px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .footer-column h3 {
            font-size: 20px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-column h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--primary);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            color: #e0e0e0;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .contact-info-footer {
            display: flex;
            gap: 10px;
            margin-bottom: 12px;
            align-items: flex-start;
        }
        
        .contact-info-footer i {
            color: var(--primary);
            margin-top: 4px;
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            margin-top: 30px;
            border-top: 1px solid #444;
            color: #aaa;
            font-size: 14px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 15px;
            }
            
            .nav-links {
                justify-content: center;
                flex-wrap: wrap;
            }
            
            .hero {
                padding: 70px 20px;
            }
            
            .hero h1 {
                font-size: 36px;
            }
            
            .hero p {
                font-size: 18px;
            }
            
            .map-overlay {
                position: relative;
                bottom: 0;
                left: 0;
                right: 0;
                margin-top: 20px;
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
                <a href="#"><i class="fas fa-phone-alt"></i> Kontak</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Hubungi Kami</h1>
            <p>Tim Klinik Pratama siap membantu Anda. Kami senang mendengar dari Anda</p>
        </div>
    </section>

    <!-- Main Contact Section -->
    <div class="container">
        <div class="contact-main">
            <div class="contact-info">
                <div class="section-card">
                    <h2 class="section-title"><i class="fas fa-info-circle"></i> Informasi Kontak</h2>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Alamat Kami</h3>
                            <p>Jl. Kesehatan No. 123, Jakarta Selatan</p>
                            <p>Gedung Medika Center Lt. 5</p>
                            <p>DKI Jakarta 12560</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Telepon</h3>
                            <p><a href="tel:+622112345678">(021) 1234-5678</a></p>
                            <p><a href="tel:+628112345678">0811-2345-678</a> (Emergency)</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Email</h3>
                            <p><a href="mailto:info@klinikpratama.com">info@klinikpratama.com</a></p>
                            <p><a href="mailto:appointment@klinikpratama.com">appointment@klinikpratama.com</a> (Janji Temu)</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Jam Operasional</h3>
                            <table class="hours-table">
                                <tr>
                                    <td>Senin - Jumat</td>
                                    <td>08:00 - 21:00</td>
                                </tr>
                                <tr>
                                    <td>Sabtu</td>
                                    <td>08:00 - 17:00</td>
                                </tr>
                                <tr>
                                    <td>Minggu</td>
                                    <td>09:00 - 15:00</td>
                                </tr>
                                <tr>
                                    <td>Hari Libur</td>
                                    <td>09:00 - 13:00</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Media Sosial</h3>
                            <div class="social-icons" style="display: flex; gap: 15px; margin-top: 10px;">
                                <a href="#" style="width: 45px; height: 45px; background-color: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary); font-size: 20px; transition: all 0.3s;">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" style="width: 45px; height: 45px; background-color: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary); font-size: 20px; transition: all 0.3s;">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" style="width: 45px; height: 45px; background-color: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary); font-size: 20px; transition: all 0.3s;">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-map">
                <div class="map-container">
                    <div class="map-overlay">
                        <div class="map-overlay-content">
                            <h3>Klinik Pratama Jakarta</h3>
                            <p><i class="fas fa-map-marker-alt"></i> Jl. Kesehatan No. 123, Jakarta Selatan</p>
                        </div>
                        <a href="#" class="directions-btn">
                            <i class="fas fa-route"></i> Petunjuk Arah
                        </a>
                    </div>
                    
                    <div class="map-placeholder">
                        <i class="fas fa-map"></i>
                        <!-- Di implementasi nyata, ini akan diganti dengan iframe Google Maps -->
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Services Section -->
        <div class="services-section">
            <h2 class="section-title" style="border: none; padding: 0; margin-bottom: 30px;"><i class="fas fa-concierge-bell"></i> Layanan Kontak Kami</h2>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3 class="service-title">Janji Temu</h3>
                    <p class="service-description">Jadwalkan kunjungan Anda dengan dokter spesialis pilihan melalui berbagai saluran kontak kami.</p>
                    <p class="service-contact"><i class="fas fa-phone"></i> (021) 1234-5678</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <h3 class="service-title">Layanan Darurat</h3>
                    <p class="service-description">Layanan gawat darurat 24 jam dengan tim medis siap siaga kapan pun Anda membutuhkan.</p>
                    <p class="service-contact"><i class="fas fa-phone"></i> 0811-2345-678</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="service-title">Dukungan Pelanggan</h3>
                    <p class="service-description">Tim customer service kami siap membantu pertanyaan dan keluhan Anda setiap hari kerja.</p>
                    <p class="service-contact"><i class="fas fa-envelope"></i> support@klinikpratama.com</p>
                </div>
            </div>
        </div>
        
        <!-- FAQ Section -->
        <div class="faq-section">
            <h2 class="section-title" style="border: none; padding: 0; margin-bottom: 30px;"><i class="fas fa-question-circle"></i> Pertanyaan Umum</h2>
            
            <div class="faq-container">
                <div class="faq-card">
                    <div class="faq-question">
                        <i class="fas fa-question"></i>
                        <h3>Bagaimana cara membuat janji temu?</h3>
                    </div>
                    <div class="faq-answer">
                        <p>Anda dapat membuat janji temu melalui telepon, WhatsApp, atau email. Kami sarankan membuat janji minimal 1 hari sebelumnya.</p>
                    </div>
                </div>
                
                <div class="faq-card">
                    <div class="faq-question">
                        <i class="fas fa-question"></i>
                        <h3>Apakah klinik menerima BPJS?</h3>
                    </div>
                    <div class="faq-answer">
                        <p>Ya, Klinik Pratama merupakan mitra BPJS Kesehatan. Silakan membawa kartu BPJS dan surat rujukan dari faskes tingkat pertama.</p>
                    </div>
                </div>
                
                <div class="faq-card">
                    <div class="faq-question">
                        <i class="fas fa-question"></i>
                        <h3>Berapa lama waktu tunggu untuk konsultasi?</h3>
                    </div>
                    <div class="faq-answer">
                        <p>Dengan sistem janji temu, waktu tunggu biasanya tidak lebih dari 15 menit. Untuk pasien tanpa janji, waktu tunggu bervariasi tergantung antrian.</p>
                    </div>
                </div>
                
                <div class="faq-card">
                    <div class="faq-question">
                        <i class="fas fa-question"></i>
                        <h3>Apakah ada layanan gawat darurat?</h3>
                    </div>
                    <div class="faq-answer">
                        <p>Ya, kami menyediakan layanan gawat darurat 24 jam. Untuk keadaan darurat, silakan langsung datang ke klinik atau hubungi nomor emergency kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3>Klinik Pratama</h3>
                <p style="margin-bottom: 20px; color: #e0e0e0;">Memberikan pelayanan kesehatan terbaik dengan tim dokter profesional dan fasilitas modern.</p>
                <div class="social-icons" style="display: flex; gap: 15px;">
                    <a href="#" style="color: white; font-size: 20px;"><i class="fab fa-facebook"></i></a>
                    <a href="#" style="color: white; font-size: 20px;"><i class="fab fa-instagram"></i></a>
                    <a href="#" style="color: white; font-size: 20px;"><i class="fab fa-twitter"></i></a>
                    <a href="#" style="color: white; font-size: 20px;"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            
            <div class="footer-column">
                <h3>Layanan</h3>
                <ul class="footer-links">
                    <li><a href="#">Konsultasi Dokter Umum</a></li>
                    <li><a href="#">Konsultasi Spesialis</a></li>
                    <li><a href="#">Pemeriksaan Lab</a></li>
                    <li><a href="#">Vaksinasi</a></li>
                    <li><a href="#">Pemeriksaan Kesehatan</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>Kontak Kami</h3>
                <div class="contact-info-footer">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Jl. Kesehatan No. 123, Jakarta Selatan, Indonesia</p>
                </div>
                <div class="contact-info-footer">
                    <i class="fas fa-phone"></i>
                    <p>(021) 1234-5678</p>
                </div>
                <div class="contact-info-footer">
                    <i class="fas fa-envelope"></i>
                    <p>info@klinikpratama.com</p>
                </div>
                <div class="contact-info-footer">
                    <i class="fas fa-clock"></i>
                    <p>Senin-Minggu: 07:00 - 21:00</p>
                </div>
            </div>
        </div>
        
        <div class="copyright">
            &copy; 2023 Klinik Pratama. Hak Cipta Dilindungi.
        </div>
    </footer>

    <script>
        // Animasi untuk card
        const cards = document.querySelectorAll('.service-card, .faq-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-10px)';
                card.style.boxShadow = '0 12px 25px rgba(0, 0, 0, 0.15)';
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0)';
                card.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.08)';
            });
        });
        
        // Animasi untuk tombol petunjuk arah
        const directionBtn = document.querySelector('.directions-btn');
        directionBtn.addEventListener('mouseenter', () => {
            directionBtn.style.transform = 'translateY(-3px)';
        });
        
        directionBtn.addEventListener('mouseleave', () => {
            directionBtn.style.transform = 'translateY(0)';
        });
    </script>
</body>
</html>
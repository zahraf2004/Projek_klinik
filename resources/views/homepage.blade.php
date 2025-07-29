<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Klinik Pratama</title>
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
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(26, 115, 232, 0.9), rgba(13, 71, 161, 0.8)), url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
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
        
        /* Section Styles */
        .section {
            padding: 60px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            color: var(--primary-dark);
            position: relative;
        }
        
        .section-title h2 {
            font-size: 36px;
            display: inline-block;
            padding-bottom: 15px;
        }
        
        .section-title h2:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--accent);
        }
        
        /* About Section */
        .about-content {
            display: flex;
            gap: 40px;
            align-items: center;
            margin-bottom: 60px;
        }
        
        .about-text {
            flex: 1;
        }
        
        .about-text h3 {
            font-size: 28px;
            color: var(--primary-dark);
            margin-bottom: 20px;
        }
        
        .about-text p {
            margin-bottom: 20px;
            font-size: 17px;
            line-height: 1.8;
        }
        
        .about-image {
            flex: 1;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
        }
        
        .about-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s;
        }
        
        .about-image img:hover {
            transform: scale(1.05);
        }
        
        /* Stats Section */
        .stats {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 70px 0;
            margin: 60px 0;
        }
        
        .stats-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 30px;
            text-align: center;
        }
        
        .stat-item {
            min-width: 200px;
        }
        
        .stat-number {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .stat-label {
            font-size: 20px;
            opacity: 0.9;
        }
        
        /* Vision Mission Section */
        .vm-container {
            display: flex;
            gap: 40px;
            margin-bottom: 60px;
        }
        
        .vision, .mission {
            flex: 1;
            background: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s;
        }
        
        .vision:hover, .mission:hover {
            transform: translateY(-10px);
        }
        
        .vision {
            border-top: 5px solid var(--accent);
        }
        
        .mission {
            border-top: 5px solid var(--primary);
        }
        
        .vm-title {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .vm-title i {
            font-size: 32px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .vision .vm-title i {
            background-color: rgba(52, 168, 83, 0.1);
            color: var(--accent);
        }
        
        .mission .vm-title i {
            background-color: rgba(26, 115, 232, 0.1);
            color: var(--primary);
        }
        
        .vm-title h3 {
            font-size: 28px;
            color: var(--text);
        }
        
        .vm-content p {
            margin-bottom: 20px;
            font-size: 17px;
            line-height: 1.8;
        }
        
        .vm-list {
            list-style: none;
            margin-top: 20px;
        }
        
        .vm-list li {
            padding: 12px 0;
            padding-left: 40px;
            position: relative;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .vm-list li:last-child {
            border-bottom: none;
        }
        
        .vm-list li:before {
            position: absolute;
            left: 0;
            top: 12px;
            width: 26px;
            height: 26px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            font-family: "Font Awesome 5 Free";
        }
        
        .vision .vm-list li:before {
            content: "\f00c";
            background-color: rgba(52, 168, 83, 0.1);
            color: var(--accent);
        }
        
        .mission .vm-list li:before {
            content: "\f105";
            background-color: rgba(26, 115, 232, 0.1);
            color: var(--primary);
        }
        
        /* Team Section */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }
        
        .team-member {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s;
            text-align: center;
        }
        
        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.15);
        }
        
        .member-image {
            height: 280px;
            overflow: hidden;
        }
        
        .member-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .team-member:hover .member-image img {
            transform: scale(1.1);
        }
        
        .member-info {
            padding: 25px 20px;
        }
        
        .member-name {
            font-size: 22px;
            color: var(--primary-dark);
            margin-bottom: 5px;
        }
        
        .member-position {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .member-description {
            color: var(--text-light);
            margin-bottom: 20px;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        
        .social-links a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background-color: var(--primary);
            color: white;
            transform: translateY(-3px);
        }
        
        
        /* Responsive */
        @media (max-width: 900px) {
            .about-content,
            .vm-container {
                flex-direction: column;
            }
            
            .hero {
                padding: 70px 20px;
            }
            
            .hero h1 {
                font-size: 36px;
            }
        }
        
        @media (max-width: 768px) {
            
            .stats-container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Tentang Klinik Pratama</h1>
            <p>Berdedikasi untuk memberikan pelayanan kesehatan terbaik dengan tim profesional dan fasilitas modern</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="section">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h3>Sejarah Kami</h3>
                    <p>Klinik Pratama didirikan pada tahun 2005 dengan tujuan memberikan akses pelayanan kesehatan berkualitas tinggi kepada masyarakat. Bermula dari sebuah klinik kecil dengan 2 dokter, kami telah berkembang menjadi jaringan kesehatan terpercaya dengan 15 cabang di seluruh Indonesia.</p>
                    <p>Selama lebih dari 18 tahun, kami telah melayani jutaan pasien dengan komitmen untuk memberikan perawatan yang holistik, berbasis bukti, dan berfokus pada pasien. Kami percaya bahwa setiap individu berhak mendapatkan pelayanan kesehatan terbaik tanpa memandang latar belakang sosial atau ekonomi.</p>
                    <p>Dengan dukungan teknologi terkini dan tim medis profesional, Klinik Pratama terus berinovasi dalam memberikan solusi kesehatan yang efektif dan terjangkau bagi seluruh masyarakat Indonesia.</p>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Klinik Pratama">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number">18+</div>
                    <div class="stat-label">Tahun Pengalaman</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">15</div>
                    <div class="stat-label">Cabang Klinik</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">200+</div>
                    <div class="stat-label">Tenaga Medis</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">1.5juta+</div>
                    <div class="stat-label">Pasien Terlayani</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Visi & Misi Kami</h2>
            </div>
            
            <div class="vm-container">
                <div class="vision">
                    <div class="vm-title">
                        <i class="fas fa-eye"></i>
                        <h3>Visi</h3>
                    </div>
                    <div class="vm-content">
                        <p>Menjadi penyedia layanan kesehatan terdepan yang diakui secara nasional untuk keunggulan klinis, inovasi, dan perawatan pasien yang berpusat pada manusia.</p>
                        
                        <ul class="vm-list">
                            <li>Memimpin transformasi layanan kesehatan di Indonesia</li>
                            <li>Menjadi rujukan utama untuk perawatan kesehatan berkualitas tinggi</li>
                            <li>Mengintegrasikan teknologi terkini dalam pelayanan kesehatan</li>
                            <li>Membangun ekosistem kesehatan yang berkelanjutan</li>
                        </ul>
                    </div>
                </div>
                
                <div class="mission">
                    <div class="vm-title">
                        <i class="fas fa-bullseye"></i>
                        <h3>Misi</h3>
                    </div>
                    <div class="vm-content">
                        <p>Memberikan pelayanan kesehatan yang komprehensif, terjangkau, dan berkualitas tinggi melalui:</p>
                        
                        <ul class="vm-list">
                            <li>Tim medis profesional yang berdedikasi tinggi</li>
                            <li>Fasilitas modern dan teknologi terkini</li>
                            <li>Pendekatan holistik dalam perawatan pasien</li>
                            <li>Program pencegahan dan edukasi kesehatan masyarakat</li>
                            <li>Kolaborasi dengan institusi kesehatan terkemuka</li>
                            <li>Layanan yang ramah dan mudah diakses oleh semua kalangan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section" style="background-color: var(--secondary);">
        <div class="container">
            <div class="section-title">
                <h2>Tim Kepemimpinan</h2>
            </div>
            
            <div class="team-grid">
                <!-- Team Member 1 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Dr. Budi Santoso">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Dr. Budi Santoso</h3>
                        <div class="member-position">Direktur Utama</div>
                        <p class="member-description">Dokter spesialis penyakit dalam dengan pengalaman 25 tahun di bidang kesehatan.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Dr. Siti Rahayu">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Dr. Siti Rahayu</h3>
                        <div class="member-position">Direktur Medis</div>
                        <p class="member-description">Dokter spesialis anak dengan fokus pada pengembangan layanan kesehatan anak.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Dr. Agus Wijaya">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Dr. Agus Wijaya</h3>
                        <div class="member-position">Kepala Bidang Penelitian</div>
                        <p class="member-description">Dokter spesialis bedah dengan minat penelitian di bidang teknologi kesehatan.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        // Animasi saat scroll
        document.addEventListener('DOMContentLoaded', function() {
            const animateOnScroll = function() {
                const elements = document.querySelectorAll('.about-image, .vision, .mission, .team-member');
                
                elements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.3;
                    
                    if(elementPosition < screenPosition) {
                        element.style.opacity = "1";
                        element.style.transform = "translateY(0)";
                    }
                });
            };
            
            // Set initial state
            const animatedElements = document.querySelectorAll('.about-image, .vision, .mission, .team-member');
            animatedElements.forEach(el => {
                el.style.opacity = "0";
                el.style.transform = "translateY(30px)";
                el.style.transition = "opacity 0.8s ease, transform 0.8s ease";
            });
            
            window.addEventListener('scroll', animateOnScroll);
            // Trigger once on load
            animateOnScroll();
        });
    </script>
</body>
</html>
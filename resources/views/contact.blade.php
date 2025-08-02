@extends('layout/index2')
@section('content2')
<!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Hubungi Kami</h1>
            <p>Tim Klinik Pratama siap membantu Anda. Kami senang mendengar dari Anda</p>
        </div>
    </section>

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
@endsection
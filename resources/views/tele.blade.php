<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Janji Temu - Klinik Pratama Dokter Yanti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4895ef;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #4cc9f0;
            --danger: #e63946;
            --warning: #ff9e00;
            --gray: #6c757d;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fb 0%, #e8ecff 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            min-height: 100vh;
        }
        
        .header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 30px 0;
            margin-bottom: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .clinic-name {
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .clinic-name i {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
        }
        
        .page-title {
            font-weight: 600;
            font-size: 2rem;
            margin-bottom: 30px;
            color: var(--dark);
            position: relative;
            padding-bottom: 15px;
        }
        
        .page-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 70px;
            height: 4px;
            background: var(--accent);
            border-radius: 2px;
        }
        
        .appointment-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
            overflow: hidden;
            transition: all 0.3s ease;
            border-left: 4px solid var(--primary);
        }
        
        .appointment-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(67, 97, 238, 0.15);
        }
        
        .card-header {
            background: rgba(67, 97, 238, 0.05);
            padding: 20px;
            border-bottom: 1px solid #eef2f7;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .patient-name {
            font-weight: 700;
            font-size: 1.3rem;
            color: var(--primary);
            margin: 0;
        }
        
        .appointment-date {
            background: rgba(72, 149, 239, 0.1);
            color: var(--primary);
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        .card-body {
            padding: 20px;
        }
        
        .info-item {
            display: flex;
            margin-bottom: 15px;
        }
        
        .info-label {
            font-weight: 600;
            color: var(--dark);
            min-width: 140px;
        }
        
        .info-value {
            color: var(--gray);
        }
        
        .status-badge {
            padding: 6px 15px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
        }
        
        .status-processing {
            background: rgba(255, 158, 0, 0.1);
            color: var(--warning);
        }
        
        .status-completed {
            background: rgba(76, 201, 240, 0.1);
            color: var(--success);
        }
        
        .status-canceled {
            background: rgba(230, 57, 70, 0.1);
            color: var(--danger);
        }
        
        .card-footer {
            background: rgba(67, 97, 238, 0.03);
            padding: 15px 20px;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }
        
        .btn-action {
            padding: 8px 20px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-detail {
            background: var(--primary);
            color: white;
            border: none;
        }
        
        .btn-detail:hover {
            background: var(--secondary);
        }
        
        .btn-cancel {
            background: white;
            color: var(--danger);
            border: 1px solid #e2e8f0;
        }
        
        .btn-cancel:hover {
            background: rgba(230, 57, 70, 0.05);
            border-color: var(--danger);
        }
        
        .clinic-info {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            padding: 30px;
            margin-top: 40px;
        }
        
        .section-title {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .section-title i {
            background: rgba(67, 97, 238, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
        }
        
        .service-list, .link-list, .contact-list {
            list-style: none;
            padding: 0;
        }
        
        .service-list li, .link-list li, .contact-list li {
            margin-bottom: 12px;
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }
        
        .service-list i, .link-list i, .contact-list i {
            color: var(--accent);
            margin-top: 3px;
        }
        
        .contact-item {
            margin-bottom: 15px;
        }
        
        .contact-label {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 5px;
        }
        
        .contact-value {
            color: var(--gray);
        }
        
        .footer {
            background: var(--dark);
            color: white;
            padding: 30px 0;
            margin-top: 50px;
            font-size: 0.9rem;
        }
        
        .empty-state {
            text-align: center;
            padding: 50px 20px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }
        
        .empty-state i {
            font-size: 4rem;
            color: #dee2e6;
            margin-bottom: 20px;
        }
        
        .empty-state h3 {
            color: var(--gray);
            margin-bottom: 15px;
        }
        
        .btn-new-appointment {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
        }
        
        .btn-new-appointment:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(67, 97, 238, 0.3);
        }
        
        @media (max-width: 768px) {
            .card-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            
            .card-footer {
                flex-direction: column;
            }
            
            .btn-action {
                width: 100%;
                justify-content: center;
            }
            
            .info-item {
                flex-direction: column;
                gap: 5px;
            }
            
            .info-label {
                min-width: auto;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="container">
            <div class="clinic-name">
                <i class="fas fa-clinic-medical"></i>
                <span>Klinik Pratama Dokter Yanti</span>
            </div>
        </div>
    </div>
    
    <div class="container">
        <!-- Page Title -->
        <h1 class="page-title">Riwayat Janji Temu</h1>
        
        <!-- Appointment List -->
        <div class="appointment-list">
            <div class="appointment-card">
                <div class="card-header">
                    <h3 class="patient-name">Tücs Luflani</h3>
                    <div class="appointment-date">
                        <i class="fas fa-calendar-alt me-2"></i>10 Maret 2025
                    </div>
                </div>
                <div class="card-body">
                    <div class="info-item">
                        <span class="info-label">Waktu:</span>
                        <span class="info-value">09:00 - 10:00 WIB</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Dokter:</span>
                        <span class="info-value">dr. Yanti Susanti, Sp.A</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Keluhan:</span>
                        <span class="info-value">Demam tinggi selama 3 hari, disertai batuk dan pilek</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Status:</span>
                        <span class="status-badge status-processing">
                            <i class="fas fa-sync-alt me-2"></i>Proses
                        </span>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn-action btn-detail">
                        <i class="fas fa-eye"></i> Detail Janji
                    </button>
                    <button class="btn-action btn-cancel">
                        <i class="fas fa-times"></i> Batalkan
                    </button>
                </div>
            </div>
            
            <!-- Completed Appointment -->
            <div class="appointment-card">
                <div class="card-header">
                    <h3 class="patient-name">Ahmad Fauzi</h3>
                    <div class="appointment-date">
                        <i class="fas fa-calendar-alt me-2"></i>28 Februari 2025
                    </div>
                </div>
                <div class="card-body">
                    <div class="info-item">
                        <span class="info-label">Waktu:</span>
                        <span class="info-value">14:00 - 15:00 WIB</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Dokter:</span>
                        <span class="info-value">dr. Budi Santoso, Sp.PD</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Keluhan:</span>
                        <span class="info-value">Kontrol tekanan darah dan konsultasi hasil laboratorium</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Status:</span>
                        <span class="status-badge status-completed">
                            <i class="fas fa-check-circle me-2"></i>Selesai
                        </span>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn-action btn-detail">
                        <i class="fas fa-eye"></i> Detail Janji
                    </button>
                    <button class="btn-action btn-detail">
                        <i class="fas fa-file-medical"></i> Lihat Resep
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Empty State (if no appointments) -->
        <!--
        <div class="empty-state">
            <i class="fas fa-calendar-times"></i>
            <h3>Belum Ada Riwayat Janji Temu</h3>
            <p>Anda belum memiliki janji temu sebelumnya. Silahkan buat janji temu baru.</p>
            <button class="btn-new-appointment">
                <i class="fas fa-plus"></i> Buat Janji Temu Baru
            </button>
        </div>
        -->
        
        <!-- Clinic Information -->
        <div class="clinic-info">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h4 class="section-title"><i class="fas fa-info-circle"></i> Tentang Kami</h4>
                    <p>Klinik Pratama Dokter Yanti menyediakan layanan kesehatan profesional dengan tim dokter berpengalaman dan fasilitas modern untuk memberikan perawatan terbaik bagi pasien.</p>
                </div>
                
                <div class="col-md-3 mb-4">
                    <h4 class="section-title"><i class="fas fa-concierge-bell"></i> Layanan Kami</h4>
                    <ul class="service-list">
                        <li><i class="fas fa-check-circle"></i> Konsultasi Umum</li>
                        <li><i class="fas fa-check-circle"></i> Pemeriksaan Kesehatan</li>
                        <li><i class="fas fa-check-circle"></i> Imunisasi</li>
                        <li><i class="fas fa-check-circle"></i> Perawatan Luka</li>
                        <li><i class="fas fa-check-circle"></i> Pemeriksaan Laboratorium</li>
                    </ul>
                </div>
                
                <div class="col-md-3 mb-4">
                    <h4 class="section-title"><i class="fas fa-link"></i> Link Cepat</h4>
                    <ul class="link-list">
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Buat Janji Temu</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Dokter Kami</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Layanan</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Kontak</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">FAQ</a></li>
                    </ul>
                </div>
                
                <div class="col-md-3 mb-4">
                    <h4 class="section-title"><i class="fas fa-address-book"></i> Kontak Kami</h4>
                    <div class="contact-list">
                        <div class="contact-item">
                            <div class="contact-label">Alamat</div>
                            <div class="contact-value">
                                Jl. Semen Raya No. 96, Kel. Parhasonan, Kec. Amaç, Kota Sistem
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-label">Telepon</div>
                            <div class="contact-value">
                                (021) 2347-5679
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-label">Email</div>
                            <div class="contact-value">
                                info@klinikdokteryanti.com
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-label">Jam Operasional</div>
                            <div class="contact-value">
                                Senin-Jumat: 08.00-20.00 WIB<br>
                                Sabtu: 08.00-15.00 WIB
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>© 2025 Klinik Pratama Dokter Yanti. All rights reserved.</p>
                    <p>Memberikan pelayanan kesehatan terbaik dengan profesionalisme dan kehangatan.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="social-links">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Contoh fungsi untuk membatalkan janji
        document.querySelectorAll('.btn-cancel').forEach(button => {
            button.addEventListener('click', function() {
                const appointmentCard = this.closest('.appointment-card');
                const patientName = appointmentCard.querySelector('.patient-name').textContent;
                
                if(confirm(`Apakah Anda yakin ingin membatalkan janji temu untuk ${patientName}?`)) {
                    appointmentCard.querySelector('.status-badge').className = 'status-badge status-canceled';
                    appointmentCard.querySelector('.status-badge').innerHTML = '<i class="fas fa-ban me-2"></i>Dibatalkan';
                    
                    // Sembunyikan tombol aksi
                    this.closest('.card-footer').innerHTML = `
                        <div class="alert alert-danger mb-0">
                            Janji temu ini telah dibatalkan
                        </div>
                    `;
                    
                    alert('Janji temu berhasil dibatalkan');
                }
            });
        });
        
        // Fungsi untuk membuat janji baru
        document.querySelector('.btn-new-appointment')?.addEventListener('click', function() {
            alert('Mengarahkan ke halaman pembuatan janji temu baru');
            // window.location.href = 'buat-janji.html';
        });
    </script>
</body>
</html>
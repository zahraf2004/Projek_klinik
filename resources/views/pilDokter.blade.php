@extends('layout/index2')
@section('content2')
<div class="telemedicine">
        <div class="main-content">
            <!-- Kolom Kiri: Penjelasan Konsultasi -->
            <div class="left-column">
                <section class="section-card">
                    <h2 class="sectiontitle"><i class="fas fa-laptop-medical"></i> Telemedicine</h2>
                    
                    <div class="telemedicine-content">
                        <p>Telemedicine adalah layanan konsultasi kesehatan jarak jauh menggunakan teknologi komunikasi. Dengan telemedicine, Anda dapat berkonsultasi dengan dokter tanpa harus datang langsung ke klinik.</p>
                        
                        <div class="telemedicine-image">
                            <i class="fa-solid fa-comments" style="color: #4a83d3;"></i>
                        </div>
                        
                        <h3 style="margin: 5px 0; color: #0d47a1; font-weight:bold; font-size:20px">Manfaat Telemedicine:</h3>
                        <ul class="benefits-list">
                            <li>Konsultasi dirumah tanpa antri</li>
                            <li>Menghemat waktu dan biaya transportasi</li>
                            <li>Akses ke dokter lebih mudah</li>
                            <li>Efisiensi bagi Penyedia Layanan Kesehatan</li>
                            <li>Pemantauan Kesehatan Berkelanjutan</li>
                        </ul>
                    </div>
                </section>
                <!--  
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
                </section>-->
            </div>
            
            <!-- Kolom Kanan: Daftar Dokter -->
            <div class="right-column">
                <div class="doctors-section">
                    <div class="search-container">
                        <input type="text" placeholder="Cari dokter berdasarkan nama atau spesialisasi...">
                        <button><i class="fas fa-search"></i> Cari</button>
                    </div>
                    
                    <div class="section-card">
                        <h2 class="sectiontitle"><i class="fas fa-user-md"></i> Dokter </h2>
                        
                        <div class="doctors-grid">
                            <!-- Doctor 1 -->
                             @foreach($dokters as $dokter)
                            <div class="doctor-card">
                                <div class="doctor-header">
                                    <div class="doctor-avatar-sm">RS</div>
                                    <div class="doctor-info-sm">
                                        <h3 class="doctor-name">{{$dokter->nama_dokter}}</h3>
                                        <p class="doctor-specialty">{{$dokter->spesialis}}</p>
                                    </div>
                                </div>
                                <div class="doctor-info-card">
                                    <div class="info-item">
                                        <div class="info-icon"><i class="fas fa-star"></i></div>
                                        <div class="info-text">
                                            <h4>Alumni</h4>
                                            <p>{{$dokter->alumnus}}</p>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-icon"><i class="fas fa-clock"></i></div>
                                        <div class="info-text">
                                            <h4>Tanggal Lahir</h4>
                                            <p>{{$dokter->tanggal_lahir}}</p>
                                        </div>
                                    </div>
                                    <div class="action-buttons">
                                        <a href="#" class="btnD btn-primary">Chat Sekarang</a>
                                        <!--  <a href="#" class="btnD btn-outline">Profil</a>-->
                                    </div>
                                </div>
                            </div>@endforeach
                            
                            <!-- Pagination -->
                            <div class="pagination">
                                {{ $dokters->links() }}
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
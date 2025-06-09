@extends('layout/index2')
@section('content2')

     <!-- Content -->
    <div class="container">
        <div class="header">
            <h1>Layanan Klinik</h1>
            <p>Kami menyediakan berbagai layanan kesehatan terbaik dengan tim profesional dan fasilitas modern untuk kebutuhan kesehatan Anda</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="card-img">
                    <img src="{{asset ('img/foto_klinik.jpg')}}" alt="Chat dengan Dokter">
                </div>
                <div class="card-content">
                    <h3>Chat dengan Dokter</h3>
                    <p>Layanan konsultasi online dan perawatan dengan privasi terjamin. Dapatkan saran medis dari dokter berpengalaman kapan saja.</p>
                    <a href="#" class="btn">Lihat Layanan</a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="card-img">
                    <img src="{{asset ('img/stetos.jpg')}}" alt="Janji Temu">
                </div>
                <div class="card-content">
                    <h3>Janji Temu</h3>
                    <p>Atur janji temu untuk melakukan pemeriksaan dengan dokter secara langsung. Pilih dokter, tanggal, dan jam yang sesuai dengan kebutuhan Anda.</p>
                    <a href="#" class="btn">Lihat Layanan</a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="card-img">
                    <img src="{{asset ('img/obat2.jpg')}}" alt="Obat & Vitamin">
                </div>
                <div class="card-content">
                    <h3>Obat & Vitamin</h3>
                    <p>Suplemen nutrisi untuk mendukung kesehatan dan kebugaran sehari-hari. Berbagai informasi obat resep dan non-resep dengan kualitas terjamin.</p>
                    <a href="#" class="btn">Lihat Informasi Produk</a>
                </div>
            </div>
        </div>

        <div class="dashObat">
            <header>
                <h1>Obat & Vitamin</h1>
            </header>
            <div class="categories">
                <button class="category-btn">Vitamin & Suplemen</button>
                <button class="category-btn">Kecantikan & Perawatan Diri</button>
                <button class="category-btn">Kesehatan Seksual</button>
                <button class="category-btn">Lihat Semua Kategori Obat</button>
            </div>
        
            <div class="divider"></div>
            <div class="products-grid">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="{{ asset('img/VitC.jpeg') }}" alt="Vitamin C">
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
                        <img src="{{asset ('img/Salbutamol.jpeg') }}" alt="Obat Asma">
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
                        <img src="{{asset ('img/VitD.jpeg')}}" alt="Vitamin D">
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
            <div class="view-all">
                        <a href="#" class="view-all-btn">Lihat Semua Obat Vitamin & Suplemen</a>
            </div>
        </div>
    </div>

@endsection
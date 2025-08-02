@extends('layout/index2')
@section('content2')
    <section class="hero">
        <div class="container3">
            <h1>Pelayanan Klinik Pratama Dokter Yanti</h1>
            <p>Berdedikasi untuk memberikan pelayanan kesehatan terjangkau & mengedepankan kenyamanan </p>
        </div>
    </section>
    <div class="section_title">
        <h2>Layanan Klinik Pratama Dokter Yanti</h2>
    </div>
    <div class="container">
        <div class="services-grid">
            <div class="service-card">
                <div class="card-img">
                    <img src="{{asset ('img/Layanan.jpg')}}" alt="Chat dengan Dokter">
                </div>
                <div class="card-content">
                    <h3>Layanan Kesehatan</h3>
                    <p>Pelayanan kesehatan klinik mencakup berbagai jenis layanan medis, mulai dari pemeriksaan umum, pengobatan penyakit ringan, hingga tindakan medis sederhana.</p>
                </div>
            </div>
                
            <div class="service-card">
                <div class="card-img">
                    <img src="{{asset ('img/labor.jpg')}}" alt="Janji Temu">
                </div>
                <div class="card-content">
                    <h3>Laboratorium & Covid test</h3>
                    <p>Deteksi kesehatan anda mulai dari tes golongan darah, gula darah, asam urat, kadar kolesterol serta melayani tes swab untuk Covid-19 dengan fasilitas Laboratorium terpercaya</p>
                </div>
            </div>
                
            <div class="service-card">
                <div class="card-img">
                    <img src="{{asset ('img/obat2.jpg')}}" alt="Obat & Vitamin">
                </div>
                <div class="card-content">
                    <h3>Obat & Vitamin</h3>
                    <p>Tidak perlu jauh menebus resep dan alat kesehatan, kami siap membantu anda dengan harga yang terjangkau.</p>
                </div>
            </div>

            <div class="service-card">
                <div class="card-img">
                    <img src="{{asset ('img/foto_klinik.jpg')}}" alt="Obat & Vitamin">
                </div>
                <div class="card-content">
                    <h3>Khitan</h3>
                    <p>Dapatkan pelayanan khitan yang aman bersama tenaga ahli yang terpercaya dibidangnya</p>
                </div>
            </div>

            <div class="service-card">
                <div class="card-img">
                    <img src="{{asset ('img/luka.jpeg')}}" alt="Obat & Vitamin">
                </div>
                <div class="card-content">
                    <h3>Perawatan Luka</h3>
                    <p>Saat ini anda tidak perlu khawatir dengan perawatan luka, tenaga kesehatan kami yang terpercaya siap membantu anda.</p>
                </div>
            </div>

            <div class="service-card">
                <div class="card-img">
                    <img src="{{asset ('img/vaksin.jpg')}}" alt="Obat & Vitamin">
                </div>
                <div class="card-content">
                    <h3>Vaksin & Immune Booster</h3>
                    <p>Klinik menyediakan pelayanan pemberian vaksin baik dewasa maupun anak-anak. infus booster merupakan pemberian terapi vitamin lewat infus</p>
                </div>
            </div>
        </div>
    </div><br>
@endsection
@extends ('layout/index2')
@section ('content2')
    <section class="hero">
        <div class="container3">
            <h1>Tentang Klinik Pratama Dokter Yanti</h1>
            <p>Berdedikasi untuk memberikan pelayanan kesehatan terjangkau & mengedepankan kenyamanan </p>
        </div>
    </section>
    <!--aboutsection-->
    <section class="section">
        <div class="container3">
            <div class="about-content">
                <div class="about_text">
                    <h3>Tentang Kami</h3>
                    <p>Klinik Pratama Dokter Yanti memiliki 5 cabang di provinsi jambi dengan klinik utamanya berada di kecamatan pal merah kota Jambi. Klinik memiliki motto
                        dengan mengedepankan pelayanan Murah, Nyaman & Sehat. 
                        Dengan mengusung nilai-nilai berupa Kesantunan, Empati, Kehandalan, Adil, dan Teladan, 
                        Klinik Pratama Dokter Yanti bervisi dapat menjadi klinik pratama terbaik dengan pelayanan berkualitas, profesional dan berorientasi pasien.</p>
                    <p>Dengan dukungan teknologi terkini dan tim medis profesional, Klinik Pratama terus berinovasi dalam memberikan solusi kesehatan yang efektif dan terjangkau bagi seluruh masyarakat Indonesia.</p>
                    <p>Kami percaya bahwa setiap individu berhak mendapatkan pelayanan kesehatan terbaik tanpa memandang latar belakang sosial atau ekonomi.</p>
                </div>
                <div class="about-image">
                    <img src="{{asset('img/foto_klinik.jpg')}}" alt="foto klinik">
                </div>
            </div>
        </div>
    </section>

    <section class="stats">
        <div class="container3">
            <div class="stat-item">
                <div class="stat-number">Motto</div>
                <div class="stat-label">Murah, Nyaman, Sehat</div>
            </div>
        </div>
    </section>

    <!--visi dan misi-->
    <section class="section">
        <div class="container3">
            <div class="section_title">
                <h2>Visi, Misi, & Tata Nilai</h2>
            </div>

            <div class="vm-container">
                <div class="vision">
                    <div class="vm-title">
                        <i class="fas fa-eye"></i>
                        <h3>Visi & Misi</h3>
                    </div>
                    <div class="vm-content">
                        <p>Menjadi Klinik Pratama Terbaik Dengan Pelayanan Berkualitas, Profesionalitas, dan Berorientasi Pasien</p>
                        
                        <ul class="vm-list">
                            <li>Memberikan layanan kesehatan prima dengan pemanfaatan informasi dan teknologi medis</li>
                            <li>Mengutamakan kepercayaan dan kepuasan pasien dengan memberikan pelayanan kesehatan prima</li>
                            <li>Melaksanakan pekerjaan dalam tim yang profesional, dinamis, inovatif, berdedikasi tinggi dan terpercaya </li>
                            <li>Mengutamakan kepercayaan dan kepuasan pasien dengan memberikan pelayanan kesehatan yang berkualitas dan profesional</li>
                            <li>Memberikan jasa layanan kesehatan yang terjangkau</li>
                        </ul>
                    </div>
                </div>
                
                <div class="mission">
                    <div class="vm-title">
                        <i class="fas fa-bullseye"></i>
                        <h3>Tata Nilai</h3>
                    </div>
                    <div class="vm-content">
                        <p>Tata nilai klinik ini menekankan pada pelayanan yang sungguh-sungguh dan aman sesuai SPO, serta bekerja sesuai norma dan aturan.</p>
                        
                        <ul class="vm-list">
                            <li>S = SANTUN (Sopan dan Ramah dalam tutur kata dan perilaku)</li>
                            <li>E = EMPATI (Melayani sepenuh hati)</li>
                            <li>H = HANDAL (Bekerja secara Profesional dan Berkompeten)</li>
                            <li>A = ADIL (Pelayanan diberikan tanpa membeda-bedakan dan merata)</li>
                            <li>T = TELADAN (Staff klinik menjadi panutan gerakan hidup sehat masyarakat)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
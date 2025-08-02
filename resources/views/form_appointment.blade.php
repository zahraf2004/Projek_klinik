@extends('layout/index3')
@section('content3')
 <div id="layoutForm">
        <main>
            <div class="container-fluid px-4">
                
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Janji Temu > Buat Janji Temu</li>
                </ol>
                <h2 class="titleJanji">Buat Janji Temu</h2>
            </div>

            <!-- Data FORM -->
            <form  method="POST" action="{{ route('appointment.store') }}">
                @csrf
                <div class="form1">
                    <section id="step-1" class="form-step">
                        <h4 class="card-title"><i class="fas fa-calendar-check"></i> Buat Janji Temu</h4>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section-title">
                                    <i class="fas fa-user"></i>
                                    <span>Informasi Pasien</span>
                                </div>
                                
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Nama Pasien" required />
                                </div>
                                
                                <div class="form-group">
                                    <label>Nomor Handphone</label>
                                    <input type="tel" class="form-control" name="no_hp" placeholder="Nomor Handphone" required />
                                </div>
                                
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat lengkap" required />
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir" required />
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="section-title">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Detail Janji Temu</span>
                                </div>
                                
                                <div class="form-group">
                                    <label>Tanggal Janji Temu</label>
                                    <input type="date" class="form-control" name="tanggal" required />
                                </div>
                                
                                <div class="form-group">
                                    <label>Jam </label>
                                    <input type="time" class="form-control" name="jam" required />
                                </div>
                                
                                <div class="form-group">
                                    <label>Keluhan</label>
                                    <textarea class="form-control" name="keluhan" rows="3" placeholder="Jelaskan keluhan Anda secara rinci"></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="btn-group"><a href="/dashboard">
                            <button type="submit" class="btn-save">
                                <i class="fas fa-calendar-check"></i> Simpan Janji Temu
                            </button></a>
                            <button type="button" class="btn-cancel">
                                <i class="fas fa-times"></i> Batalkan
                            </button>
                            
                        </div>
                    </section>
                </div>
            </form>
        </main>
    </div>
@endsection
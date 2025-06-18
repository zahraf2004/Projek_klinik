@extends('layout/index2')
@section('content2')
<div class="container">
        <!-- Page Title -->
        <h1 class="page-title">Riwayat Janji Temu</h1>
        
        <!-- Appointment List -->
        <div class="appointment-list">
            <div class="appointment-card">
                <div class="cardheader">
                    <h3 class="patient-name">Tias Lufiani</h3>
                    <div class="appointment-date">
                        <i class="fas fa-calendar-alt me-2"></i> 20 Juni 2025
                    </div>
                </div>
                <div class="card-body">
                    <div class="info-item">
                        <span class="info-label">Waktu:</span>
                        <span class="info-value">10.00 WIB</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Keluhan:</span>
                        <span class="info-value">Demam tinggi selama 3 hari, disertai batuk dan pilek</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Status:</span>
                        <span class="status-badge status-processing">
                            <i class="fas fa-sync-alt me-2"></i> Pending
                        </span>
                    </div>
                </div><!--
                <div class="card-footer">
                    <button class="btn-action btn-detail">
                        <i class="fas fa-eye"></i> Detail Janji
                    </button>
                    <button class="btn-action btn-cancel">
                        <i class="fas fa-times"></i> Batalkan
                    </button>
                </div> -->
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
    </div>
@endsection
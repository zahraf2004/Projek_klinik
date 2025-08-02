@extends('layout/index2')
@section('content2')
<div class="container">
        <!-- Page Title -->
        <h1 class="page-title">Riwayat Janji Temu</h1>
        
        <!-- Appointment List -->
        <div class="appointment-list">
    @foreach ($appointments as $app)
        <div class="appointment-card">
            <div class="cardheader">
                <h3 class="patient-name">{{ $app->nama }}</h3>
                <div class="appointment-date">
                    <i class="fas fa-calendar-alt me-2"></i> 
                    {{ \Carbon\Carbon::parse($app->tanggal)->translatedFormat('d F Y') }}
                </div>
            </div>
            <div class="card-body">
                <div class="info-item">
                    <span class="info-label">Waktu:</span>
                    <span class="info-value">{{ \Carbon\Carbon::parse($app->jam)->format('H:i') }} WIB</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Keluhan:</span>
                    <span class="info-value">{{ $app->keluhan }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Status:</span>
                    <span class="status-badge
                        @if($app->status == 'pending') status-processing
                        @elseif($app->status == 'confirmed') status-confirmed
                        @elseif($app->status == 'completed') status-completed
                        @elseif($app->status == 'cancelled') status-cancelled
                        @elseif($app->status == 'rescheduled') status-rescheduled
                        @endif
                    ">
                        <i class="fas fa-sync-alt me-2"></i> {{ ucfirst($app->status) }}
                    </span>
                </div>
            </div>
            <div class="card-footer">
                <a href="/isi-janji-temu">
                    <button class="btn-action btn-detail"> Buat Janji</button>
                </a>
            </div>
        </div>
    @endforeach

    @if ($appointments->isEmpty())
        <p class="text-muted">Belum ada janji temu.</p>
    @endif
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
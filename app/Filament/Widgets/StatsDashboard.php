<?php

namespace App\Filament\Widgets;
use App\Models\Dokter;
use App\Models\Appointment;
use App\Models\Obat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsDashboard extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $countDokter = Dokter::count();
        $countObat = Obat::count();
        $countAppointment = Appointment::count();
        return [
            Stat::make('Jumlah Dokter', value:$countDokter.' Dokter')
                ->description(
                    view('filament.components.stats-link', [
                        'url' => route('filament.admin.resources.data-dokter.index'),
                        'label' => 'Lihat Semua'
                    ])
                )
                ->descriptionIcon('heroicon-m-arrow-long-right')
                ->color('primary'),
                
            Stat::make('Informasi Obat',value:$countObat. ' Data Obat')
                ->description(
                    view('filament.components.stats-link', [
                        'url' => route('filament.admin.resources.data-obat.index'),
                        'label' => 'Lihat Semua'
                    ])
                )
                ->descriptionIcon('heroicon-m-arrow-long-right')
                ->color('primary'),
                
            Stat::make('Jumlah Janji Berobat', value:$countAppointment. ' Jadwal Berobat')
                ->description(
                    view('filament.components.stats-link', [
                        'url' => route('filament.admin.resources.appointments.index'),
                        'label' => 'Lihat Semua'
                    ])
                )
                ->descriptionIcon('heroicon-m-arrow-long-right')
                ->color('primary'),
        ];
    }
}
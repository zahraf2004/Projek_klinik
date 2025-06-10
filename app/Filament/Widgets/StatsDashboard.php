<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsDashboard extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Kelola Dokter', '8 Dokter')
                ->description(
                    view('filament.components.stats-link', [
                        'url' => route('filament.admin.resources.data-dokter.index'),
                        'label' => 'Lihat Semua'
                    ])
                )
                ->descriptionIcon('heroicon-m-arrow-long-right')
                ->color('primary'),
                
            Stat::make('Informasi Obat', '120 Data Obat')
                ->description(
                    view('filament.components.stats-link', [
                        'url' => route('filament.admin.resources.data-obat.index'),
                        'label' => 'Lihat Semua'
                    ])
                )
                ->descriptionIcon('heroicon-m-arrow-long-right')
                ->color('primary'),
                
            Stat::make('Janji Temu', '6 Jadwal Temu')
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
<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Appointment;

class AppointmentTable extends BaseWidget
{
    protected static ?string $heading = 'Informasi Janji Berobat';
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';

    protected function getTableQuery(): Builder
    {
        return Appointment::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('nama')
                ->searchable()
                ->label('Nama')
                ->sortable(),
            TextColumn::make('no_hp')
                ->label('Handphone'),
            TextColumn::make('tanggal_lahir')
                ->label('Tanggal Lahir')
                ->sortable(),
            TextColumn::make('keluhan')
                ->label('Keluhan Pasien'),
            TextColumn::make('tanggal')
                ->label('Tanggal Janji Temu')
                ->sortable(),
            TextColumn::make('jam')
                ->label('Jam')
                ->sortable(),
            TextColumn::make('status')
                ->searchable()
                ->label('Status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'pending' => 'gray',
                    'confirmed' => 'success',
                    'cancelled' => 'danger',
                    'completed' => 'info',
                    'rescheduled' => 'warning',
                    default => 'gray',
                }),
        ];
    }

    // Tambahkan method untuk filter
    protected function getTableFilters(): array
    {
        return [
            SelectFilter::make('status')
                ->label('Filter Status')
                ->options([
                    'pending' => 'Pending',
                    'confirmed' => 'Confirmed',
                    'completed' => 'Completed',
                    'cancelled' => 'Cancelled',
                    'rescheduled' => 'Rescheduled',
                ]),
        ];
    }

    // Untuk menambahkan action (opsional)
    protected function getTableActions(): array
    {
        return [
            Tables\Actions\Action::make('view')
                ->label('Lihat')
                ->url(fn (Appointment $record): string => route('filament.admin.resources.appointments.index', $record)),
        ];
    }
}
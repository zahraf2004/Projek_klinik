<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Obat;

class ObatTable extends BaseWidget
{
    protected static ?string $heading = 'Informasi Obat';
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';

    protected function getTableQuery(): Builder
    {
        return Obat::query();
    }

    protected function getTableColumns(): array
    {
        return [
            ImageColumn::make('gambar_obat')
                ->label('Gambar Obat')
                ->height(50)
                ->width(50)
                ->circular(),

            TextColumn::make('nama_obat')
                ->label('Nama Obat')
                ->searchable()
                ->sortable(),

            TextColumn::make('kategori')
                ->label('Kategori')
                ->searchable(),

            TextColumn::make('jenis_obat')
                ->label('Jenis Obat')
                ->searchable()
                ->color('info'),

            TextColumn::make('deskripsi_obat')
                ->label('Deskripsi')
                ->html()
                ->limit(50)
                ->tooltip(function (TextColumn $column): ?string {
                    return strip_tags($column->getState());
                })
                ->extraAttributes(['class' => 'max-w-[300px] line-clamp-2'])
                ->wrap()
        ];
    }

    // Tambahkan method untuk filter
    protected function getTableFilters(): array
    {
        return [
            SelectFilter::make('jenis_obat')
                ->label('Filter Jenis Obat')
                ->options([
                    'tablet' => 'Tablet',
                    'kapsul' => 'Kapsul',
                    'sirup' => 'Sirup',
                    'salep' => 'Salep',
                    'inhaler' => 'Inhaler',
                    'suntik' => 'Suntik',
                    'oles' => 'Oles',
                    'lainnya' => 'Lainnya',
                ]),
        ];
    }

    // Untuk menambahkan action (opsional)
    protected function getTableActions(): array
    {
        return [
            Tables\Actions\Action::make('view')
                ->label('Lihat')
                ->url(fn (Obat $record): string => route('filament.admin.resources.data-obat.index', $record)),
        ];
    }
}
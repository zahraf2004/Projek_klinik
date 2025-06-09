<?php

namespace App\Filament\Resources\ObatResource\Pages;

use App\Filament\Resources\ObatResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateObat extends CreateRecord
{
    protected static string $resource = ObatResource::class;
    protected function getFormActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Buat') // Ubah label tombol utama
                ->submit('create')
                ->icon('heroicon-o-check')
                ->size('md'), // Ukuran sedang
                
            $this->getCancelFormAction()
                ->label('Batalkan') // Ubah teks
                ->color('gray') // Ubah warna
                ->icon('heroicon-o-x-mark'), // Tambah icon
        ];
    }

    protected function hasCreateAnotherAction(): bool
    {
        return false; // Nonaktifkan tombol "Buat & buat lainnya"
    }
}

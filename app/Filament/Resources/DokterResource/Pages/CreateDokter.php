<?php

namespace App\Filament\Resources\DokterResource\Pages;

use App\Filament\Resources\DokterResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDokter extends CreateRecord
{
    protected static string $resource = DokterResource::class;

    // Tambahkan method berikut untuk menghilangkan tombol "Buat & buat lainnya"
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
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ObatResource\Pages;
use App\Filament\Resources\ObatResource\RelationManagers;
use App\Models\Obat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;

class ObatResource extends Resource
{
    protected static ?string $model = Obat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_obat'),
                FileUpload::make('gambar_obat')
                    ->image()
                    ->imageEditor(),
                TextInput::make('kategori'),
                Select::make('jenis_obat')
                ->options([
                    'tablet' => 'Tablet',
                    'kapsul' => 'Kapsul',
                    'sirup' => 'Sirup',
                    'oles' => 'Oles',
                    'spray' => 'Spray',
                    'lainnya' => 'Lainnya',
                ]),
                Textarea::make('deskripsi_obat')
                    ->label('Deskripsi Obat')
                    ->rows(5) // Jumlah baris yang ditampilkan
                    ->cols(50) // Lebar kolom (opsional)
                    ->maxLength(1000) // Batas maksimal karakter
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListObats::route('/'),
            'create' => Pages\CreateObat::route('/create'),
            'edit' => Pages\EditObat::route('/{record}/edit'),
        ];
    }
}

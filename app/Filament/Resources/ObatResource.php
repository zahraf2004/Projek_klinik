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
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class ObatResource extends Resource
{
    protected static ?string $model = Obat::class;

    protected static ?string $navigationGroup = 'Data Master';

    protected static ?string $navigationIcon = 'heroicon-o-archive-box';

    protected static ?string $navigationLabel = 'Kelola Obat';

    protected static ?string $slug = 'data-obat';

    protected static ?string $label = 'Data Informasi Obat';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_obat')
                    ->required(),
                FileUpload::make('gambar_obat')
                    ->required()
                    ->image()
                    ->imageEditor(),
                TextInput::make('kategori')
                    ->required(),
                Select::make('jenis_obat')
                ->required()
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
                Textarea::make('deskripsi_obat')
                    ->label('Deskripsi Obat')
                    ->required()
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
                ImageColumn::make('gambar_obat')
                    ->size(100),
                TextColumn::make('nama_obat')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('kategori')
                    ->searchable(),
                TextColumn::make('jenis_obat')
                    ->searchable()
                    ->color('info'),
                TextColumn::make('deskripsi_obat')
                    ->label('Deskripsi')
                    ->html()
                    ->limit(50)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        return strip_tags($state); // Hapus tag HTML untuk tooltip
                    })
                    ->extraAttributes(['class' => 'max-w-[300px] line-clamp-2'])
                    ->wrap()
                    
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('jenis_obat')
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
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
        ];
    }
}

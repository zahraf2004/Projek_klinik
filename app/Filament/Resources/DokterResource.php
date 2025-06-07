<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokterResource\Pages;
use App\Filament\Resources\DokterResource\RelationManagers;
use App\Models\Dokter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class DokterResource extends Resource
{
    protected static ?string $model = Dokter::class;

    protected static ?string $navigationGroup = 'Data Master';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Kelola Dokter';

    protected static ?string $slug = 'data-dokter';

    protected static ?string $label = 'Kelola Dokter';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_dokter')
                    ->required(),
                TextInput::make('email')
                    ->required(),
                DatePicker::make('tanggal_lahir')
                    ->required(),
                TextInput::make('alumnus')
                    ->required(),
                TextInput::make('nomor_hp')
                    ->required(),
                Select::make('spesialis')
                    ->required()
                    ->options([
                        'umum' => 'Umum',
                        'anak' => 'Anak',
                        'mata' => 'Mata',
                        'kandungan' => 'Kandungan',
                        'kulit' => 'Kulit',
                        'gigi' => 'Gigi',
                        'lainnya' => 'Lainnya',
                    ]),
                TextInput::make('praktik')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_dokter')
                    ->searchable()
                    ->label('Nama')
                    ->sortable(),
                TextColumn::make('email'),
                TextColumn::make('tanggal_lahir')
                    ->sortable(),
                TextColumn::make('alumnus')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('nomor_hp'),
                TextColumn::make('spesialis')
                    ->searchable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'umum' => 'info',
                        'anak' => 'success',
                        'mata' => 'warning',
                        'kandungan' => 'pink',
                        'kulit' => 'gray',
                        'gigi' => 'purple',
                        default => 'gray',
                    }),
                TextColumn::make('praktik'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('spesialis')
                    ->options([
                        'umum' => 'Umum',
                        'anak' => 'Anak',
                        'mata' => 'Mata',
                        'kandungan' => 'Kandungan',
                        'kulit' => 'Kulit',
                        'gigi' => 'Gigi',
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
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make()
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
            'index' => Pages\ListDokters::route('/'),
            'create' => Pages\CreateDokter::route('/create'),
            'edit' => Pages\EditDokter::route('/{record}/edit'),
        ];
    }
}
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppointmentResource\Pages;
use App\Filament\Resources\AppointmentResource\RelationManagers;
use App\Models\Appointment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Get;

class AppointmentResource extends Resource
{
    protected static ?string $model = Appointment::class;
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationLabel = 'Janji Berobat';
    protected static ?string $label = 'Kelola Janji Berobat';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')->disabled(),
                TextInput::make('no_hp')->disabled(),
                TextInput::make('alamat')->disabled(),
                Textarea::make('keluhan')->disabled(),
                DatePicker::make('tanggal')->disabled(),
                TimePicker::make('jam')->disabled(),

                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'confirmed' => 'Confirmed',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                        'rescheduled' => 'Rescheduled',
                    ])
                    ->required()
                    ->reactive(),

                Textarea::make('admin_notes')
                    ->label('Catatan Admin')
                    ->columnSpanFull()
                    ->visible(fn (Get $get) => in_array($get('status'), ['cancelled', 'rescheduled']))
                    ->required(fn (Get $get) => in_array($get('status'), ['cancelled', 'rescheduled']))
                    ->placeholder('Tuliskan alasan jika janji dibatalkan atau dijadwal ulang'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('no_hp')
                    ->label('Handphone'),
                TextColumn::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->sortable(),
                TextColumn::make('alamat')
                    ->searchable()
                    ->label('Alamat')
                    ->limit(50)
                    ->extraAttributes(['class' => 'max-w-[300px] line-clamp-2']),
                TextColumn::make('keluhan')
                    ->label('Keluhan Pasien'),
                TextColumn::make('tanggal')
                    ->label('Tanggal Janji Temu')
                    ->sortable(),
                TextColumn::make('jam')
                    ->label('Jam')
                    ->sortable(),
                TextColumn::make('admin_notes')
                    ->label('Catatan')
                    ->sortable()
                    ->html()
                    ->limit(50)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        return strip_tags($state); // Hapus tag HTML untuk tooltip
                    })
                    ->extraAttributes(['class' => 'max-w-[300px] line-clamp-2'])
                    ->wrap(),
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
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'confirmed' => 'Confirmed',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                        'rescheduled' => 'Rescheduled',
                    ]),
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

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAppointments::route('/'),
        ];
    }
}

<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ProgramResource\Pages;
use App\Models\Program;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProgramResource extends Resource
{
    protected static ?string $model = Program::class;
    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul Program')
                    ->required()
                    ->maxLength(255),
                DatePicker::make('tanggal_kegiatan')
                    ->label('Tanggal Kegiatan')
                    ->nullable(),
                TextInput::make('lokasi')
                    ->label('Lokasi')
                    ->maxLength(255)
                    ->nullable(),
                Select::make('status')
                    ->label('Status')
                    ->options([
                        'Sedang Berjalan' => 'Sedang Berjalan',
                        'Selesai'         => 'Selesai',
                    ])
                    ->default('Sedang Berjalan')
                    ->required(),
                FileUpload::make('gambar')
                    ->label('Gambar')
                    ->image()
                    ->columnSpanFull()
                    ->directory('programs')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->label('Judul Program')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('tanggal_kegiatan')
                    ->label('Tanggal Kegiatan')
                    ->date(),
                TextColumn::make('lokasi')
                    ->label('Lokasi')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->circular(),
            ])
            ->actions([Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()])
            ->filters([

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
            'index'  => Pages\ListPrograms::route('/'),
            'create' => Pages\CreateProgram::route('/create'),
            'edit'   => Pages\EditProgram::route('/{record}/edit'),
        ];
    }
}

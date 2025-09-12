<?php
namespace App\Filament\Resources;

use App\Filament\Resources\KategoriPublikasiResource\Pages;
use App\Models\KategoriPublikasi;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KategoriPublikasiResource extends Resource
{
    protected static ?string $model           = KategoriPublikasi::class;
    protected static ?string $navigationIcon  = 'heroicon-o-tag';
    protected static ?string $navigationGroup = 'Manajemen Konten';
    public static function getNavigationBadge(): ?string
    {
        return (string) KategoriPublikasi::count(); // jumlah data dari tabel publikasi
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama Kategori')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->label('Aktif / Non-aktif')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Kategori')
                    ->sortable()
                    ->searchable(),
                IconColumn::make('is_active')
                    ->boolean()
                    ->label('Aktif / Non-aktif'),
                TextColumn::make('created_at')->label('Dibuat')->dateTime('d M Y H:i'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
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
            'index'  => Pages\ListKategoriPublikasis::route('/'),
            'create' => Pages\CreateKategoriPublikasi::route('/create'),
            'edit'   => Pages\EditKategoriPublikasi::route('/{record}/edit'),
        ];
    }
}

<?php
namespace App\Filament\Resources;

use App\Filament\Resources\WilayahKerjaResource\Pages;
use App\Models\WilayahKerja;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class WilayahKerjaResource extends Resource
{
    protected static ?string $model = WilayahKerja::class;
    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_desa')
                    ->label('Nama Desa')
                    ->required()
                    ->maxLength(255),
                TextInput::make('jumlah_petani')
                    ->label('Jumlah Petani')
                    ->required()
                    ->maxLength(255)
                    ->numeric(),
                TextInput::make('tahun_berdiri')
                    ->label('Tahun Berdiri')
                    ->required()
                    ->maxLength(255)
                    ->numeric(),
                TextInput::make('url_maps')
                    ->label('URL Maps')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_desa')
                    ->label('Nama Desa')
                    ->searchable()
                    ->limit(50)
                    ->sortable(),
                TextColumn::make('jumlah_petani')
                    ->label('Jumlah Petani')
                    ->searchable()
                    ->sortable()
                    ->numeric(),
                TextColumn::make('tahun_berdiri')
                    ->label('Tahun Berdiri')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('url_maps')
                    ->label('URL Maps')
                    ->searchable()
                    ->sortable()
                    ->limit(30),
            ])
            ->filters([
                //
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
            'index'  => Pages\ListWilayahKerjas::route('/'),
            'create' => Pages\CreateWilayahKerja::route('/create'),
            'edit'   => Pages\EditWilayahKerja::route('/{record}/edit'),
        ];
    }
}

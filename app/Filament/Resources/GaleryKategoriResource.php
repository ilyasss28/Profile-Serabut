<?php
namespace App\Filament\Resources;

use App\Filament\Resources\GaleryKategoriResource\Pages;
use App\Models\GaleryKategori;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class GaleryKategoriResource extends Resource
{
    protected static ?string $model = GaleryKategori::class;
    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama Kategori')
                    ->required()
                    ->reactive()
                    ->columnSpanFull(),

                Toggle::make('is_active')
                    ->label('Status')
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
                    ->label('Status'),
                TextColumn::make('created_at')->label('Dibuat')->dateTime('d M Y H:i'),

            ])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()])
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
            'index'  => Pages\ListGaleryKategoris::route('/'),
            'create' => Pages\CreateGaleryKategori::route('/create'),
            'edit'   => Pages\EditGaleryKategori::route('/{record}/edit'),
        ];
    }
}

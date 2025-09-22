<?php
namespace App\Filament\Resources;

use App\Filament\Resources\StatistikResource\Pages;
use App\Models\Statistik;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StatistikResource extends Resource
{
    protected static ?string $model = Statistik::class;
    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('jumlah_desa')
                    ->label('Jumlah Desa')
                    ->required()
                    ->numeric()
                    ->maxLength(255),
                TextInput::make('jumlah_masyarakat')
                    ->label('Jumlah Masyarakat')
                    ->required()
                    ->numeric()
                    ->maxLength(255),
                TextInput::make('jumlah_komoditas')
                    ->label('Jumlah Komoditas')
                    ->required()
                    ->numeric()
                    ->maxLength(255)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jumlah_desa')
                    ->label('Jumlah Desa'),
                TextColumn::make('jumlah_masyarakat')
                    ->label('Jumlah Masyarakat'),
                TextColumn::make('jumlah_komoditas')
                    ->label('Jumlah Komoditas'),
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
            'index'  => Pages\ListStatistiks::route('/'),
            'create' => Pages\CreateStatistik::route('/create'),
            'edit'   => Pages\EditStatistik::route('/{record}/edit'),
        ];
    }
    public static function canCreate(): bool
    {
        if (Statistik::count() >= 1) {
            return false; // hide tombol Create
        }
        return true;
    }
}

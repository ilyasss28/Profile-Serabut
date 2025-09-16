<?php
namespace App\Filament\Resources;

use App\Filament\Resources\GaleryResource\Pages;
use App\Models\Galery;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class GaleryResource extends Resource
{
    protected static ?string $model = Galery::class;
    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('kategori_galery_id')
                    ->label('Kategori Galery')
                    ->relationship(
                        name: 'kategoriGalery',
                        titleAttribute: 'nama',
                        modifyQueryUsing: fn($query) => $query->where('is_active', true)
                    )
                    ->required()
                    ->columnSpanFull(),
                    
                FileUpload::make('gambar')
                    ->label('Gambar Galeri')
                    ->image()
                    ->multiple()
                    ->reorderable()
                    ->required()
                    ->columnSpanFull()
                    ->directory('galery')
                    ->disk('public'),
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kategoriGalery.nama')
                ->label('Kategori Galery')
                ->sortable()
                ->searchable(),

                ImageColumn::make('gambar')
                ->label('Gambar Galery')
                ->square()
                ->circular()
                ->limit(12),
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
            'index'  => Pages\ListGaleries::route('/'),
            'create' => Pages\CreateGalery::route('/create'),
            'edit'   => Pages\EditGalery::route('/{record}/edit'),
        ];
    }
}

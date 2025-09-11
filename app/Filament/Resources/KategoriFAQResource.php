<?php
namespace App\Filament\Resources;

use App\Filament\Resources\KategoriFAQResource\Pages;
use App\Models\KategoriFAQ;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class KategoriFAQResource extends Resource
{
    protected static ?string $model = KategoriFAQ::class;

    protected static ?string $navigationIcon   = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel  = 'Kategori FAQ';
    protected static ?string $pluralModelLabel = 'Kategori FAQ';
    protected static ?string $modelLabel       = 'Kategori FAQ';
    protected static ?string $navigationGroup  = 'Pertanyaan';
    public static function getNavigationBadge(): ?string
    {
        return (string) KategoriFAQ::count();
    }
    public static function getNavigationSort(): ?int
    {
        return 1;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Kategori')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama Kategori')->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Aktif'),
                Tables\Columns\TextColumn::make('created_at')->label('Dibuat')->dateTime('d M Y H:i'),
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
            'index'  => Pages\ListKategoriFAQS::route('/'),
            'create' => Pages\CreateKategoriFAQ::route('/create'),
            'edit'   => Pages\EditKategoriFAQ::route('/{record}/edit'),
        ];
    }
}

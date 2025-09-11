<?php
namespace App\Filament\Resources;

use App\Filament\Resources\KomoditasResource\Pages;
use App\Models\Komoditas;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class KomoditasResource extends Resource
{
    protected static ?string $model = Komoditas::class;

    protected static ?string $navigationIcon   = 'heroicon-o-archive-box';
    protected static ?string $navigationLabel  = 'Komoditas';
    protected static ?string $pluralModelLabel = 'Komoditas';
    protected static ?string $modelLabel       = 'Komoditas';
    protected static ?string $navigationGroup  = 'Tentang Serabut';
    public static function getNavigationBadge(): ?string
    {
        return (string) Komoditas::count();
    }
    public static function getNavigationSort(): ?int
    {
        return 2;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Komoditas')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('deskripsi')
                    ->label('Deskripsi')
                    ->required()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'bulletList',
                        'orderedList',
                        'link',
                        'blockquote',
                        'codeBlock',
                        'redo',
                        'undo',
                        'attachFiles',
                    ])
                    ->nullable()
                    ->columnSpanFull(),

                FileUpload::make('gambar')
                    ->label('Gambar Komoditas')
                    ->required()
                    ->image()
                    ->columnSpanFull()
                    ->directory('komoditas')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->circular(),

                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->limit(50)
                    ->sortable(),

                Tables\Columns\TextColumn::make('deskripsi')
                    ->limit(50)
                    ->formatStateUsing(fn(?string $state) => $state ? strip_tags($state) : '')
                    ->wrap(),
            ])
            ->actions([Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListKomoditas::route('/'),
            'create' => Pages\CreateKomoditas::route('/create'),
            'edit'   => Pages\EditKomoditas::route('/{record}/edit'),
        ];
    }
}

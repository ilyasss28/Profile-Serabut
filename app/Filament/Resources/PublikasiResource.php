<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublikasiResource\Pages;
use App\Filament\Resources\PublikasiResource\RelationManagers;
use App\Models\Publikasi;
use Filament\Forms;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PublikasiResource extends Resource
{

    protected static ?string $model = Publikasi::class;
    protected static ?string $navigationIcon = 'heroicon-o-book-open';
     public static function getNavigationBadge(): ?string
    {
        return (string) Publikasi::count(); // jumlah data dari tabel publikasi
    }



    public static function form(Form $form): Form
    {
       return $form->schema([
            Forms\Components\TextInput::make('judul')
                ->required()
                ->columnSpanFull(),
            Forms\Components\Select::make('kategori_publikasi_id')
                ->label('Kategori Publikasi')
                ->columnSpanFull()
                ->relationship('kategoriPublikasi', 'nama')
                ->required(),
            Forms\Components\RichEditor::make('deskripsi')
                ->label('Deskripsi')
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
            ->required()
            ->columnSpanFull(),

            Forms\Components\TextInput::make('file_url')
                ->label('Link File')
                ->ColumnSpanFull()
                ->required(),
            Forms\Components\FileUpload::make('gambar')
                    ->image()
                    ->directory('gambars')
                    ->required()
                    ->nullable()
                    ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->circular(),
            Tables\Columns\TextColumn::make('judul')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('deskripsi')
                ->limit(50)
                ->formatStateUsing(fn(?string $state) => $state ? strip_tags($state) : '')
                ->wrap(),
            Tables\Columns\TextColumn::make('kategoriPublikasi.nama')->label('Kategori Publikasi'),
            Tables\Columns\TextColumn::make('file_url'),
            Tables\Columns\TextColumn::make('created_at')
            ->label('Tanggal Dibuat')
            ->date(),

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
            'index' => Pages\ListPublikasis::route('/'),
            'create' => Pages\CreatePublikasi::route('/create'),
            'edit' => Pages\EditPublikasi::route('/{record}/edit'),
        ];
    }
}

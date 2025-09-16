<?php
namespace App\Filament\Resources;

use App\Filament\Resources\PublikasiResource\Pages;
use App\Models\Publikasi;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PublikasiResource extends Resource
{

    protected static ?string $model = Publikasi::class;
    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('kategori_publikasi_id')
                ->label('Kategori Publikasi')
                ->relationship(
                    name: 'kategoriPublikasi',
                    titleAttribute: 'nama',
                    modifyQueryUsing: fn($query) => $query->where('is_active', true)
                )
                ->required()
                ->columnSpanFull(),

            TextInput::make('judul')
                ->required()
                ->columnSpanFull(),
            RichEditor::make('deskripsi')
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
            FileUpload::make('gambar')
                ->image()
                ->directory('gambars')
                ->required()
                ->nullable()
                ->columnSpanFull(),
            TextInput::make('penulis')
                ->required()
                ->nullable(),
            TextInput::make('DOI')
                ->label('DOI')
                ->required()
                ->nullable(),
            TextInput::make('penerbit')
                ->required()
                ->nullable(),
            DatePicker::make('tanggal_terbit')
                ->label('Tanggal Terbit')
                ->required()
                ->nullable(),
            FileUpload::make('file_url')
                ->label('Upload File')
                ->directory('files')
                ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])
                ->required()
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('kategoriPublikasi.nama')
                ->label('Kategori Publikasi')
                ->sortable()
                ->searchable(),
            TextColumn::make('judul')
                ->sortable()
                ->searchable(),
            TextColumn::make('deskripsi')
                ->limit(50)
                ->sortable()
                ->searchable()
                ->toggleable(isToggledHiddenByDefault: true),
            ImageColumn::make('gambar')
                ->label('Gambar')
                ->circular()
                ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('penulis')
                ->sortable()
                ->searchable(),
            TextColumn::make('DOI')
                ->label('DOI')
                ->sortable()
                ->searchable()
                ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('penerbit')
                ->sortable()
                ->searchable(),
            TextColumn::make('tanggal_terbit')
                ->label('Tanggal Terbit')
                ->date()
                ->sortable()
                ->searchable(),

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
            'index'  => Pages\ListPublikasis::route('/'),
            'create' => Pages\CreatePublikasi::route('/create'),
            'edit'   => Pages\EditPublikasi::route('/{record}/edit'),
        ];
    }
}

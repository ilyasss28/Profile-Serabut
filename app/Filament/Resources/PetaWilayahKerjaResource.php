<?php
namespace App\Filament\Resources;

use App\Filament\Resources\PetaWilayahKerjaResource\Pages;
use App\Models\PetaWilayahKerja;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PetaWilayahKerjaResource extends Resource
{
    protected static ?string $model = PetaWilayahKerja::class;
    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                RichEditor::make('deskripsi')
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
                FileUpload::make('gambar_peta')
                    ->label('Gambar Peta')
                    ->image()
                    ->directory('PetaWilayahKerja')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable()
                    ->limit(50)
                    ->sortable(),
                TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->formatStateUsing(fn($state) => strip_tags($state))
                    ->limit(40),
                ImageColumn::make('gambar_peta')
                    ->label('Gambar Peta')
                    ->size(50)
                    ->toggleable(),
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
            'index'  => Pages\ListPetaWilayahKerjas::route('/'),
            'create' => Pages\CreatePetaWilayahKerja::route('/create'),
            'edit'   => Pages\EditPetaWilayahKerja::route('/{record}/edit'),
        ];
    }
}

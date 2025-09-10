<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriProgramResource\Pages;
use App\Filament\Resources\KategoriProgramResource\RelationManagers;
use App\Models\KategoriProgram;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;


class KategoriProgramResource extends Resource
{
    protected static ?string $model = KategoriProgram::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
     public static function getNavigationBadge(): ?string
    {
        return (string) KategoriProgram::count(); // jumlah data dari tabel publikasi
    }

    public static function form(Form $form): Form
    {
        return $form
           ->schema([
            TextInput::make('nama')
                ->label('Nama Kategori')
                ->required()
                ->maxLength(255),
            Textarea::make('deskripsi')
                ->label('Deskripsi')
                ->rows(3),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('id')->sortable(),
            TextColumn::make('nama')
                ->label('Nama Kategori')
                ->sortable()
                ->searchable(),
            TextColumn::make('deskripsi')
                ->limit(50)
                ->formatStateUsing(fn(?string $state) => $state ? strip_tags($state) : '')
                ->wrap(),
            TextColumn::make('created_at')
                ->label('Dibuat')
                ->dateTime('d M Y H:i'),
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
            'index' => Pages\ListKategoriPrograms::route('/'),
            'create' => Pages\CreateKategoriProgram::route('/create'),
            'edit' => Pages\EditKategoriProgram::route('/{record}/edit'),
        ];
    }
}

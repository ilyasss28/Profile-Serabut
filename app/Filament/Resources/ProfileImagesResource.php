<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileImagesResource\Pages;
use App\Filament\Resources\ProfileImagesResource\RelationManagers;
use App\Models\ProfileImages;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfileImagesResource extends Resource
{
    protected static ?string $model = ProfileImages::class;

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('profile_id')
                    ->label('Profile')
                    ->relationship(
                        name: 'profile',
                        titleAttribute: 'judul',
                    )
                    ->required()
                    ->columnSpanFull(),

                FileUpload::make('image_path')
                    ->label('Gambar Galeri')
                    ->image()
                    ->required()
                    ->columnSpanFull()
                    ->directory('profile')
                    ->disk('public'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('profile.judul')
                    ->label('Judul')
                    ->limit(50),
                ImageColumn::make('image_path')
                    ->label('Gambar Galeri')
                    ->disk('public')
                    ->circular(),
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
            'index' => Pages\ListProfileImages::route('/'),
            'create' => Pages\CreateProfileImages::route('/create'),
            'edit' => Pages\EditProfileImages::route('/{record}/edit'),
        ];
    }
}

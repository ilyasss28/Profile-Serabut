<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ProfileImageResource\Pages;
use App\Models\ProfileImage;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProfileImageResource extends Resource
{
    protected static ?string $model = ProfileImage::class;
    protected static ?string $navigationIcon   = 'heroicon-o-photo';
    protected static ?string $navigationLabel  = 'Profile Image';
    protected static ?string $pluralModelLabel = 'Profile Image';
    protected static ?string $modelLabel       = 'Profile Image';
    protected static ?string $navigationGroup  = 'Beranda Serabut';
    public static function getNavigationBadge(): ?string
    {
        return (string) ProfileImage::count(); // jumlah data dari tabel publikasi
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('profile_id')
                    ->relationship('profile', 'Judul')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('gambar')
                    ->image()
                    ->required()
                    ->directory('Profile')
                    ->nullable()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('profile_id')
                    ->label('Profile ID')
                    ->getStateUsing(fn ($record) => $record->profile?->judul ?? '-')
                    ->searchable()
                    ->limit(50)
                    ->sortable(),
                ImageColumn::make('gambar')
                    ->label('Gambar'),
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
            'index'  => Pages\ListProfileImages::route('/'),
            'create' => Pages\CreateProfileImage::route('/create'),
            'edit'   => Pages\EditProfileImage::route('/{record}/edit'),
        ];
    }
}

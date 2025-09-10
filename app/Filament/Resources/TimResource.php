<?php
namespace App\Filament\Resources;

use App\Filament\Resources\TimResource\Pages;
use App\Models\Tim;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TimResource extends Resource
{
    protected static ?string $model = Tim::class;

    protected static ?string $navigationIcon   = 'heroicon-o-user-group';
    protected static ?string $navigationLabel  = 'Tim';
    protected static ?string $pluralModelLabel = 'Tim';
    protected static ?string $modelLabel       = 'Tim';
    protected static ?string $navigationGroup  = 'Profile Serabut';
    public static function getNavigationBadge(): ?string
    {
        return (string) Tim::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_tim')
                    ->label('Nama')
                    ->required()
                    ->maxLength(255),

                TextInput::make('jabatan')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('foto')
                    ->image()
                    ->directory('tims')
                    ->required()
                    ->nullable()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('nama_tim')
                    ->label('Nama')
                    ->searchable(),

                TextColumn::make('jabatan')
                    ->label('Jabatan')
                    ->searchable()
                    ->sortable(),

                ImageColumn::make('foto')
                    ->label('Foto')
                    ->circular(),
            ])
            ->actions([Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()])
            ->filters([
                //
            ]);

    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListTims::route('/'),
            'create' => Pages\CreateTim::route('/create'),
            'edit'   => Pages\EditTim::route('/{record}/edit'),
        ];
    }
}

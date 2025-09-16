<?php
namespace App\Filament\Resources;

use App\Filament\Resources\FaqResource\Pages;
use App\Models\Faq;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;
    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('kategori_faq_id')
                    ->label('Kategori FAQ')
                    ->relationship(
                        name: 'kategoriFaq',
                        titleAttribute: 'nama',
                        modifyQueryUsing: fn($query) => $query->where('is_active', true)
                    )
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('question')
                    ->label('Pertanyaan')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Textarea::make('answer')
                    ->label('Jawaban')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->label('Status')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kategoriFaq.nama')
                    ->label('Kategori FAQ')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('question')
                    ->label('Pertanyaan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('answer')
                    ->label('Jawaban')
                    ->sortable()
                    ->limit(50),
                IconColumn::make('is_active')
                    ->boolean()
                    ->sortable()
                    ->label('Status'),
            ])
            ->filters([

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
            'index'  => Pages\ListFaqs::route('/'),
            'create' => Pages\CreateFaq::route('/create'),
            'edit'   => Pages\EditFaq::route('/{record}/edit'),
        ];
    }
}

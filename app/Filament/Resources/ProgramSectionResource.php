<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ProgramSectionResource\Pages;
use App\Models\ProgramSection;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProgramSectionResource extends Resource
{
    protected static ?string $model = ProgramSection::class;
    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('program_id')
                    ->label('Pilih Program')
                    ->relationship('program', 'judul')
                    ->required()
                    ->preload()
                    ->columnSpanFull(),
                TextInput::make('judul_section')
                    ->label('Judul Section')
                    ->required()
                    ->unique(
                        table: 'program_sections',
                        column: 'judul_section',
                        ignoreRecord: true,
                        modifyRuleUsing: fn(\Illuminate\Validation\Rules\Unique $rule, callable $get) =>
                        $rule->where('program_id', $get('program_id'))
                    )
                    ->maxLength(255)
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('program.judul')
                    ->label('Program')
                    ->sortable()->searchable(),
                TextColumn::make('judul_section')
                    ->label('Judul Section')
                    ->sortable()->searchable(),
                TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->limit(50)
                    ->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index'  => Pages\ListProgramSections::route('/'),
            'create' => Pages\CreateProgramSection::route('/create'),
            'edit'   => Pages\EditProgramSection::route('/{record}/edit'),
        ];
    }
}

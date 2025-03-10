<?php

namespace App\Filament\Resources;

use App\Filament\Exports\ActivityExporter;
use App\Filament\Imports\ActivityImporter;
use App\Filament\Resources\ActivityResource\Pages;
use App\Models\Activity;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Actions\ImportAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class ActivityResource extends Resource
{
    protected static ?string $model = Activity::class;
    protected static ?string $navigationIcon = 'heroicon-o-film';

    protected static ?string $navigationGroup = 'Make Fun';

    

    
    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'view_any',
            'create',
            'update',
            'restore',
            'restore_any',
            'replicate',
            'reorder',
            'delete',
            'delete_any',
            'force_delete',
            'force_delete_any',
            'activity:create',
            'activity:update',
            'activity:delete',
            'activity:pagination',
            'activity:detail',
        ];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),
                    
                FileUpload::make('image')
                    ->label('Foto')
                    ->disk('public')
                    ->directory('activities')
                    ->image()
                    ->nullable(), // Bisa kosong
                DatePicker::make('start_date')
                    ->label('Start Date')
                    ->required(),

                DatePicker::make('end_date')
                    ->label('End Date')
                    ->required(),
                RichEditor::make('description')
                    ->label('Description')
                    ->required()
                    ->columnSpanFull(),

                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->limit(25)
                    ->wrap()
                    ->sortable(),
    
                ImageColumn::make('image')
                    ->label('Foto')
                    ->disk('public')
                    ->defaultImageUrl('default.png')
                    ->size(75),
    
                TextColumn::make('description')
                    ->label('Desc')
                    ->html()
                    ->limit(50)
                    ->tooltip(fn ($record) => $record->desc)
                    ->toggleable(isToggledHiddenByDefault: true),

    
                TextColumn::make('start_date')
                    ->label('Start Date')
                    ->dateTime()
                    ->sortable()
                    ->searchable(),
                
                TextColumn::make('end_date')
                    ->label('End Date')
                    ->dateTime()
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->headerActions([
                ExportAction::make()->exporter(ActivityExporter::class),
                ImportAction::make()->importer(ActivityImporter::class),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListActivities::route('/'),
            'create' => Pages\CreateActivity::route('/create'),
            'edit' => Pages\EditActivity::route('/{record}/edit'),
        ];
    }
}

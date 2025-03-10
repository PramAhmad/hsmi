<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MataKuliahResource\Pages;
use App\Filament\Resources\MataKuliahResource\RelationManagers;
use App\Models\MataKuliah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class MataKuliahResource extends Resource
{
    protected static ?string $model = MataKuliah::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    
    protected static ?string $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Mata Kuliah';

    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'view_any',
            'create',
            'update',
            'delete',
            'delete_any',
        ];
    }
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Mata Kuliah')
                    ->schema([
                        Forms\Components\TextInput::make('kode')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(20),
                            
                        Forms\Components\TextInput::make('nama')
                            ->required()
                            ->maxLength(255),
                            
                        Forms\Components\Textarea::make('deskripsi')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                            
                        Forms\Components\TextInput::make('sks')
                            ->required()
                            ->numeric()
                            ->default(3)
                            ->minValue(1)
                            ->maxValue(6),
                            
                        Forms\Components\Select::make('semester')
                            ->options([
                                'Semester 1' => 'Semester 1',
                                'Semester 2' => 'Semester 2',
                                'Semester 3' => 'Semester 3',
                                'Semester 4' => 'Semester 4',
                                'Semester 5' => 'Semester 5',
                                'Semester 6' => 'Semester 6',
                                'Semester 7' => 'Semester 7',
                                'Semester 8' => 'Semester 8',
                            ]),
                    ])
                    ->columns(2),
                    
                Forms\Components\Section::make('Informasi Program')
                    ->schema([
                        Forms\Components\TextInput::make('program_studi')
                            ->maxLength(255),
                            
                        Forms\Components\TextInput::make('fakultas')
                            ->maxLength(255),
                            
                        Forms\Components\Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode')
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('sks')
                    ->numeric()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('semester')
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('program_studi')
                    ->searchable(),
                    
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Aktif')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                    
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('semester')
                    ->options([
                        'Semester 1' => 'Semester 1',
                        'Semester 2' => 'Semester 2',
                        'Semester 3' => 'Semester 3',
                        'Semester 4' => 'Semester 4',
                        'Semester 5' => 'Semester 5',
                        'Semester 6' => 'Semester 6',
                        'Semester 7' => 'Semester 7',
                        'Semester 8' => 'Semester 8',
                    ]),
                    
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status Aktif'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            RelationManagers\BankMaterisRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMataKuliahs::route('/'),
            'create' => Pages\CreateMataKuliah::route('/create'),
            'edit' => Pages\EditMataKuliah::route('/{record}/edit'),
        ];
    }    
}
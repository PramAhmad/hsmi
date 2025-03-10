<?php

// app/Filament/Resources/MenfessResource.php
namespace App\Filament\Resources;

use App\Filament\Resources\MenfessResource\Pages;
use App\Models\Menfess;
use BezhanSalleh\FilamentShield\Support\Utils;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Notifications\Collection;
use Filament\Resources\Resource;
use Filament\Tables\Table;

use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class MenfessResource extends Resource
{
    protected static ?string $model = Menfess::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationGroup = 'Make Fun';
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
                Forms\Components\TextInput::make('sender_name')
                    ->label('Sender Name')
                    ->placeholder('Anonymous'),
                
                // to name
                Forms\Components\TextInput::make('to_name')
                    ->label('To Name')
                    ->placeholder('Anonymous')
                    ->required(),
                RichEditor::make('content')
                    ->required()
                    ->maxLength(1000)
                    ->columnSpan(2),
                
                Forms\Components\TextInput::make('spotify_link')
                    ->label('Spotify Link')
                    ->url()
                    ->columnSpan(2),
                
                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ])
                    ->default('pending')
                    ->required(),
                
                Forms\Components\Textarea::make('rejection_reason')
                    ->maxLength(500)
                    ->visible(fn (callable $get) => $get('status') === 'rejected'),
                
                Forms\Components\Select::make('tags')
                    ->multiple()
                    ->relationship('tags', 'name')
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->unique('tags', 'name'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sender_name')
                    ->label('Sender')
                    ->searchable()
                    ->placeholder('Anonymous'),
                
                Tables\Columns\TextColumn::make('content')
                    ->limit(50)
                    ->wrap()
                    ->html()
                    ->searchable(),
                
                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'approved',
                        'danger' => 'rejected',
                    ]),
                
                Tables\Columns\IconColumn::make('spotify_link')
                    ->label('Spotify')
                    ->boolean()
                    ->trueIcon('heroicon-o-musical-note')
                    ->falseIcon('')
                    ->getStateUsing(fn (Menfess $record): bool => !empty($record->spotify_link)),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ]),
                
                Tables\Filters\Filter::make('has_spotify')
                    ->query(fn (Builder $query) => $query->whereNotNull('spotify_link')),
            ])
            ->actions([
                // Quick approval action
                Tables\Actions\Action::make('approve')
                    ->label('Approve')
                    ->icon('heroicon-o-check')
                    ->color('success')
                    ->visible(fn (Menfess $record) => $record->status === 'pending')
                    ->action(function (Menfess $record) {
                        $record->update([
                            'status' => 'approved',
                            'approved_by' => Auth::id(),
                            'approved_at' => now(),
                        ]);
                    }),
                
                // Reject action with reason
                Tables\Actions\Action::make('reject')
                    ->label('Reject')
                    ->icon('heroicon-o-x-mark')
                    ->color('danger')
                    ->visible(fn (Menfess $record) => $record->status === 'pending')
                    ->form([
                        Forms\Components\Textarea::make('rejection_reason')
                            ->label('Reason for rejection')
                            ->required(),
                    ])
                    ->action(function (Menfess $record, array $data) {
                        $record->update([
                            'status' => 'rejected',
                            'rejection_reason' => $data['rejection_reason'],
                            'approved_by' => Auth::id(),
                            'approved_at' => now(),
                        ]);
                    }),
                
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkAction::make('approve_selected')
                    ->label('Approve Selected')
                    ->icon('heroicon-o-check')
                    ->action(function (Collection $records) {
                        $records->each(function (Menfess $record) {
                            if ($record->status === 'pending') {
                                $record->update([
                                    'status' => 'approved',
                                    'approved_by' => Auth::id(),
                                    'approved_at' => now(),
                                ]);
                            }
                        });
                    })
                    ->deselectRecordsAfterCompletion(),
                
                Tables\Actions\BulkAction::make('reject_selected')
                    ->label('Reject Selected')
                    ->icon('heroicon-o-x-mark')
                    ->color('danger')
                    ->form([
                        Forms\Components\Textarea::make('rejection_reason')
                            ->label('Reason for rejection')
                            ->required(),
                    ])
                    ->action(function (Collection $records, array $data) {
                        $records->each(function (Menfess $record) use ($data) {
                            if ($record->status === 'pending') {
                                $record->update([
                                    'status' => 'rejected',
                                    'rejection_reason' => $data['rejection_reason'],
                                    'approved_by' => Auth::id(),
                                    'approved_at' => now(),
                                ]);
                            }
                        });
                    })
                    ->deselectRecordsAfterCompletion(),
                
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenfesses::route('/'),
            'create' => Pages\CreateMenfess::route('/create'),
            'edit' => Pages\EditMenfess::route('/{record}/edit'),
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return Utils::isResourceNavigationBadgeEnabled()
            ? strval(static::getEloquentQuery()->count())
            : null;
    }
}
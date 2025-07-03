<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Illuminate\Database\Eloquent\Builder;

class ContactResource extends Resource implements HasShieldPermissions
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationLabel = 'Kontak Masuk';

    protected static ?string $modelLabel = 'Kontak';

    protected static ?string $pluralModelLabel = 'Kontak Masuk';

    protected static ?string $navigationGroup = 'Komunikasi';


    protected static ?int $navigationSort = 2;

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
          
        ];
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Kontak')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama')
                            ->required()
                            ->maxLength(255)
                            ->disabled(),

                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->maxLength(255)
                            ->disabled(),

                        Forms\Components\TextInput::make('phone')
                            ->label('No. Telepon')
                            ->tel()
                            ->maxLength(20)
                            ->disabled(),

                        Forms\Components\TextInput::make('subject')
                            ->label('Subjek')
                            ->required()
                            ->maxLength(255)
                            ->disabled(),

                        Forms\Components\Textarea::make('message')
                            ->label('Pesan')
                            ->required()
                            ->rows(4)
                            ->disabled(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Status')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->options([
                                Contact::STATUS_PENDING => 'Menunggu',
                                Contact::STATUS_REPLIED => 'Sudah Dibalas',
                                Contact::STATUS_RESOLVED => 'Selesai',
                            ])
                            ->default(Contact::STATUS_PENDING)
                            ->required(),
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable()
                    ->weight('font-medium'),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('Email berhasil disalin!')
                    ->icon('heroicon-m-envelope'),

                Tables\Columns\TextColumn::make('phone')
                    ->label('Telepon')
                    ->searchable()
                    ->copyable()
                    ->copyMessage('Nomor telepon berhasil disalin!')
                    ->icon('heroicon-m-phone')
                    ->toggleable(),

                Tables\Columns\TextColumn::make('subject')
                    ->label('Subjek')
                    ->searchable()
                    ->sortable()
                    ->limit(50)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= 50) {
                            return null;
                        }
                        return $state;
                    }),

                Tables\Columns\TextColumn::make('message')
                    ->label('Pesan')
                    ->limit(80)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= 80) {
                            return null;
                        }
                        return $state;
                    })
                    ->toggleable(),

                Tables\Columns\BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'warning' => Contact::STATUS_PENDING,
                        'info' => Contact::STATUS_REPLIED,
                        'success' => Contact::STATUS_RESOLVED,
                    ])
                    ->formatStateUsing(function (string $state): string {
                        return match ($state) {
                            Contact::STATUS_PENDING => 'Menunggu',
                            Contact::STATUS_REPLIED => 'Sudah Dibalas',
                            Contact::STATUS_RESOLVED => 'Selesai',
                            default => $state,
                        };
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Dikirim')
                    ->dateTime('d M Y, H:i')
                    ->sortable()
                    ->toggleable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        Contact::STATUS_PENDING => 'Menunggu',
                        Contact::STATUS_REPLIED => 'Sudah Dibalas',
                        Contact::STATUS_RESOLVED => 'Selesai',
                    ]),

                Tables\Filters\Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('created_from')
                            ->label('Dari Tanggal'),
                        Forms\Components\DatePicker::make('created_until')
                            ->label('Sampai Tanggal'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    })
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];

                        if ($data['created_from'] ?? null) {
                            $indicators[] = 'Dari: ' . \Carbon\Carbon::parse($data['created_from'])->format('d M Y');
                        }

                        if ($data['created_until'] ?? null) {
                            $indicators[] = 'Sampai: ' . \Carbon\Carbon::parse($data['created_until'])->format('d M Y');
                        }

                        return $indicators;
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->label('Lihat'),

                Tables\Actions\EditAction::make()
                    ->label('Edit Status'),

                Tables\Actions\Action::make('reply')
                    ->label('Balas Email')
                    ->color('info')
                    ->url(fn (Contact $record): string => "mailto:{$record->email}?subject=Re: {$record->subject}")
                    ->openUrlInNewTab()
                    ->after(function (Contact $record) {
                        if ($record->status === Contact::STATUS_PENDING) {
                            $record->update(['status' => Contact::STATUS_REPLIED]);
                        }
                    }),

                Tables\Actions\DeleteAction::make()
                    ->label('Hapus'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\BulkAction::make('mark_as_replied')
                        ->label('Tandai Sudah Dibalas')
                        ->icon('heroicon-o-check-circle')
                        ->color('info')
                        ->action(function ($records) {
                            $records->each->update(['status' => Contact::STATUS_REPLIED]);
                        })
                        ->requiresConfirmation()
                        ->modalHeading('Tandai sebagai sudah dibalas?')
                        ->modalDescription('Apakah Anda yakin ingin menandai kontak yang dipilih sebagai sudah dibalas?'),

                    Tables\Actions\BulkAction::make('mark_as_resolved')
                        ->label('Tandai Selesai')
                        ->icon('heroicon-o-check-badge')
                        ->color('success')
                        ->action(function ($records) {
                            $records->each->update(['status' => Contact::STATUS_RESOLVED]);
                        })
                        ->requiresConfirmation()
                        ->modalHeading('Tandai sebagai selesai?')
                        ->modalDescription('Apakah Anda yakin ingin menandai kontak yang dipilih sebagai selesai?'),

                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Hapus'),
                ]),
            ])
            ->defaultSort('created_at', 'desc')
            ->poll('60s'); // Auto refresh setiap 60 detik
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make('Informasi Pengirim')
                    ->schema([
                        Infolists\Components\TextEntry::make('name')
                            ->label('Nama')
                            ->icon('heroicon-m-user'),

                        Infolists\Components\TextEntry::make('email')
                            ->label('Email')
                            ->icon('heroicon-m-envelope')
                            ->copyable()
                            ->copyMessage('Email berhasil disalin!'),

                        Infolists\Components\TextEntry::make('phone')
                            ->label('No. Telepon')
                            ->icon('heroicon-m-phone')
                            ->copyable()
                            ->copyMessage('Nomor telepon berhasil disalin!')
                            ->placeholder('Tidak ada'),
                    ])
                    ->columns(3),

                Infolists\Components\Section::make('Pesan')
                    ->schema([
                        Infolists\Components\TextEntry::make('subject')
                            ->label('Subjek')
                            ->weight('font-semibold')
                            ->size('lg'),

                        Infolists\Components\TextEntry::make('message')
                            ->label('Isi Pesan')
                            ->markdown()
                            ->prose(),
                    ]),

                Infolists\Components\Section::make('Status & Waktu')
                    ->schema([
                        Infolists\Components\TextEntry::make('status')
                            ->label('Status')
                            ->badge()
                            ->color(fn (string $state): string => match ($state) {
                                Contact::STATUS_PENDING => 'warning',
                                Contact::STATUS_REPLIED => 'info',
                                Contact::STATUS_RESOLVED => 'success',
                                default => 'gray',
                            })
                            ->formatStateUsing(function (string $state): string {
                                return match ($state) {
                                    Contact::STATUS_PENDING => 'Menunggu',
                                    Contact::STATUS_REPLIED => 'Sudah Dibalas',
                                    Contact::STATUS_RESOLVED => 'Selesai',
                                    default => $state,
                                };
                            }),

                        Infolists\Components\TextEntry::make('created_at')
                            ->label('Tanggal Dikirim')
                            ->dateTime('d F Y, H:i:s')
                            ->icon('heroicon-m-clock'),

                        Infolists\Components\TextEntry::make('updated_at')
                            ->label('Terakhir Diperbarui')
                            ->dateTime('d F Y, H:i:s')
                            ->icon('heroicon-m-arrow-path'),
                    ])
                    ->columns(3),
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'view' => Pages\ViewContact::route('/{record}'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status', Contact::STATUS_PENDING)->count() ?: null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        $pendingCount = static::getModel()::where('status', Contact::STATUS_PENDING)->count();
        
        if ($pendingCount > 10) {
            return 'danger';
        } elseif ($pendingCount > 5) {
            return 'warning';
        } elseif ($pendingCount > 0) {
            return 'info';
        }
        
        return null;
    }
}

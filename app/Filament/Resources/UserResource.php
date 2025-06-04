<?php

namespace App\Filament\Resources;

use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use App\Filament\Exports\UserExporter;
use App\Filament\Imports\UserImporter;
use Filament\Forms\Components\Section;
use Filament\Support\Enums\FontWeight;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Grid;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Actions\ImportAction;
use Filament\Tables\Filters\SelectFilter;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Tables\Actions\ExportBulkAction;
use App\Filament\Resources\UserResource\Pages;
use BezhanSalleh\FilamentShield\Support\Utils;
use STS\FilamentImpersonate\Tables\Actions\Impersonate;
use Filament\Infolists\Components\Section as InfolistSection;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Mahasiswa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Dasar')
                    ->description('Informasi dasar pengguna')
                    ->icon('heroicon-o-user')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->label('Nama Lengkap')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('Masukkan nama lengkap'),
                                    
                                TextInput::make('email')
                                    ->label('Email')
                                    ->email()
                                    ->required()
                                    ->unique(User::class, 'email', ignoreRecord: true)
                                    ->maxLength(255)
                                    ->placeholder('contoh@email.com'),
                            ]),
                            
                        TextInput::make('password')
                            ->label('Password')
                            ->password()
                            ->required(fn (string $context): bool => $context === 'create')
                            ->minLength(8)
                            ->placeholder('Minimal 8 karakter')
                            ->dehydrated(fn ($state) => filled($state))
                            ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                            ->helperText('Kosongkan jika tidak ingin mengubah password'),
                    ]),

                Section::make('Foto Profil')
                    ->description('Upload foto profil pengguna')
                    ->icon('heroicon-o-camera')
                    ->schema([
                        FileUpload::make('avatar_url')
                            ->label('Avatar')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '1:1',
                            ])
                            ->directory('avatars')
                            ->visibility('public')
                            ->maxSize(10048)
                            ->helperText('Maksimal 2MB, format: JPG, PNG. Rasio 1:1 disarankan.')
                            ->columnSpanFull(),
                    ]),

                Section::make('Media Sosial')
                    ->description('Informasi media sosial pengguna')
                    ->icon('heroicon-o-share')
                    ->schema([
                        Repeater::make('social_media')
                            ->label('Akun Media Sosial')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        Select::make('platform')
                                            ->label('Platform')
                                            ->options([
                                                'instagram' => 'Instagram',
                                                'twitter' => 'Twitter/X',
                                                'facebook' => 'Facebook',
                                                'linkedin' => 'LinkedIn',
                                                'github' => 'GitHub',
                                                'youtube' => 'YouTube',
                                                'tiktok' => 'TikTok',
                                                'whatsapp' => 'WhatsApp',
                                            ])
                                            ->required()
                                            ->searchable(),
                                            
                                        TextInput::make('url')
                                            ->label('URL/Username')
                                            ->required()
                                            ->placeholder('https://... atau @username')
                                            ->helperText('Masukkan URL lengkap atau username'),
                                    ]),
                            ])
                            ->defaultItems(0)
                            ->addActionLabel('Tambah Media Sosial')
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => 
                                isset($state['platform']) && isset($state['url']) 
                                    ? ucfirst($state['platform']) . ': ' . $state['url']
                                    : 'Media Sosial Baru'
                            )
                            ->columnSpanFull(),
                    ]),

                Section::make('Role & Permissions')
                    ->description('Pengaturan peran dan izin pengguna')
                    ->icon('heroicon-o-shield-check')
                    ->schema([
                        Select::make('roles')
                            ->label('Peran Pengguna')
                            ->relationship('roles', 'name')
                            ->multiple()
                            ->required()
                            ->searchable()
                            ->preload()
                            ->optionsLimit(10)
                            ->getOptionLabelFromRecordUsing(fn($record) => $record->name)
                            ->helperText('Pilih satu atau lebih peran untuk pengguna ini'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\Layout\Split::make([
                    Tables\Columns\ImageColumn::make('avatar_url')
                        ->label('Avatar')
                        ->circular()
                        ->grow(false)
                        ->defaultImageUrl(fn($record) => "https://ui-avatars.com/api/?name=" . urlencode($record->name) . "&background=0ea5e9&color=ffffff"),
                        
                    Tables\Columns\Layout\Stack::make([
                        Tables\Columns\TextColumn::make('name')
                            ->label('Nama')
                            ->searchable()
                            ->weight(FontWeight::Bold)
                            ->size('sm'),
                            
                        Tables\Columns\TextColumn::make('email')
                            ->label('Email')
                            ->icon('heroicon-m-envelope')
                            ->searchable()
                            ->size('xs')
                            ->color('gray'),
                    ])->space(1),
                    
                    Tables\Columns\Layout\Stack::make([
                        Tables\Columns\TextColumn::make('roles.name')
                            ->label('Role')
                            ->badge()
                            ->separator(', ')
                            ->color('success'),
                            
                        Tables\Columns\TextColumn::make('created_at')
                            ->label('Bergabung')
                            ->since()
                            ->size('xs')
                            ->color('gray'),
                    ])->alignEnd()->visibleFrom('md'),
                ]),
            ])
            ->filters([
                SelectFilter::make('roles')
                    ->label('Filter Role')
                    ->relationship('roles', 'name')
                    ->multiple()
                    ->preload(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->label('Lihat'),
                    
                Tables\Actions\EditAction::make()
                    ->label('Edit'),
                    
                Action::make('change_role')
                    ->label('Ubah Role')
                    ->icon('heroicon-m-adjustments-vertical')
                    ->color('warning')
                    ->form([
                        Select::make('roles')
                            ->label('Peran Baru')
                            ->relationship('roles', 'name')
                            ->multiple()
                            ->required()
                            ->searchable()
                            ->preload()
                            ->optionsLimit(10)
                            ->getOptionLabelFromRecordUsing(fn($record) => $record->name),
                    ])
                    ->action(function (array $data, User $record): void {
                        $record->syncRoles($data['roles']);
                    })
                    ->successNotificationTitle('Role berhasil diubah'),
                    
                Tables\Actions\DeleteAction::make()
                    ->label('Hapus'),
            ])
            ->headerActions([
                ExportAction::make()
                    ->label('Export')
                    ->exporter(UserExporter::class),
                    
                ImportAction::make()
                    ->label('Import')
                    ->importer(UserImporter::class),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Hapus Terpilih'),
                ]),
                
                ExportBulkAction::make()
                    ->label('Export Terpilih')
                    ->exporter(UserExporter::class),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                InfolistSection::make('Informasi Profil')
                    ->icon('heroicon-o-user')
                    ->schema([
                        ImageEntry::make('avatar_url')
                            ->label('Avatar')
                            ->circular()
                            ->defaultImageUrl(fn($record) => "https://ui-avatars.com/api/?name=" . urlencode($record->name) . "&background=0ea5e9&color=ffffff")
                            ->size(100),
                            
                        TextEntry::make('name')
                            ->label('Nama Lengkap')
                            ->weight(FontWeight::Bold)
                            ->size('lg'),
                            
                        TextEntry::make('email')
                            ->label('Email')
                            ->icon('heroicon-m-envelope')
                            ->copyable()
                            ->copyMessage('Email disalin!'),
                            
                        TextEntry::make('roles.name')
                            ->label('Peran')
                            ->badge()
                            ->separator(', ')
                            ->color('success'),
                    ])
                    ->columns(2),

                InfolistSection::make('Media Sosial')
                    ->icon('heroicon-o-share')
                    ->schema([
                        TextEntry::make('social_media')
                            ->label('Akun Media Sosial')
                            ->listWithLineBreaks()
                            ->bulleted()
                            ->limitList(5)
                            ->expandableLimitedList()
                            ->formatStateUsing(function ($state) {
                                if (!is_array($state) || empty($state)) {
                                    return 'Belum ada media sosial yang ditambahkan';
                                }
                                
                                return collect($state)->map(function ($item) {
                                    $platform = ucfirst($item['platform'] ?? 'Unknown');
                                    $url = $item['url'] ?? '';
                                    
                                    if (filter_var($url, FILTER_VALIDATE_URL)) {
                                        return "{$platform}: {$url}";
                                    } else {
                                        return "{$platform}: @{$url}";
                                    }
                                })->toArray();
                            }),
                    ])
                    ->collapsed(),

                InfolistSection::make('Informasi Sistem')
                    ->icon('heroicon-o-information-circle')
                    ->schema([
                        TextEntry::make('created_at')
                            ->label('Tanggal Bergabung')
                            ->dateTime('d F Y, H:i')
                            ->icon('heroicon-o-calendar'),
                            
                        TextEntry::make('updated_at')
                            ->label('Terakhir Diperbarui')
                            ->dateTime('d F Y, H:i')
                            ->icon('heroicon-o-clock'),
                            
                        TextEntry::make('email_verified_at')
                            ->label('Email Terverifikasi')
                            ->placeholder('Belum terverifikasi')
                            ->dateTime('d F Y, H:i')
                            ->icon('heroicon-o-check-badge'),
                    ])
                    ->columns(3)
                    ->collapsed(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getNavigationGroup(): ?string
    {
        return Utils::isResourceNavigationGroupEnabled()
            ? __('User & Permissions')
            : '';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return true;
    }
}
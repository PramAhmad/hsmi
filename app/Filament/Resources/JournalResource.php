<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JournalResource\Pages;
use App\Filament\Widgets\JournalStats;
use App\Models\Journal;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class JournalResource extends Resource implements HasShieldPermissions
{
    protected static ?string $model = Journal::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Jurnal';

    // using the widget
    protected static array $widgets = [
        JournalStats::class,
    ];
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
                Forms\Components\Section::make('Informasi Jurnal')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Judul')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('authors')
                            ->label('Penulis')
                            ->required()
                            ->maxLength(255)
                            ->helperText('Pisahkan nama penulis dengan koma'),
                        Forms\Components\Textarea::make('abstract')
                            ->label('Abstrak')
                            ->rows(4),
                        Forms\Components\TextInput::make('keywords')
                            ->label('Kata Kunci')
                            ->helperText('Pisahkan kata kunci dengan koma'),
                    ]),

                Forms\Components\Section::make('Detail Publikasi')
                    ->schema([
                        Forms\Components\TextInput::make('journal_name')
                            ->label('Nama Jurnal')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('volume')
                            ->maxLength(50),
                        Forms\Components\TextInput::make('issue')
                            ->label('Nomor Terbitan')
                            ->maxLength(50),
                        Forms\Components\TextInput::make('pages')
                            ->label('Halaman')
                            ->maxLength(50),
                        Forms\Components\TextInput::make('publication_year')
                            ->label('Tahun Terbit')
                            ->numeric()
                            ->required(),
                        Forms\Components\DatePicker::make('publication_date')
                            ->label('Tanggal Terbit')
                            ->displayFormat('d/m/Y'),
                        Forms\Components\TextInput::make('doi')
                            ->label('DOI')
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),
                    ]),

                Forms\Components\Section::make('File PDF')
                    ->schema([
                        Forms\Components\FileUpload::make('file_path')
                            ->label('File PDF Jurnal')
                            ->required()
                            ->acceptedFileTypes(['application/pdf'])
                            ->disk('public')
                            ->directory('journals')
                            ->visibility('public')
                            ->maxSize(10240), // 10MB
                            
                        // Preview PDF saat mengedit record yang sudah ada
                        Forms\Components\ViewField::make('pdf_preview')
                            ->label('Preview PDF')
                            ->view('filament.components.pdf-preview')
                            ->visible(fn ($record) => $record && $record->file_path)
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Status')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->options([
                                'published' => 'Dipublikasikan',
                                'draft' => 'Draft',
                                'archived' => 'Diarsipkan',
                            ])
                            ->default('published')
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->limit(25)
                    ->sortable(),
                Tables\Columns\TextColumn::make('authors')
                    ->label('Penulis')
                    ->searchable()
                    ->limit(25)
                    ->sortable(),
                Tables\Columns\TextColumn::make('journal_name')
                    ->label('Jurnal')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('publication_year')
                    ->label('Tahun')
                    ->sortable(),
                Tables\Columns\TextColumn::make('publication_date')
                    ->label('Tanggal Terbit')
                    ->date('d/m/Y')
                    ->sortable(),
                // Kolom preview PDF
               
                Tables\Columns\BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'primary' => 'published',
                        'warning' => 'draft',
                        'danger' => 'archived',
                    ]),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Upload')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'published' => 'Dipublikasikan',
                        'draft' => 'Draft',
                        'archived' => 'Diarsipkan',
                    ]),
                Tables\Filters\Filter::make('publication_year')
                    ->form([
                        Forms\Components\TextInput::make('publication_year')
                            ->label('Tahun Terbit')
                            ->numeric(),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['publication_year'],
                                fn (Builder $query, $year): Builder => $query->where('publication_year', $year),
                            );
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tambahkan action khusus untuk melihat PDF
                Tables\Actions\Action::make('view_pdf')
                    ->label('Lihat PDF')
                    ->color('success')
                    ->icon('heroicon-o-document-text')
                    ->url(fn (Journal $record) => $record->file_path ? asset('storage/' . $record->file_path) : '#')
                    ->openUrlInNewTab(),
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
            'index' => Pages\ListJournals::route('/'),
            'create' => Pages\CreateJournal::route('/create'),
            'edit' => Pages\EditJournal::route('/{record}/edit'),
        ];
    }
}
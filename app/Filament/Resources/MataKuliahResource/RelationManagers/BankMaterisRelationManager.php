<?php

namespace App\Filament\Resources\MataKuliahResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class BankMaterisRelationManager extends RelationManager
{
    protected static string $relationship = 'bankMateris';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Umum')
                    ->schema([
                        Forms\Components\TextInput::make('judul')
                            ->required()
                            ->maxLength(255),
                            
                        Forms\Components\Textarea::make('deskripsi')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                            
                        Forms\Components\Select::make('kategori')
                            ->options([
                                'teori' => 'Teori',
                                'praktikum' => 'Praktikum',
                                'tugas' => 'Tugas',
                                'ujian' => 'Ujian',
                                'quiz' => 'Quiz',
                                'lainnya' => 'Lainnya',
                            ]),
                            
                        Forms\Components\TextInput::make('penulis')
                            ->maxLength(255),
                            
                        Forms\Components\DatePicker::make('tanggal_publikasi'),
                    ])
                    ->columns(2),
                
                Forms\Components\Section::make('Detail Materi')
                    ->schema([
                        Forms\Components\TextInput::make('total_soal')
                            ->numeric()
                            ->default(0)
                            ->minValue(0),
                            
                        Forms\Components\TextInput::make('total_halaman')
                            ->numeric()
                            ->default(0)
                            ->minValue(0),
                            
                        Forms\Components\Toggle::make('is_draft')
                            ->label('Status Draft')
                            ->helperText('Aktifkan jika materi masih draft')
                            ->default(true),
                            
                        Forms\Components\Select::make('tingkat_kesulitan')
                            ->options([
                                1 => 'Sangat Mudah',
                                2 => 'Mudah',
                                3 => 'Sedang',
                                4 => 'Sulit',
                                5 => 'Sangat Sulit',
                            ])
                            ->default(1),
                    ])
                    ->columns(2),
                
                Forms\Components\Section::make('File Materi')
                    ->schema([
                        Forms\Components\Repeater::make('files')
                            ->relationship()
                            ->schema([
                                Forms\Components\TextInput::make('nama_file')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (string $operation, $state, Forms\Set $set, ?string $old) {
                                        if ($operation === 'create' && $old === null) {
                                            $set('nama_file', $state);
                                        }
                                    }),
                                    
                                Forms\Components\FileUpload::make('file_path')
                                    ->label('File PDF')
                                    ->required()
                                    ->acceptedFileTypes(['application/pdf'])
                                    ->directory('bank-materi-files')
                                    ->visibility('private')
                                    ->afterStateUpdated(function (Forms\Set $set, ?string $state, TemporaryUploadedFile $file = null) {
                                        if ($file) {
                                            $set('ukuran_file', round($file->getSize() / 1024)); // Konversi ke KB
                                            $set('nama_file', $file->getClientOriginalName());
                                        }
                                    }),
                                    
                                Forms\Components\TextInput::make('ukuran_file')
                                    ->label('Ukuran File (KB)')
                                    ->disabled()
                                    ->dehydrated()
                                    ->numeric(),
                                    
                                Forms\Components\Hidden::make('tipe_file')
                                    ->default('pdf'),
                                    
                                Forms\Components\TextInput::make('urutan')
                                    ->label('Urutan')
                                    ->numeric()
                                    ->default(fn (Forms\Get $get, Forms\Components\Repeater $component) => $component->getItemsCount() - 1),
                            ])
                            ->columns(2)
                            ->itemLabel(fn (array $state): ?string => $state['nama_file'] ?? null)
                            ->reorderable()
                            ->defaultItems(0)
                            ->addActionLabel('Tambah File PDF')
                            ->collapsible(),
                    ]),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('judul')
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('kategori')
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('total_soal')
                    ->numeric()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('files_count')
                    ->counts('files')
                    ->label('Jumlah File')
                    ->sortable(),
                    
                Tables\Columns\IconColumn::make('is_draft')
                    ->boolean()
                    ->label('Draft')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('tingkat_kesulitan')
                    ->badge()
                    ->color(fn (int $state): string => match ($state) {
                        1 => 'success',
                        2 => 'info',
                        3 => 'warning',
                        4, 5 => 'danger',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (int $state): string => match ($state) {
                        1 => 'Sangat Mudah',
                        2 => 'Mudah',
                        3 => 'Sedang',
                        4 => 'Sulit',
                        5 => 'Sangat Sulit',
                        default => (string) $state,
                    }),
                    
                Tables\Columns\TextColumn::make('tanggal_publikasi')
                    ->date()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('kategori')
                    ->options([
                        'teori' => 'Teori',
                        'praktikum' => 'Praktikum',
                        'tugas' => 'Tugas',
                        'ujian' => 'Ujian',
                        'quiz' => 'Quiz',
                        'lainnya' => 'Lainnya',
                    ]),
                    
                Tables\Filters\SelectFilter::make('tingkat_kesulitan')
                    ->options([
                        1 => 'Sangat Mudah',
                        2 => 'Mudah',
                        3 => 'Sedang',
                        4 => 'Sulit',
                        5 => 'Sangat Sulit',
                    ]),
                    
                Tables\Filters\TernaryFilter::make('is_draft')
                    ->label('Status Draft'),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
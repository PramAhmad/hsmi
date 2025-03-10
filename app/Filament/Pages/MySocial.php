<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Jeffgreco13\FilamentBreezy\Livewire\PersonalInfo;

class MySocial extends PersonalInfo
{
    protected function getUpdateProfileFormSchema(): array
    {
        $schema = parent::getUpdateProfileFormSchema();
        
        // Tambahkan form social media
        $schema[] = Section::make('Social Media')
            ->description('Tambahkan akun media sosial Anda')
            ->schema([
                Repeater::make('social_media')
                    ->schema([
                        Select::make('platform')
                            ->options([
                                'facebook' => 'Facebook',
                                'twitter' => 'Twitter/X',
                                'instagram' => 'Instagram',
                                'linkedin' => 'LinkedIn',
                                'youtube' => 'YouTube',
                                'tiktok' => 'TikTok',
                                'github' => 'GitHub',
                                'other' => 'Lainnya',
                            ])
                            ->required(),
                        TextInput::make('username')
                            ->required()
                            ->placeholder('Username atau URL profil'),
                        TextInput::make('url')
                            ->url()
                            ->placeholder('URL lengkap (opsional)')
                    ])
                    ->columns(3)
                    ->addActionLabel('Tambah Sosial Media')
                    ->defaultItems(0)
            ]);

        return $schema;
    }
}
<?php

namespace App\Filament\Resources\MenfessResource\Pages;

use App\Filament\Resources\MenfessResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMenfess extends EditRecord
{
    protected static string $resource = MenfessResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }

    //customize redirect after create
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

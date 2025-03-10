<?php

namespace App\Filament\Resources\BankMateriResource\Pages;

use App\Filament\Resources\BankMateriResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBankMateri extends EditRecord
{
    protected static string $resource = BankMateriResource::class;

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

<?php

namespace App\Filament\Resources\BankMateriResource\Pages;

use App\Filament\Resources\BankMateriResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBankMateri extends CreateRecord
{
    protected static string $resource = BankMateriResource::class;
    protected static bool $canCreateAnother = false;

    //customize redirect after create
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

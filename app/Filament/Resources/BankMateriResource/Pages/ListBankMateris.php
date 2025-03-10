<?php

namespace App\Filament\Resources\BankMateriResource\Pages;

use App\Filament\Resources\BankMateriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBankMateris extends ListRecords
{
    protected static string $resource = BankMateriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

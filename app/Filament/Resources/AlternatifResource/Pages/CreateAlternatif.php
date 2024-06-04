<?php

namespace App\Filament\Resources\AlternatifResource\Pages;

use App\Filament\Resources\AlternatifResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAlternatif extends CreateRecord
{
    protected static string $resource = AlternatifResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

<?php

namespace App\Filament\Resources\KeuanganResource\Pages;

use App\Filament\Resources\KeuanganResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKeuangan extends CreateRecord
{
    protected static string $resource = KeuanganResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

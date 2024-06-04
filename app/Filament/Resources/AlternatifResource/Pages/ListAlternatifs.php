<?php

namespace App\Filament\Resources\AlternatifResource\Pages;

use App\Filament\Resources\AlternatifResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlternatifs extends ListRecords
{
    protected static string $resource = AlternatifResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

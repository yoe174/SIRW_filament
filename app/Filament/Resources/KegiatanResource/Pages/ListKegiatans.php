<?php

namespace App\Filament\Resources\KegiatanResource\Pages;

use App\Filament\Resources\KegiatanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKegiatans extends ListRecords
{
    protected static string $resource = KegiatanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Buat Kegiatan') -> visible(fn () => !auth()->user()->hasRole('bendahara_rw')),
        ];
    }
}

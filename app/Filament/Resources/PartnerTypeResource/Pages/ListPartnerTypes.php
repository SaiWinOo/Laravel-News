<?php

namespace App\Filament\Resources\PartnerTypeResource\Pages;

use App\Filament\Resources\PartnerTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartnerTypes extends ListRecords
{
    protected static string $resource = PartnerTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

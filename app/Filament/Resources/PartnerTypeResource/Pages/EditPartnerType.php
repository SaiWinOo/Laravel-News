<?php

namespace App\Filament\Resources\PartnerTypeResource\Pages;

use App\Filament\Resources\PartnerTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartnerType extends EditRecord
{
    protected static string $resource = PartnerTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

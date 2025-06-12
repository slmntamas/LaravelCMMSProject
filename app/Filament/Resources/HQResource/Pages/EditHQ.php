<?php

namespace App\Filament\Resources\HQResource\Pages;

use App\Filament\Resources\HQResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHQ extends EditRecord
{
    protected static string $resource = HQResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

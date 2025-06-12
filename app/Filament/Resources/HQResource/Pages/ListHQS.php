<?php

namespace App\Filament\Resources\HQResource\Pages;

use App\Filament\Resources\HQResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHQS extends ListRecords
{
    protected static string $resource = HQResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

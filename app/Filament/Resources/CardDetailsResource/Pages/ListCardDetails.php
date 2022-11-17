<?php

namespace App\Filament\Resources\CardDetailsResource\Pages;

use App\Filament\Resources\CardDetailsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCardDetails extends ListRecords
{
    protected static string $resource = CardDetailsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

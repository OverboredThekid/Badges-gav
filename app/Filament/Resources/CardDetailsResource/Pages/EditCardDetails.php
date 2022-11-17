<?php

namespace App\Filament\Resources\CardDetailsResource\Pages;

use App\Filament\Resources\CardDetailsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCardDetails extends EditRecord
{
    protected static string $resource = CardDetailsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\PermasalahanResource\Pages;

use App\Filament\Resources\PermasalahanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPermasalahans extends ListRecords
{
    protected static string $resource = PermasalahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

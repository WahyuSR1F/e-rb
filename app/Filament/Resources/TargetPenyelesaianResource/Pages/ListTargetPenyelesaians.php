<?php

namespace App\Filament\Resources\TargetPenyelesaianResource\Pages;

use App\Filament\Resources\TargetPenyelesaianResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTargetPenyelesaians extends ListRecords
{
    protected static string $resource = TargetPenyelesaianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

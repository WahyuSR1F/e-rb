<?php

namespace App\Filament\Resources\TargetPenyelesaianResource\Pages;

use App\Filament\Resources\TargetPenyelesaianResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTargetPenyelesaian extends EditRecord
{
    protected static string $resource = TargetPenyelesaianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

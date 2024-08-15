<?php

namespace App\Filament\Resources\TargetAnggaranResource\Pages;

use App\Filament\Resources\TargetAnggaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTargetAnggaran extends EditRecord
{
    protected static string $resource = TargetAnggaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

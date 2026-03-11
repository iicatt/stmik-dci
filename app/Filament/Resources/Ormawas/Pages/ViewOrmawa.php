<?php

namespace App\Filament\Resources\Ormawas\Pages;

use App\Filament\Resources\Ormawas\OrmawaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewOrmawa extends ViewRecord
{
    protected static string $resource = OrmawaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}

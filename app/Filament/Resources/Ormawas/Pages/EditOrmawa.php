<?php

namespace App\Filament\Resources\Ormawas\Pages;

use App\Filament\Resources\Ormawas\OrmawaResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditOrmawa extends EditRecord
{
    protected static string $resource = OrmawaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}

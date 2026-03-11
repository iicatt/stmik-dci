<?php

namespace App\Filament\Resources\Ormawas;

use App\Filament\Resources\Ormawas\Pages\CreateOrmawa;
use App\Filament\Resources\Ormawas\Pages\EditOrmawa;
use App\Filament\Resources\Ormawas\Pages\ListOrmawas;
use App\Filament\Resources\Ormawas\Pages\ViewOrmawa;
use App\Filament\Resources\Ormawas\Schemas\OrmawaForm;
use App\Filament\Resources\Ormawas\Schemas\OrmawaInfolist;
use App\Filament\Resources\Ormawas\Tables\OrmawasTable;
use App\Models\Ormawa;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OrmawaResource extends Resource
{
    protected static ?string $model = Ormawa::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama_organisasi';

    public static function form(Schema $schema): Schema
    {
        return OrmawaForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return OrmawaInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OrmawasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOrmawas::route('/'),
            'create' => CreateOrmawa::route('/create'),
            'view' => ViewOrmawa::route('/{record}'),
            'edit' => EditOrmawa::route('/{record}/edit'),
        ];
    }
}

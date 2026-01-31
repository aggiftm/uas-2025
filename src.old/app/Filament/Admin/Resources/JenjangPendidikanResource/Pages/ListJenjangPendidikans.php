<?php

namespace App\Filament\Admin\Resources\JenjangPendidikanResource\Pages;

use App\Filament\Admin\Resources\JenjangPendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenjangPendidikans extends ListRecords
{
    protected static string $resource = JenjangPendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

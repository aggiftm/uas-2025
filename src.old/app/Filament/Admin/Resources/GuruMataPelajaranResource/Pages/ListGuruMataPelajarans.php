<?php

namespace App\Filament\Admin\Resources\GuruMataPelajaranResource\Pages;

use App\Filament\Admin\Resources\GuruMataPelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGuruMataPelajarans extends ListRecords
{
    protected static string $resource = GuruMataPelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

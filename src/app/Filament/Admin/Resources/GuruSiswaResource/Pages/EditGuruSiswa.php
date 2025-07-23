<?php

namespace App\Filament\Admin\Resources\GuruSiswaResource\Pages;

use App\Filament\Admin\Resources\GuruSiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGuruSiswa extends EditRecord
{
    protected static string $resource = GuruSiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Admin\Resources\JenjangPendidikanResource\Pages;

use App\Filament\Admin\Resources\JenjangPendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenjangPendidikan extends EditRecord
{
    protected static string $resource = JenjangPendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

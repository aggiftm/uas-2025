<?php

namespace App\Filament\Admin\Resources\SummaryResource\Pages;

use App\Filament\Admin\Resources\SummaryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSummary extends EditRecord
{
    protected static string $resource = SummaryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

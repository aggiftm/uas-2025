<?php

namespace App\Filament\Admin\Resources\SummaryResource\Pages;

use App\Filament\Admin\Resources\SummaryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSummaries extends ListRecords
{
    protected static string $resource = SummaryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

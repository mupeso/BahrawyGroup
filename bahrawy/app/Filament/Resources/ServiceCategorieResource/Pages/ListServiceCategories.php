<?php

namespace App\Filament\Resources\ServiceCategorieResource\Pages;

use App\Filament\Resources\ServiceCategorieResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServiceCategories extends ListRecords
{
    protected static string $resource = ServiceCategorieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
         return $this->getResource()::getUrl('index');
    }
}


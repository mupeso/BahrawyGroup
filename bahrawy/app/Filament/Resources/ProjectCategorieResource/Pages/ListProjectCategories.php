<?php

namespace App\Filament\Resources\ProjectCategorieResource\Pages;

use App\Filament\Resources\ProjectCategorieResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjectCategories extends ListRecords
{
    protected static string $resource = ProjectCategorieResource::class;

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

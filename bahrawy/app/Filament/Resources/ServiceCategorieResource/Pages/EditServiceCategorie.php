<?php

namespace App\Filament\Resources\ServiceCategorieResource\Pages;

use App\Filament\Resources\ServiceCategorieResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceCategorie extends EditRecord
{
    protected static string $resource = ServiceCategorieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
         return $this->getResource()::getUrl('index');
    }
    
}

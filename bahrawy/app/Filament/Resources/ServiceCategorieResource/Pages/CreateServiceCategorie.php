<?php

namespace App\Filament\Resources\ServiceCategorieResource\Pages;

use App\Filament\Resources\ServiceCategorieResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateServiceCategorie extends CreateRecord
{
    protected static string $resource = ServiceCategorieResource::class;


    protected function getRedirectUrl(): string
    {
         return $this->getResource()::getUrl('index');
    }
}

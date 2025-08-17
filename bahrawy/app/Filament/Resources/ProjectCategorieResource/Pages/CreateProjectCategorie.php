<?php

namespace App\Filament\Resources\ProjectCategorieResource\Pages;

use App\Filament\Resources\ProjectCategorieResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProjectCategorie extends CreateRecord
{
    protected static string $resource = ProjectCategorieResource::class;
    protected function getRedirectUrl(): string
    {
         return $this->getResource()::getUrl('index');
    }
}

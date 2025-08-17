<?php

namespace App\Filament\Resources\ProjectCategorieResource\Pages;

use App\Filament\Resources\ProjectCategorieResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjectCategorie extends EditRecord
{
    protected static string $resource = ProjectCategorieResource::class;

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

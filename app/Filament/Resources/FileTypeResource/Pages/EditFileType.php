<?php

namespace App\Filament\Resources\FileTypeResource\Pages;

use App\Filament\Resources\FileTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFileType extends EditRecord
{
    protected static string $resource = FileTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\LessonMediaResource\Pages;

use App\Filament\Resources\LessonMediaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLessonMedia extends EditRecord
{
    protected static string $resource = LessonMediaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\LessonMediaResource\Pages;

use App\Filament\Resources\LessonMediaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLessonMedia extends ListRecords
{
    protected static string $resource = LessonMediaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

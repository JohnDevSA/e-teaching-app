<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LessonMediaResource\Pages;
use App\Filament\Resources\LessonMediaResource\RelationManagers;
use App\Models\LessonMedia;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LessonMediaResource extends Resource
{
    protected static ?string $model = LessonMedia::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('lesson_id')
                    ->required()
                    ->relationship('lesson', 'name'),
//                    ->maxLength(255),
//                Forms\Components\TextInput::make('file_type_id')
//                    ->required()
//                    ->maxLength(255),
                Forms\Components\FileUpload::make('file_path')
                    ->required(),
//                    ->maxLength(255),
//                Forms\Components\TextInput::make('file_size')
//                    ->required()
//                    ->maxLength(255),
//                Forms\Components\TextInput::make('uploaded_by')
//                    ->required()
//                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('lesson.name',)
                    ->searchable(),
//                Tables\Columns\TextColumn::make('file_type_id')
//                    ->searchable(),
                Tables\Columns\TextColumn::make('file_path')
                    ->searchable(),
//                Tables\Columns\TextColumn::make('file_size')
//                    ->searchable(),
//                Tables\Columns\TextColumn::make('uploaded_by')
//                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLessonMedia::route('/'),
            'create' => Pages\CreateLessonMedia::route('/create'),
            'edit' => Pages\EditLessonMedia::route('/{record}/edit'),
        ];
    }
}

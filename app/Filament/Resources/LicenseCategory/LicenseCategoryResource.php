<?php

namespace App\Filament\Resources\LicenseCategory;

use App\Filament\Resources\LicenseCategory\LicenseCategoryResource\Pages;
use App\Models\LicenseCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class LicenseCategoryResource extends Resource
{
    protected static ?string $model = LicenseCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListLicenseCategories::route('/'),
            'create' => Pages\CreateLicenseCategory::route('/create'),
            'edit' => Pages\EditLicenseCategory::route('/{record}/edit'),
        ];
    }
}

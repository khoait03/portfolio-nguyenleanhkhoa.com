<?php

namespace App\Filament\Resources\ProductCategory;

use App\Filament\Resources\ProductCategory\ProductCategoryResource\Pages;
use App\Models\ProductCategory;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProductCategoryResource extends Resource
{
    protected static ?string $model = ProductCategory::class;
    protected static ?string $modelLabel = 'Danh mục sản phẩm';
    protected static ?string $slug = 'product-categories';
    protected static ?string $navigationLabel = 'Danh mục';
    protected static ?string $navigationGroup = 'Sản phẩm';
    protected static ?string $navigationIcon = 'heroicon-o-cube';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Grid::make(3)
                    ->schema([

                        Grid::make(1)->schema([
                            Section::make('Thông tin danh mục sản phẩm')
                                ->schema([
                                    TextInput::make('name')
                                        ->required()
                                        ->maxLength(255)
                                        ->live(onBlur: true)
                                        ->afterStateUpdated(function ($state, Set $set) {
                                            $set('slug', Str::slug($state));
                                        })
                                        ->label('Tên danh mục')
                                        ->unique(ignoreRecord: true),

                                    TextInput::make('slug')
                                        ->required()
                                        ->dehydrated()
                                        ->maxLength(255)
                                        ->rules([
                                            'regex:/^[a-zA-Z0-9\-]+$/u',
                                        ])
                                        ->unique(ignoreRecord: true)
                                        ->validationAttribute('Slug'),
                                ])
                        ])->columnSpan(2),

                        Grid::make(1)->schema([
                            Section::make('Trạng thái hiển thị')
                                ->schema([
                                    Toggle::make('status')
                                        ->label('Hiển thị'),
                                ]),
                            Section::make()
                                ->schema([
                                    Placeholder::make('created_at')
                                        ->label('Thời gian tạo')
                                        ->content(fn ($record) => $record ? $record->created_at->format('d/m/Y H:i:s') : '-'),

                                    Placeholder::make('updated_at')
                                        ->label('Thời gian cập nhật mới nhất')
                                        ->content(fn ($record) => $record ? $record->updated_at->format('d/m/Y H:i:s') : '-'),
                                ]),

                        ])->columnSpan(1),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('slug')->sortable()->searchable(),
                Tables\Columns\ToggleColumn::make('status')->label('Trạng thái'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProductCategories::route('/'),
            'create' => Pages\CreateProductCategory::route('/create'),
            'edit' => Pages\EditProductCategory::route('/{record}/edit'),
        ];
    }
}

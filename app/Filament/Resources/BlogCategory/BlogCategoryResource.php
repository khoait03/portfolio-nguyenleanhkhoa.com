<?php

namespace App\Filament\Resources\BlogCategory;

use App\Filament\Resources\BlogCategory\BlogCategoryResource\Pages;
use App\Models\BlogCategory;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class BlogCategoryResource extends Resource
{
    protected static ?string $model = BlogCategory::class;
    protected static ?string $modelLabel = 'Danh mục bài viết';
    protected static ?string $slug = 'blog-categories';
    protected static ?string $navigationLabel = 'Danh mục';
    protected static ?string $navigationGroup = 'Bài viết';
    protected static ?string $navigationIcon = 'heroicon-o-cube';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Grid::make(3)
                    ->schema([

                    Grid::make(1)->schema([
                        Section::make('Thông tin danh mục bài viết')
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function ($state, Set $set) {
                                        $set('slug', Str::slug($state));
                                    })
                                    ->label('Tên chuyên ngành')
                                    ->unique(ignoreRecord: true)
                                    ->validationAttribute('Tên chuyên ngành'),

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
                        Section::make()
                            ->schema([
                                Placeholder::make('created_at')
                                    ->label('Thời gian tạo')
                                    ->content(fn ($record) => $record ? $record->created_at->format('d/m/Y H:i:s') : '-'),

                                Placeholder::make('updated_at')
                                    ->label('Thời gian cập nhật mới nhất')
                                    ->content(fn ($record) => $record ? $record->updated_at->format('d/m/Y H:i:s') : '-'),
                            ])
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
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogCategories::route('/'),
            'create' => Pages\CreateBlogCategory::route('/create'),
            'edit' => Pages\EditBlogCategory::route('/{record}/edit'),
        ];
    }
}

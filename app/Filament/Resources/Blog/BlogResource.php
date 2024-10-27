<?php

namespace App\Filament\Resources\Blog;

use App\Filament\Resources\Blog\BlogResource\Pages;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;
    protected static ?string $modelLabel = 'Bài viết';
    protected static ?string $slug = 'blogs';
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationLabel = 'Bài viết';
    protected static ?string $navigationGroup = 'Bài viết';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Tiêu đề')->schema([
                    Forms\Components\TextInput::make('title')
                        ->label('Tiêu Đề')
                        ->required(),
                    Forms\Components\TextInput::make('slug')
                        ->label('Đường Dẫn')
                        ->required()
                        ->unique(Blog::class, 'slug', ignorable: fn ($record) => $record),

                    Forms\Components\Select::make('categories')
                        ->relationship('categories', 'name') // Lấy danh sách danh mục từ model Category
                        ->multiple() // Cho phép chọn nhiều danh mục
                        ->label('Danh mục')
                        ->preload()->columnSpanFull(),
                ])->columns(2), // Chia 2 cột

                Forms\Components\Section::make('Nội dung')->schema([
                    RichEditor::make('content')
                        ->label('Nội Dung')
                        ->required(),
                    Forms\Components\FileUpload::make('image')
                        ->label('Hình Ảnh Nổi Bật')
                        ->nullable(),
                ])->columns(1), // 1 cột cho nội dung

                Forms\Components\Section::make('SEO')->schema([
                    Forms\Components\TextInput::make('meta_title')
                        ->label('Tiêu Đề Meta')
                        ->nullable(),
                    Forms\Components\TextInput::make('meta_description')
                        ->label('Mô Tả Meta')
                        ->nullable(),
                    Forms\Components\TextInput::make('meta_keyword')
                        ->label('Từ Khóa Meta')
                        ->nullable(),
                ])->columns(1), // 1 cột cho metadata
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable()->label('Tiêu Đề'),
                Tables\Columns\TextColumn::make('slug')->sortable()->searchable()->label('Đường Dẫn'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->label('Ngày Tạo'),
                Tables\Columns\TextColumn::make('updated_at')->dateTime()->label('Ngày Cập Nhật'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Chỉnh Sửa'),
                Tables\Actions\DeleteAction::make()->label('Xóa'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}

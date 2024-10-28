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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

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
                        ->nullable()
                        ->directory('blogs')
                        ->reorderable()
                        ->preserveFilenames()
                        ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file, $record, callable $get): string {
                            // Lấy giá trị của `title` từ form, mặc định là 'du-an' nếu không có
                            $title = $get('title') ?? 'bai-biet';
                            $slug = Str::slug($title);

                            // Đổi tên file với tiền tố slug và chuỗi ngẫu nhiên
                            return $slug . '-' . Str::random(5) . '.' . $file->getClientOriginalExtension();
                        })
                        //Xóa ảnh sau khi xóa sản phẩm
                        ->deleteUploadedFileUsing(function ($file) {
                            if ($file instanceof TemporaryUploadedFile) {
                                // Nếu là một TemporaryUploadedFile, lấy đường dẫn từ getPathname
                                Storage::disk('public')->delete($file->getPathname());
                            } elseif (is_string($file)) {
                                // Nếu là một string, xóa trực tiếp từ đường dẫn
                                Storage::disk('public')->delete($file);
                            }
                        }),
                ])->columns(1),

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
                ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Hình ảnh'),
                Tables\Columns\TextColumn::make('title')->sortable()->searchable()->label('Tiêu Đề'),
                Tables\Columns\TextColumn::make('slug')->sortable()->searchable()->label('Đường Dẫn'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->label('Ngày Tạo'),
                Tables\Columns\TextColumn::make('updated_at')->dateTime()->label('Ngày Cập Nhật'),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}

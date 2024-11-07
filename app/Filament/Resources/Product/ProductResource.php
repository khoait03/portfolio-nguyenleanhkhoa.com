<?php

namespace App\Filament\Resources\Product;

use App\Filament\Resources\Product\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Set;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $modelLabel = 'Sản phẩm';
    protected static ?string $slug = 'products';
    protected static ?string $navigationLabel = 'Sản phẩm';
    protected static ?string $navigationGroup = 'Sản phẩm';
    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Thông tin sản phẩm')->schema([

                        TextInput::make('name')
                            ->required()
                            ->maxLength(200)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation
                            === 'create' ? $set('slug', Str::slug($state)) : null)
                            ->label('Tên sản phẩm'),

                        TextInput::make('slug')
                            ->required()
                            ->dehydrated()
                            ->unique(Product::class, 'slug', ignoreRecord: true)
                            ->maxLength(200)
                            ->label('Slug (Đường dẫn)'),

                        TextInput::make('demo')
                            ->required()
                            ->maxLength(200)
                            ->label('Link Demo')
                            ->columnSpanFull(),

                        RichEditor::make('description')
                            ->required()
                            ->columnSpanFull(),

                    ])->columns(2),

                    Section::make('Hình ảnh mô tả sản phẩm')->schema([
                        FileUpload::make('images')
                            ->multiple()
                            ->directory('products/description')
                            ->label('Chọn ảnh định dạng PNG, JPG')
                            ->maxFiles(5)
                            ->reorderable()
                            ->preserveFilenames()
//                            ->getUploadedFileNameForStorageUsing(
//                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
//                                    ->prepend('san-pham-'),
//                            )
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file, $record, callable $get): string {
                                // Lấy giá trị của `title` từ form, mặc định là 'du-an' nếu không có
                                $title = $get('name') ?? 'san-pham';
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
                            })
                            ->columnSpan(2),
                    ])->columns(2),

                    Section::make('SEO')->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->label('Tiêu Đề Meta')
                            ->maxLength(255)
                            ->nullable(),
                        Forms\Components\TextInput::make('meta_description')
                            ->label('Mô Tả Meta')
                            ->maxLength(255)
                            ->nullable(),
                        Forms\Components\TextInput::make('meta_keyword')
                            ->label('Từ Khóa Meta')
                            ->maxLength(255)
                            ->nullable(),
                    ])->columns(1),

                ])->columnSpan(2),

                Group::make()->schema([
                    Section::make('Giá sản phẩm')->schema([
                        TextInput::make('price')->label('Giá tiền')
                            ->required()
                            ->numeric()
                            ->suffix('VNĐ')->columnSpanFull(),
                    ]),

                    Section::make('Thông tin sản phẩm')->schema([
                        Select::make('category_id')->label('Danh mục sản phẩm')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship('category', 'name'),
                    ]),

                    Section::make('Hình ảnh')->schema([
                        FileUpload::make('main_image')
                            ->directory('products/main')
                            ->label('Chọn ảnh định dạng PNG, JPG')
                            ->reorderable()
                            ->preserveFilenames()
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file, $record, callable $get): string {
                                // Lấy giá trị của `title` từ form, mặc định là 'du-an' nếu không có
                                $title = $get('name') ?? 'san-pham';
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
                    ]),

                    Section::make('Trạng thái')->schema([
                        Toggle::make('status')->label('Hiển thị'),
                    ]),




                ])->columnSpan(1)

            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('row_number')
                    ->label('#')
                    ->getStateUsing(fn($rowLoop) => $rowLoop->index + 1),
                Tables\Columns\ImageColumn::make('main_image')->label('Hình ảnh'),
                Tables\Columns\TextColumn::make('name')->label('Têm sản phẩm'),
                Tables\Columns\TextColumn::make('categories.name')
                    ->sortable()
                    ->label('Danh mục'),
                Tables\Columns\TextColumn::make('price')
                    ->label('Giá tiền')
                    ->suffix('.đ')
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('status')->label('Trạng thái'),
            ])
            ->reorderable('order')
            ->filters([
                Tables\Filters\SelectFilter::make('category')->label('Danh mục')
                    ->relationship('category', 'name'),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
